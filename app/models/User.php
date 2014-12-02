<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

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
	//protected $hidden = array('password', 'remember_token');
	protected $hidden = array('password', 'remember_token');

	protected $fillable = [
		'nome', 'sobrenome', 'dob', 'email', 'password',
	];

	public $rules = ['nome' => 'required',
		'email' => 'required',
		'sobrenome' => 'required',
		'dob' => 'required',
		'password' => 'required',
	];

	public $errors;

	function isValid() {
		//valida objeto
		$validation = Validator::make($this->attributes, $this->rules);

		if ($validation->passes()) {
			return true;

		} else {
			$this->errors = $validation->messages();
			return false;
		}
	}

	function books() {
		return $this->belongsToMany('Book');
	}
}
