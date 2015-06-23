@extends('app')
@section('content')
<div class="container">
    <h1>Exam - teacher's view</h1>
    <form class="form-horizontal">
        <div class="form-group">
        @foreach($questoes as $questao)
        <h6>{{ $questao->texto }}</h6>
            <ul>
            @foreach($alternativas as $alternativa)
                @if ($alternativa->questao_id==$questao->id)
                    <li>{{ $alternativa->texto }} [ {!! $alternativa->id==$questao->correta ? "X" : "" !!} ] </li>
                @endif            
            @endforeach
            </ul>
        @endforeach
        </div>
        <input id="printbtn" type="button" onclick="window.print();" value="Print">
    </form>
    <style>
        @media print {
            #printbtn {
                display: none;
            }
        }
    </style>
@stop