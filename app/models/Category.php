<?php

class Category extends \Eloquent {

	use SoftDeletingTrait;

	protected $fillable = ['title'];
    protected $table = 'categories';
}