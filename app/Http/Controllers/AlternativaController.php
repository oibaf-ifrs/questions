<?php namespace Questions\Http\Controllers;

use Questions\Http\Requests;
use Questions\Http\Controllers\Controller;
use Questions\Questao;
use Questions\Alternativa;

use Request;
use Session;

class AlternativaController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$alternativas = Alternativa::all();
		return view("alternativa.index",compact("alternativas"));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$questoes = Questao::all();
		return view('alternativa.create',compact("questoes"));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$alternativa=Request::all();
		Alternativa::create($alternativa);
		Session::set('message','Created successfully');
		return redirect('alternativa');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alternativa = Alternativa::find($id);
		$questao = Questao::find($alternativa->questao_id);
		return view("alternativa.show",['alternativa'=>$alternativa,'questao'=>$questao]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alternativa=Alternativa::find($id);
		$questoes = Questao::all();
		return view('alternativa.edit',compact('alternativa','questoes'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$AlternativaUpdate=Request::all();
		$book=Alternativa::find($id);
		$book->update($AlternativaUpdate);
		Session::set('message','Updated successfully');
		return redirect('alternativa');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alternativa::find($id)->delete();
		Session::set('message','Destroyed successfully');
		return redirect('alternativa');
	}

}
