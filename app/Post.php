<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var array
     *
     * field allowed for filling
     */
    protected $fillable = [
        'name',
        'description',
        'category'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     * post has only one category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
