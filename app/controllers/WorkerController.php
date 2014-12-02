<?php

class WorkerController extends \BaseController {
	protected $worker;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	function __construct(Worker $worker) {
		$this->beforeFilter('auth');
		$this->worker = $worker;
	}
	public function index() {

		$worker = Worker::all();
		return View::make('workers.index')->with('workers', $worker);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('workers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {

		$dados = Input::all();
		$this->worker->fill($dados);
		$this->worker->password = Hash::make($dados['password']);

		$this->worker->save();

		return Redirect::route('workers.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$worker = Worker::find($id);
		return View::make('workers.show')->with('worker', $worker);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
		$this->worker = $this->worker->find($id);
		return View::make('workers.edit')->withWorker($this->worker);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$this->worker = $this->worker->find($id);
		$dados = Input::all();
		$this->worker->fill($dados);
		$this->worker->save();

		return Redirect::route('workers.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$this->worker = $this->worker->find($id);
		$this->worker->delete();

		return Redirect::route('workers.index');
	}

}
