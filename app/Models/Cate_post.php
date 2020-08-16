<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cate_post extends Model
{
    public $timestamps = true;
    protected function Post()
    {
        return $this->hasMany(Post::class, 'cate_post_id');
    }
    protected $fillable = [
        "name_vi",
        "slug_vi",
        "description",
        "image",
        "parent_id",
        "position",
        "description_vi",
        "status",
        "title_seo_vi",
        "meta_key_vi",
        "meta_des_vi",
        "title_seo_vi",
    ];

    protected $hidden = ["created_at","updated_at","deleted_at"];
}

