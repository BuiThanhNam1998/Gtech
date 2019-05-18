<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class DanhMucCon extends Model
{
	use Sluggable;
	use SluggableScopeHelpers;
    protected $table = 'danhmuccon';
    public function baiviet()
    {
    	return $this->hasMany('App\BaiViet','id_danhmuccon','id');
    } 
    public function danhmuc()
    {
        return $this->beLongsTo('App\DanhMuc','id_danhmuc','id');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'ten'
            ]
        ];
    }
}
