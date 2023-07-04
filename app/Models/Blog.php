<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function tags(){
        return $this->belongsToMany(BlogTag::class,'blog_to_blog_tags');
    }
}
