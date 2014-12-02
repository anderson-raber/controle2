<?php
class Supplier extends Eloquent {
	protected $table = 'supplier';

	protected $fillable = [
		'name', 'city',
	];
}