@extends('app')

@section('content')
<div class="container">
		@if (Session::has('message'))
		<div class="flash alert-info">
			<p>{{ Session::get('message') }}</p>
			{{ Session::forget('message') }}
		</div>
		@endif
	<h1>Alternatives list</h1>
	<a href="{{ action('AlternativaController@create') }}" class="btn btn-success">New</a>
  <ul>
	@foreach($alternativas as $alternativa)
		<li><a href="{{ action('AlternativaController@show', [$alternativa->id]) }}">{{ $alternativa->texto }}</a> <a href="{{ action('AlternativaController@edit', [$alternativa->id]) }}" class="btn btn-warning">Update</a>
        <a onclick="checkDelete({{ $alternativa->id }});" class="btn btn-warning">Delete</a></li>
	@endforeach
	</ul>
</div>
@endsection