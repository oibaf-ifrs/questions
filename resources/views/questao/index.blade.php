@extends('app')

@section('content')
<div class="container">
	@foreach($questoes as $questao)
		<a href="{{ action('QuestaoController@show', [$questao->id]) }}">{{ $questao->texto }}</a>
	@endforeach
</div>
@endsection