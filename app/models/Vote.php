<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Vote extends \Eloquent {

	use SoftDeletingTrait;

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