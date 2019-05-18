<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucCon;
use App\BaiViet;
use App\GioiThieu;

class PageController extends Controller
{
	public function getIndex(){
		$gioithieu = GioiThieu::firstOrFail();
		$baivietganday = BaiViet::orderBy('created_at', 'desc')
               ->take(5)
               ->get();
    	return view('frontend.about',[
    		'baivietganday'=>$baivietganday,
    		'gioithieu'=>$gioithieu,
    	]);
	}
}
