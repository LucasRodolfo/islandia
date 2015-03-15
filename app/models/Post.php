<?php

class Post extends \Eloquent {

	use SoftDeletingTrait;

	protected $fillable = ['title', 'content', 'user'];
    protected $table = 'posts';
    protected $primaryKey = 'id';

	public function user()
	{
		return $this->belongsTo('User', 'user');
	}

	public function replies()
	{
		return $this->hasMany('Reply', 'post');
	}

	public function votes()
	{
		return $this->hasMany('Vote', 'vote');
	}
}
