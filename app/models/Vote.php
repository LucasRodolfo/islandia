<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Vote extends \Eloquent {

	use SoftDeletingTrait;

	protected $fillable = ['value', 'post', 'user'];
    protected $table = 'votes';

	public function user()
	{
		return $this->belongsTo('User', 'user');
	}

	public function votable()
	{
		return $this->morphTo();
	}

}