<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PageController@getIndex');
Route::get('index','PageController@getIndex');
Route::get('bai-dang/{slug}','BaiVietController@getDetail');
// Route::get('/checkDB', function ()
// {
//     dd(DB::connection()->getDatabaseName());
// });

Route::get('admin/login','UserController@getAdminLogin');
Route::post('admin/login','UserController@postAdminLogin');
Route::get('admin/logout','UserController@getAdminLogout');
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::get('/',function(){
		return view('admin.index');
	});
	Route::get('index',function(){
		return view('admin.index');
	});
	Route::group(['prefix'=>'linh-vuc'],function(){
		Route::get('danh-sach','LinhVucController@getList');
		Route::get('them','LinhVucController@getAdd');
		Route::post('them','LinhVucController@postAdd');
		Route::get('sua/{slug}','LinhVucController@getEdit');
		Route::post('sua/{slug}','LinhVucController@postEdit');
		Route::post('xoa/{id}','LinhVucController@postDelete');
	});
	Route::group(['prefix'=>'danh-muc'],function(){
		Route::get('danh-sach','DanhMucController@getList');
		Route::get('them','DanhMucController@getAdd');
		Route::post('them','DanhMucController@postAdd');
		Route::get('sua/{slug}','DanhMucController@getEdit');
		Route::post('sua/{slug}','DanhMucController@postEdit');
		Route::post('xoa/{id}','DanhMucController@postDelete');
	});
	Route::group(['prefix'=>'danh-muc-con'],function(){
		Route::get('danh-sach','DanhMucConController@getList');
		Route::get('them','DanhMucConController@getAdd');
		Route::post('them','DanhMucConController@postAdd');
		Route::get('sua/{slug}','DanhMucConController@getEdit');
		Route::post('sua/{slug}','DanhMucConController@postEdit');
		Route::post('xoa/{id}','DanhMucConController@postDelete');
	});
	Route::group(['prefix'=>'bai-viet'],function(){
		Route::get('danh-sach','BaiVietController@getList');
		Route::get('them','BaiVietController@getAdd');
		Route::post('them','BaiVietController@postAdd');
		Route::get('sua/{slug}','BaiVietController@getEdit');
		Route::post('sua/{slug}','BaiVietController@postEdit');
		Route::post('xoa/{id}','BaiVietController@postDelete');
	});
	Route::group(['prefix'=>'gioi-thieu'],function(){
		Route::get('chi-tiet','GioiThieuController@getDetail');
		Route::get('sua/{id}','GioiThieuController@getEdit');
		Route::post('sua/{id}','GioiThieuController@postEdit');
	});
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('danhmuc/{idLinhVuc}','AjaxController@getDanhMuc');
		Route::get('danhmuccon/{idDanhMuc}','AjaxController@getDanhMucCon');
	});
});