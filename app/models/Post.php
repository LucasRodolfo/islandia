<?php

class Post extends \Eloquent {

	use SoftDeletingTrait;

	protected $fillable = ['title', 'content', 'user'];
    protected $table = 'posts';

	public function user()
	{
		$this->belongsTo('User', 'user');
	}
}