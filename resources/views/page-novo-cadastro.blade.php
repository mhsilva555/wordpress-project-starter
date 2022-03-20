@extends('layouts.app')

@section('content')

  <div class="pages page-novo-contrato">
    <div class="toggle-tipo-pessoa">
      <a class="btn btn-primary" href="./?tipo_pessoa=pf">Pessoa Física</a>
      <a class="btn btn-danger" href="./?tipo_pessoa=pj">Pessoa Jurídica</a>
    </div>
    <hr>

    @if(isset($_GET['tipo_pessoa']))

      @if($_GET['tipo_pessoa'] == 'pf')
        @include('partials.cadastros.form-pessoa-fisica')
      @else
        @include('partials.cadastros.form-pessoa-juridica')
      @endif

    @else
      @include('partials.cadastros.form-pessoa-fisica')
    @endif
  </div>

@endsection
