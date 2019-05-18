<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class DanhMuc extends Model
{
	use Sluggable;
	use SluggableScopeHelpers;
    protected $table = 'danhmuc';
    public function danhmuccon()
    {
    	return $this->hasMany('App\DanhMucCon','id_danhmuc','id');
    }
    public function linhvuc()
    {
        return $this->beLongsTo('App\LinhVuc','id_linhvuc','id');
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
