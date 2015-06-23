@extends('app')
@section('content')
    <h1>Create Question</h1>
    <form method="post" action="{{ action('AlternativaController@store') }}">
    <div class="form-group">
        <label for='questao_id'>Question:</label>
        <select name="questao_id" id="questao_id">
        @foreach($questoes as $questao)
            <option value="{{ $questao->id }}">{{ $questao->texto }}</option>
        @endforeach
        </select>
        <br>
        <label for='texto'>Text:</label>
        <input type='text' name='texto' id='texto' class='form-control'>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input type="submit" class='btn btn-primary form-control'>
    </div>
    </form>
@stop