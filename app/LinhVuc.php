<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class LinhVuc extends Model
{
	use Sluggable;
	use SluggableScopeHelpers;
    protected $table = 'linhvuc';
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'ten'
            ]
        ];
    }

    public function chuyenmuc()
    {
    	return $this->hasMany('App\ChuyenMuc','id_linhvuc','id');
    }
}
