<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author',
        'date'
    ];

    public function setTitleAttribute($title){
        $this->attributes['title'] = ucfirst(trim(preg_replace('/\s+/',' ', $title)));
    }

    public function setContentAttribute($content){
        $this->attributes['content'] = ucfirst(trim(preg_replace('/\s+/',' ', $content)));
    }

    public function setAuthorAttribute($author){
        $this->attributes['author'] = ucfirst(trim(preg_replace('/\s+/',' ', $author)));
    }
}
