<?php

class Reply extends \Eloquent {

	use SoftDeletingTrait;

	protected $fillable = ['post', 'user', 'content'];
    protected $table = 'replies';

	public function user()
	{
		return $this->belongsTo('User', 'user');
	}

	public function post()
	{
		return $this->belongsTo('Post', 'post');
	}

	public function comments()
	{
		return $this->hasMany('Comment', 'reply');
	}

}