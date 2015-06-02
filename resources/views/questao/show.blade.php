@extends('app')

@section('content')
<div class="container">
	<article>{{ $questao->texto }}
		<div class="body">
			<ul>
			@foreach($alternativas as $alternativa)
				<li>{{ $alternativa['texto'] }}</li>
			@endforeach
			</ul>
		</div>
	</article>
</div>
@endsection