@extends('app')
@section('content')
    <h1>Edit Alternative</h1>
    <form method="post" action="{{ action('AlternativaController@update',[$alternativa->id] ) }}">
    <div class="form-group">
        <label for='questao_id'>Question:</label>
        <select name="questao_id" id="questao_id" value="{{ $alternativa->questao_id }}">
        @foreach($questoes as $questao)
            <option value="{{ $questao->id }}" {{ $alternativa->questao_id==$questao->id ? "selected" : "" }} >{{ $questao->texto }}</option>
        @endforeach
        </select>
        <br>
        <label for='texto'>Text:</label>
        <input type='text' name='texto' id='texto' class='form-control' value=" {{ $alternativa->texto }}">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
        <input type="submit" class='btn btn-primary form-control'>
    </div>
    </form>
@stop