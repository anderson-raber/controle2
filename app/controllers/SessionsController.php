<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		//return Input::all();
		$auth = Auth::attempt([
			'email' => Input::get('email'),
			'password' => Input::get('password'),
		]);

		if ($auth) {
			return Redirect::intended('/')->withErrors("Usuário " . Auth::user()->nome . " logado com sucesso!");
		} else {
			return Redirect::back()->withInput()->withErrors("erro na autenticação!");
		}
	}

	public function destroy() {
		Auth::logout();
		return Redirect::intended('/')->withErrors("usuário deslogado");
	}

}
