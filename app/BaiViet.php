<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class BaiViet extends Model
{
	use Sluggable;
	use SluggableScopeHelpers;
    protected $table = 'baiviet';
   
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'tieude'
            ]
        ];
    }
    public function danhmuccon()
    {
    	return $this->beLongsTo('App\DanhMucCon','id_danhmuccon','id');
    }
} 
