<?php

class Comment extends \Eloquent {

	use SoftDeletingTrait;

	protected $fillable = ['content', 'user', 'reply'];
    protected $table = 'comments';

	public function user()
	{
		return $this->belongsTo('User', 'user');
	}

	public function reply()
	{
		return $this->belongsTo('Reply', 'reply');
	}

	public function votes()
	{
		return $this->morphMany('Vote', 'votable');
	}

}