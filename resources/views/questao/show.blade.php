@extends('app')
@section('content')
<div class="container">
    <h1>Question Show</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Text</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder="{{ $questao->texto }}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ action('QuestaoController@index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
</div>
@stop