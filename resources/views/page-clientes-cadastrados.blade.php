@extends('layouts.app')

@section('content')

  <div class="pages page-contratos-cadastrados">

    @include('partials.search-clientes')

    @php
      global $params;

      if ($params != null):
        $clientes = $params;
      else:
        $clientes = \App\Controllers\ListarClientes::get();
      endif;
    @endphp

    @if ($params != null)
      <a href="<?=home_url('/clientes-cadastrados')?>" class="badge bg-primary text-white mb-2">
        Limpar Filtros <i class="fa-solid fa-xmark"></i>
      </a>

      <div class="alert alert-light border border-primary fs-4 p-2">Total de Resultados: <strong class="fw-bold text-primary">{{ count($params) }}</strong></div>
    @endif

    @if (is_countable($clientes) && count($clientes) > 0)

      @include('partials.cadastros.table-cadastros')

      @if ($params == null)
        @include('partials.pagination-clientes')
      @endif

    @else

      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="alert alert-danger">
          <h5 class="m-0">Não Existem Clientes Cadastrados no Sistema.</h5>
        </div>

        <div class="text-center mt-3">
          <img class="img-fluid" style="max-width: 300px" src="{{ get_template_directory_uri() . '/assets/images/no-data.svg' }}">
        </div>
      </div>

    @endif

    @php
    $clientes = json_decode( file_get_contents(INCLUDE_PATH . '/relatorio.json') );
    //$financeiro = json_decode( file_get_contents(INCLUDE_PATH . '/clientes-informacoes.json') );
    \App\debug( end($clientes) );
    //echo count($clientes);
    $carnets = [];
    $billets = [];
    @endphp

{{--    @foreach ($clientes as $key => $value)--}}
{{--      @php--}}

{{--        if ($value->payment->method == 'carnet'):--}}
{{--          $carnets[] = [--}}
{{--              'document_client' => $value->customer->document,--}}
{{--              'method' => $value->payment->method,--}}
{{--              'carnet_id' => $value->payment->carnet->carnet_id,--}}
{{--          ];--}}
{{--        else:--}}
{{--          $billets[] = [--}}
{{--              'document_client' => $value->customer->document,--}}
{{--              'method' => $value->payment->method,--}}
{{--              'carnet_id' => $value->payment->carnet->carnet_id,--}}
{{--          ];--}}
{{--        endif;--}}

{{--      @endphp--}}
{{--    @endforeach--}}

    @php
      //global $wpdb;
      //$unique = array_unique ($carnets, SORT_REGULAR);

      //foreach ($unique as $value):
        //$wpdb->insert('payments', $value);
      //endforeach;

      //\App\debug($unique);
      //\App\debug( end( $clientes) );
    @endphp


  </div>

@endsection
