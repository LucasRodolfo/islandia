<?php

class Post extends \Eloquent {
	protected $fillable = [];
    protected $table = 'posts';

	public function user()
	{
		$this->belongsTo('User', 'user');
	}
}