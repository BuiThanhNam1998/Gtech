<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;

class LinhVucController extends Controller
{
    public function getList()
    {
        $linhvuc = LinhVuc::paginate(5);
    	return view('admin.linhvuc.danhsach',['linhvuc'=>$linhvuc]);
    }
    public function getAdd()
    {
    	return view('admin.linhvuc.them');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'ten' => 'required',
               
            ],
            [
                'ten.required' => 'Bạn chưa điền tên lĩnh vực',
            ]);
        $linhvuc = new LinhVuc;
        $linhvuc->ten = $request->ten;
        $linhvuc->save();
        return redirect('admin/linh-vuc/them')->with('message','Thêm thành công');
    }
    public function getEdit($slug)
    {
    	$linhvuc = linhvuc::findBySlugOrFail($slug);
    	return view('admin.linhvuc.sua',['linhvuc'=>$linhvuc]);
    }
    public function postEdit(Request $request,$slug)
    {
         $this->validate($request,
            [
                'ten' => 'required',
               
            ],
            [
                'ten.required' => 'Bạn chưa điền tên lĩnh vực',
            ]);
        $linhvuc = linhvuc::findBySlugOrFail($slug);
        $linhvuc->ten = $request->ten;
        $linhvuc->save();
        return redirect('admin/linh-vuc/sua/'.$slug)->with('message','Sửa thành công');
    }
    public function postDelete($id)
    {
    	$linhvuc = linhvuc::findOrFail($id);
    	$linhvuc->delete();
    	return redirect('admin/linh-vuc/danh-sach')->with('message','Xóa thành công');
    }
}
