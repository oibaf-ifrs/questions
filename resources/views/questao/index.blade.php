@extends('app')

@section('content')
<div class="container">
		@if (Session::has('message'))
		<div class="flash alert-info">
			<p>{{ Session::get('message') }}</p>
			{{ Session::forget('message') }}
		</div>
		@endif
	<h1>Questions list</h1>
	<a href="{{ action('QuestaoController@create') }}" class="btn btn-success">New</a>
  <ul>
	@foreach($questoes as $questao)
		<li><a href="{{ action('QuestaoController@show', [$questao->id]) }}">{{ $questao->texto }}</a><a href="{{ action('QuestaoController@edit', [$questao->id]) }}" class="btn btn-warning">Update</a>
        <a onclick="checkDelete({{ $questao->id }});" class="btn btn-warning">Delete</a></li>
	@endforeach
	</ul>
</div>
@endsection