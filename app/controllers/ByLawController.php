<?php

class ByLawController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /bylaw
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Post::orderBy('title')->get();

		return View::make('list')->withItems($items);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bylaw/create
	 *
	 * @return Response
	 */
	public function create()
	{
		if ((Auth::user()) && (Auth::user()->category()->first()->title = "Administradores"))
			return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /bylaw
	 *
	 * @return Response
	 */
	public function store()
	{
	//
	}

	/**
	 * Display the specified resource.
	 * GET /bylaw/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $item = Post::find($id);

		if (isset($item))
       		return View::make('post')->with(['item' => $item]);
		return "ERRO";
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /bylaw/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /bylaw/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /bylaw/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
