<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $with = ['comments'];
    protected $fillable = ['title', 'intro', 'content', 'author'];

    public function capsAuthor() {
        return ucfirst($this->author);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
