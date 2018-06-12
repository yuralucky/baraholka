<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     *
     * field allowed for filling
     *
     */
    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     * one category has many posts
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
