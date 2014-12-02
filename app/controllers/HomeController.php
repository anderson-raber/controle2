<?php

class HomeController extends BaseController {

	public function showWelcome() {
		return View::make('base');
	}
	public function showUsername($username) {
		return View::make('home')->with('username', $username);
	}

}
