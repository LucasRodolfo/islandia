<?php

class Reply extends \Eloquent {

	use SoftDeletingTrait;
	
	protected $fillable = ['post', 'user', 'content'];
    protected $table = 'replies';

	public function user()
	{
		$this->belongsTo('User', 'user');
	}

	public function post()
	{
		$this->belongsTo('Post', 'post');
	}

}