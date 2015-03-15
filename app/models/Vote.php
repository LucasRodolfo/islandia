<?php

class Vote extends \Eloquent {
	protected $fillable = ['value', 'post', 'user'];
    protected $table = 'votes';

	public function user()
	{
		$this->belongsTo('User', 'user');
	}

	public function post()
	{
		$this->belongsTo('Post', 'post');
	}

}