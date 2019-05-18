<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaiViet;
use App\LinhVuc;
use App\DanhMucCon;
use App\DanhMuc;
use Illuminate\Support\Facades\Auth;

class BaiVietController extends Controller
{
    public function getDetail($slug) 
    {
    	$baiviet = BaiViet::findBySlugOrFail($slug);
    	if($baiviet->status==0){
    		abort(404, 'Page not found');
    	}
    	$baivietlienquan = BaiViet::where('id_danhmuccon',$baiviet->id_danhmuccon)->get();
    	$baiviettop = BaiViet::where('status', 1)
               ->orderBy('luotxem', 'desc')
               ->take(3)
               ->get();
      $danhmuccon_sb = DanhMucCon::orderBy('created_at', 'desc')
               ->take(10)
               ->get();
      $baiviet->luotxem +=1;
      $baiviet->save();
    	return view('frontend.post',[
        'baiviet'=>$baiviet,
    		'baivietlienquan'=>$baivietlienquan,
    		'baiviettop'=>$baiviettop,
    		'danhmuccon_sb'=>$danhmuccon_sb
    	]);
    }
    public function getList()
    {
      $baiviet = BaiViet::paginate(5);
      return view('admin.baiviet.danhsach',['baiviet'=>$baiviet]);
    }
    public function getAdd()
    {
      $linhvuc = LinhVuc::all();
      $danhmuc = DanhMuc::all();
      $danhmuccon = DanhMucCon::all();
      return view('admin.baiviet.them',[
        'linhvuc'=>$linhvuc,
        'danhmuc'=>$danhmuc,
        'danhmuccon'=>$danhmuccon,
      ]);
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'tieude' => 'required',
               
            ],
            [
                'ten.required' => 'Bạn chưa điền tên tieude',
            ]);
        $baiviet = new BaiViet;
        $baiviet->tieude = $request->tieude;
        $baiviet->tomtat = $request->tomtat;
        $baiviet->noidung = $request->noidung;
        $baiviet->id_danhmuccon = $request->danhmuccon;
        if(Auth::check()){
          $baiviet->id_user = Auth::user()->id;
        }
        $baiviet->save();
        return redirect('admin/bai-viet/them')->with('message','Thêm thành công');
    }
    public function getEdit($slug)
    {
      $linhvuc = LinhVuc::all();
      $danhmuc = DanhMuc::all();
      $danhmuccon = DanhMucCon::all();
      $baiviet = baiviet::findBySlugOrFail($slug);
      return view('admin.baiviet.sua',[
        'baiviet'=>$baiviet,
        'linhvuc'=>$linhvuc,
        'danhmuc'=>$danhmuc,
        'danhmuccon'=>$danhmuccon,
        ]);
    }
    public function postEdit(Request $request,$slug)
    {
         $this->validate($request,
            [
                'tieude' => 'required',
               
            ],
            [
                'ten.required' => 'Bạn chưa điền tiêu đề',
            ]);
        $baiviet = baiviet::findBySlugOrFail($slug);
        $baiviet->tieude = $request->tieude;
        $baiviet->tomtat = $request->tomtat;
        $baiviet->noidung = $request->noidung;
        $baiviet->id_user = 2;
        $baiviet->id_danhmuccon = $request->danhmuccon;
        $baiviet->save();
        return redirect('admin/bai-viet/sua/'.$baiviet->slug)->with('message','Sửa thành công');
    }
    public function postDelete($id)
    {
      $baiviet = baiviet::findOrFail($id);
      $baiviet->delete();
      return redirect('admin/bai-viet/danh-sach')->with('message','Xóa thành công');
    }
}
