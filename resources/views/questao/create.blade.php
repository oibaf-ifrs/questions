@extends('app')
@section('content')
    <h1>Create Question</h1>
    <form method="post" action="{{ action('QuestaoController@store') }}">
    <div class="form-group">
        <label for='texto'>Text:</label>
        <input type='text' name='texto' id='texto' class='form-control'>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input type="submit" class='btn btn-primary form-control'>
    </div>
    </form>
@stop