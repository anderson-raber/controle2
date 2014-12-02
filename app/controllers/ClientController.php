<?php

class ClientController extends \BaseController {
	protected $client;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	function __construct(Client $client) {
		//$this->beforeFilter('auth');
		$this->client = $client;
	}
	public function index() {

		$client = Client::all();
		return View::make('clients.index')->with('clients', $client);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('clients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {

		$dados = Input::all();
		$this->client->fill($dados);

		$this->client->save();

		return Redirect::route('clients.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$client = Client::find($id);
		return View::make('clients.show')->with('client', $client);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
		$this->client = $this->client->find($id);
		return View::make('clients.edit')->withClient($this->client);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$this->client = $this->client->find($id);
		$dados = Input::all();
		$this->client->fill($dados);
		$this->client->save();

		return Redirect::route('clients.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$this->client = $this->client->find($id);
		$this->client->delete();

		return Redirect::route('clients.index');
	}

}
