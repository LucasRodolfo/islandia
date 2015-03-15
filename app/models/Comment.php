<?php

class Comment extends \Eloquent {
	protected $fillable = ['content', 'user', 'reply'];
    protected $table = 'comments';

	public function user()
	{
		$this->belongsTo('User', 'user');
	}

	public function reply()
	{
		$this->belongsTo('Reply', 'reply');
	}

}