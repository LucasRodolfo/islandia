<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
//use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    protected $guarded = [];

    protected $primaryKey = 'id';

	/**
	 * Function that finds a user by name
	 * @param $name
	 * @return null or user_id
	 */
	public static function getIdByName($name)
	{
		$user = User::where('name', '=', $name)->first();
		if (isset($user))
			return $user->toArray()['id'];

		return NULL;
	}

	/**
	 * Function that finds a user by email
	 * @param $email
	 * @return null or user_id
	 */
	public static function getIdByEmail($email)
	{
		$user = User::where('email', '=', $email)->first();
		if (isset($user))
			return $user->toArray()['id'];

		return NULL;
	}

	/**
	 * Function that finds a user by name
	 * @param $name
	 * @return null or user_id
	 */
	public static function findByName($name)
	{
		$user = User::getIdByName($name);
		if (isset($user))
			return $user;

		return NULL;
	}

	/**
	 * Function that finds a user by email
	 * @param $email
	 * @return null or user_id
	 */
	public static function findByEmail($email)
	{
		$user = User::where('email', '=', $email)->first();
		if (isset($user))
			return $user;

		return NULL;
	}

	public function category()
	{
		return $this->belongsTo('Category', 'category');
	}

	public function posts()
	{
		return $this->hasMany('Post', 'user');
	}

	public function replies()
	{
		return $this->hasMany('Reply', 'user');
	}

	public function votes()
	{
		return $this->hasMany('Vote', 'user');
	}

	public function comments()
	{
		return $this->hasMany('Comment', 'user');
	}

}
