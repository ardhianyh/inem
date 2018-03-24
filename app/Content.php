<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'idx', 'title', 'type', 'category_1', 'category_2', 'category_3', 'province', 'city', 'place', 'incident', 'desc', 'chronology', 'note', 'image', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];
}
