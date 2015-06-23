@extends('app')
@section('content')
    <h1>Edit Question</h1>
    <form method="post" action="{{ action('QuestaoController@update',[$questao->id] ) }}">
    <div class="form-group">
        <label for='texto'>Text:</label>
        <input type='text' name='texto' id='texto' class='form-control' value=" {{ $questao->texto }}">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
        <input type="submit" class='btn btn-primary form-control'>
    </div>
    </form>
@stop