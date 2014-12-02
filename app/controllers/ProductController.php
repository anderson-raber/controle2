<?php

class ProductController extends \BaseController {
	protected $product;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	function __construct(Product $product) {
		//$this->beforeFilter('auth');
		$this->product = $product;
	}
	public function index() {

		$product = Product::all();
		return View::make('products.index')->with('products', $product);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {

		$dados = Input::all();
		$this->product->fill($dados);

		$this->product->save();

		return Redirect::route('products.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$product = product::find($id);
		return View::make('products.show')->with('product', $product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
		$this->product = $this->product->find($id);
		return View::make('products.edit')->withProduct($this->product);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$this->product = $this->product->find($id);
		$dados = Input::all();
		$this->product->fill($dados);
		$this->product->save();

		return Redirect::route('products.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$this->product = $this->product->find($id);
		$this->product->delete();

		return Redirect::route('products.index');
	}

}
