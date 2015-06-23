<?php namespace Questions\Http\Controllers;

use Questions\Http\Requests;
use Questions\Http\Controllers\Controller;
use Questions\Questao;
use Questions\Alternativa;

use Request;
use Session;

class QuestaoController extends Controller {

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
		$questoes = Questao::all();
		return view("questao.index",compact("questoes"));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('questao.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$questao=Request::all();
		Questao::create($questao);
		Session::set('message','Created successfully');
		return redirect('questao');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$questao = Questao::find($id);
		$alternativas = $questao->alternativas->toArray();
		return view("questao.show",['questao'=>$questao,'alternativas'=>$alternativas]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$questao=Questao::find($id);
		return view('questao.edit',compact('questao'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$questaoUpdate=Request::all();
		$book=Questao::find($id);
		$book->update($questaoUpdate);
		Session::set('message','Updated successfully');
		return redirect('questao');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Questao::find($id)->delete();
		Session::set('message','Destroyed successfully');
		return redirect('questao');
	}

}
