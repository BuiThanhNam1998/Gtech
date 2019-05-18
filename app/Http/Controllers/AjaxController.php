<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMuc;
use App\DanhMucCon;

class AjaxController extends Controller
{
    public function getDanhMuc($idLinhVuc){
    	echo "<option value=''>--Danh mục--</option>";
    	$danhmuc = DanhMuc::where('id_linhvuc',$idLinhVuc)->get();
    	foreach($danhmuc as $dm){
    		echo "<option value='".$dm->id."'>".$dm->ten."</option>";
    	}
    }
    public function getDanhMucCon($idDanhMuc){
        echo "<option value=''>--Danh mục--</option>";
    	$danhmuccon = DanhMucCon::where('id_danhmuc',$idDanhMuc)->get();
    	foreach($danhmuccon as $dmc){
    		echo "<option value='".$dmc->id."'>".$dmc->ten."</option>";
    	}
    }
}
