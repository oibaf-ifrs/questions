@extends('app')
@section('content')
<div class="container">
    <h1>Question Show</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="text" class="col-sm-2 control-label">Text</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder="{{ $questao->texto }}" readonly>
            </div>
            <label for="alternatives" class="col-sm-2 control-label">Alternatives:</label>
            <ul>
            @foreach($alternativas as $alternativa)
            <!--<a href="javascript:void(0);" onclick="sendCorrect({{ $alternativa->id }})">Mark as correct.</a>-->
                <li>{{ $alternativa->texto }} [ {!! $alternativa->id==$questao->correta ? "this is the correct" : "<a href='javascript:void(0);' onclick='sendCorrect($alternativa->id)'>Mark as correct</a>" !!} ]</li>
            @endforeach
            </ul>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ action('QuestaoController@index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
</div>

<script>
	function sendCorrect(id) {
	if (confirm('Really set correct?')) {
	    $.ajax({
	      type: "POST",
		  headers: {
	                    'X-CSRF-Token':  '{{ csrf_token() }}'
	      },
	      url: window.location.href + "/" + id,
	      complete: function(result) {
	        location.reload();
	      }
	    });
	  }
	}
	</script>
@stop