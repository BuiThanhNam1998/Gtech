<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
use App\LinhVuc;

class DanhMucController extends Controller
{
    public function getList()
    {
        $danhmuc = Danhmuc::paginate(5);
    	return view('admin.danhmuc.danhsach',['danhmuc'=>$danhmuc]);
    }
    public function getAdd()
    {
    	$linhvuc = LinhVuc::all();
    	return view('admin.danhmuc.them',['linhvuc'=>$linhvuc]);
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'ten' => 'required',
               
            ],
            [
                'ten.required' => 'Bạn chưa điền tên danh mục',
            ]);
        $danhmuc = new Danhmuc;
        $danhmuc->ten = $request->ten;
        $danhmuc->id_linhvuc = $request->linhvuc;
        $danhmuc->save();
        return redirect('admin/danh-muc/them')->with('message','Thêm thành công');
    }
    public function getEdit($slug)
    {
        $linhvuc = LinhVuc::all();
    	$danhmuc = danhmuc::findBySlugOrFail($slug);
    	return view('admin.danhmuc.sua',[
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
                'ten.required' => 'Bạn chưa điền tên danh mục',
            ]);
        $danhmuc = Danhmuc::findBySlugOrFail($slug);
        $danhmuc->ten = $request->ten;
        $danhmuc->id_linhvuc = $request->linhvuc;
        $danhmuc->save();
        return redirect('admin/danh-muc/sua/'.$danhmuc->slug)->with('message','Sửa thành công');
    }
    public function postDelete($id)
    {
    	$danhmuc = Danhmuc::findOrFail($id);
    	$danhmuc->delete();
    	return redirect('admin/danh-muc/danh-sach')->with('message','Xóa thành công');
    }
}
