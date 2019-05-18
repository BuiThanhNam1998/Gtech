<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
use App\DanhMuc;
use App\DanhMucCon;

class DanhMucConController extends Controller
{
     public function getList()
    {
        $danhmuccon = DanhMucCon::paginate(5);
        foreach ($danhmuccon as $dmc) {
        	$dmc->save();
        }
    	return view('admin.danhmuccon.danhsach',['danhmuccon'=>$danhmuccon]);
    }
    public function getAdd()
    {
    	$linhvuc = LinhVuc::all();
    	$danhmuc = DanhMuc::all();
    	return view('admin.danhmuccon.them',[
    		'linhvuc'=>$linhvuc,
    		'danhmuc'=>$danhmuc, 
    	]);
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'ten' => 'required',
               
            ],
            [
                'ten.required' => 'Bạn chưa điền tên danh mục con',
            ]);
        $danhmuccon = new DanhMucCon;
        $danhmuccon->ten = $request->ten;
        $danhmuccon->id_danhmuc = $request->danhmuc;
        $danhmuccon->save();
        return redirect('admin/danh-muc-con/them')->with('message','Thêm thành công');
    }
    public function getEdit($slug)
    {
        $linhvuc = LinhVuc::all();
    	$danhmuc = DanhMuc::all();
    	$danhmuccon = danhmuccon::findBySlugOrFail($slug);
    	return view('admin.danhmuccon.sua',[
            'danhmuccon'=>$danhmuccon,
            'danhmuc'=>$danhmuc,
            'linhvuc'=>$linhvuc,
        ]);
    }
    public function postEdit(Request $request,$slug)
    {
         $this->validate($request,
            [
                'ten' => 'required',
               
            ],
            [
                'ten.required' => 'Bạn chưa điền tên danh mục con',
            ]);
        $danhmuccon = danhmuccon::findBySlugOrFail($slug);
        $danhmuccon->ten = $request->ten;
        $danhmuccon->id_danhmuc = $request->danhmuc;
        $danhmuccon->save();
        return redirect('admin/danh-muc-con/sua/'.$danhmuccon->slug)->with('message','Sửa thành công');
    }
    public function postDelete($id)
    {
    	$danhmuccon = DanhMucCon::findOrFail($id);
    	$danhmuccon->delete();
    	return redirect('admin/danh-muc-con/danh-sach')->with('message','Xóa thành công');
    }
}
