<?php
class Client extends Eloquent {
	protected $table = 'client';

	protected $fillable = [
		'name', 'surname', 'city', 'email',
	];
}