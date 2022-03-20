@extends('layouts.app')

@section('content')

  @php
    global $params;
    $detalhes = \App\Controllers\DetalhesCliente::get($params['id']);

    \App\debug($detalhes);

    //$carnet = \App\Controllers\ConnectApi::connect($detalhes['carnet_id']);
    //\App\debug($carnet);

  @endphp

  @if($detalhes)
    @foreach($detalhes as $detalhe)

      <h4 class="text-secondary">
        <span class="text-white badge bg-secondary">Cliente:</span>
        {{ $detalhe->name }}
      </h4>

      @include('partials.cadastros.contratos-termos-cliente')

      @include('partials.cadastros.financeiro-cliente')

    @endforeach
  @endif

@endsection

