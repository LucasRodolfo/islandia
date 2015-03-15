<?php

class Reply extends \Eloquent {
	protected $fillable = [];
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