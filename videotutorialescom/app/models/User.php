<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
//	public $timestamps = false;


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

   /* SE ENCRIPTA LA CONTRASEÑA DE LA SIGUIENTE FORMA */
	public function set_password($string)
	{
		$this->set_attribute('password', Hash::make($string));
	}

  /*	public function setPasswordAttribute($string)
	{
		$this->attributes['password'] = Hash::make($string);
	}﻿
     */

}
