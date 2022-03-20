@php
  $contrato = \App\Controllers\ListarContratos::index($detalhe->id, 'contrato');
  $termo_contratacao = \App\Controllers\ListarContratos::index($detalhe->id, 'termo_contratacao');
  $termo_bloqueio = \App\Controllers\ListarContratos::index($detalhe->id, 'termo_bloqueio');
@endphp

<div class="py-1">
  <h4 class="my-3 p-2 px-0 border-bottom border-4 border-secondary">Contratos e Termos</h4>

  <div class="py-4 row row-card-number">

    @include('partials.cadastros.card-number-clientes')

  </div>

</div>
