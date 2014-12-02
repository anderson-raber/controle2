<?php

class Book extends Eloquent {
	protected $table = 'books';

	function users() {
		return $this->belongsToMany('User');
	}
}