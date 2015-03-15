<?php

class Comment extends \Eloquent {
	protected $fillable = [];
    protected $table = 'comment';

	public function user()
	{
		$this->belongsTo('User', 'user');
	}

	public function reply()
	{
		$this->belongsTo('Reply', 'reply');
	}

}