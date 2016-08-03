<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model //php artisan make:migration create_tags_posts_table --create=posts_tags
{
    protected $fillable = [
    	'name'
    ];

    public function posts()
    {
    	return $this->belongsToMany('App\Post', 'posts_tags');
    }
}
