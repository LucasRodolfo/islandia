<?php

class Vote extends \Eloquent {
	protected $fillable = ['value'];
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