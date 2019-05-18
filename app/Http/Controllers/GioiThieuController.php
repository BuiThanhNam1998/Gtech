<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GioiThieu;

class GioiThieuController extends Controller
{
    public function getDetail()
    {
      	$gioithieu = GioiThieu::firstOrFail();
      	return view('admin.gioithieu.chitiet',['gioithieu'=>$gioithieu]);
    }
    public function getEdit($id)
    {
      $gioithieu = gioithieu::findOrFail($id);
      return view('admin.gioithieu.sua',[
        'gioithieu'=>$gioithieu,
        ]);
    }
    public function postEdit(Request $request,$id)
    {
         // $this->validate($request,
         //    [
         //        'tieude' => 'required',
               
         //    ],
         //    [
         //        'ten.required' => 'Bạn chưa điền tiêu đề',
         //    ]);
        $gioithieu = gioithieu::findOrFail($id);
        $gioithieu->noidung = $request->noidung;
        $gioithieu->save();
        return redirect('admin/gioi-thieu/sua/'.$gioithieu->id)->with('message','Sửa thành công');
    }
}
