<?php

class SupplierController extends \BaseController {
	protected $supplier;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	function __construct(Supplier $supplier) {
		$this->supplier = $supplier;
	}
	public function index() {
		//
		$suppliers = $this->supplier->all();
		return View::make('suppliers.index')->with('suppliers', $suppliers);//select * from supplier
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('suppliers.create');
	}
	public function store() {
		$input = Input::all();

		$this->supplier->fill($input);

		/*if (!$this->supplier->isValid()) {
		return Redirect::back()->withInput()->withErrors($this->supplier->errors);
		}*/

		$this->supplier->save();

		return Redirect::route('suppliers.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$supplier = supplier::find($id);
		return View::make('suppliers.show')->with('supplier', $supplier);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$this->supplier = $this->supplier->find($id);

		return View::make('suppliers.edit')->withSupplier($this->supplier);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$this->supplier = $this->supplier->find($id);
		$input = Input::all();
		$this->supplier->fill($input);
		$this->supplier->save();
		return Redirect::route('suppliers.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$this->supplier = $this->supplier->find($id);
		$this->supplier->delete();

		return Redirect::route('suppliers.index');
	}

}
