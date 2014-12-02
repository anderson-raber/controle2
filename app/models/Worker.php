<?php

class Worker extends Eloquent {
	protected $table = 'worker';

	protected $hidden = array('password', 'remember_token');

	protected $fillable = [
		'name', 'job', 'password',
	];
}
