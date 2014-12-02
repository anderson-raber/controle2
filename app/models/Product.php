<?php
class Product extends Eloquent {
	protected $table = 'product';

	protected $fillable = [
		'name', 'description', 'value',
	];
}
