<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = ['title', 'content','read_more','image'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function delete()
    {
        foreach ($this->comments as $comment) {
            $comment->delete();
        }
        return parent::delete();
    }

}
