{{-- Contratos --}}
<div class="col-lg-4">
  <div class="card-number card">
    <p class="card-title fs-4 text-start">Contratos</p>

    <div class="row">
      <div class="col-10 d-flex align-items-center">
        @if($contrato[0]->assinado)
          <p class="text-start" style="font-size: 0.90rem">
            <b><i class="fa-solid fa-calendar-days"></i> ASSINADO EM: </b>
            {{ date('d/m/Y H:i:s', strtotime($contrato[0]->data_assinatura)) }}
          </p>
        @endif
      </div>

      <div class="col-2">
        <span class="card-total-number">{{ count($contrato) }}</span>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-12">
        <button class="btn btn-sm btn-primary">Ver Contrato</button>
      </div>
    </div>
  </div>
</div>

{{-- Termos de Contratação --}}
<div class="col-lg-4">
  <div class="card-number card">
    <p class="card-title fs-4 text-start">Termos de Contratação</p>
    <span class="card-total-number">{{ count($termo_contratacao) }}</span>
    <hr>

    <div class="row">
      <div class="col-12">
        <button class="btn btn-sm btn-success">Ver Termos</button>
      </div>
    </div>
  </div>
</div>

{{-- Termos de Bloqueio --}}
<div class="col-lg-4">
  <div class="card-number card">
    <p class="card-title fs-4 text-start">Termos de Bloqueio</p>
    <span class="card-total-number">{{ count($termo_bloqueio) }}</span>
    <hr>

    <div class="row">
      <div class="col-12">
        <button class="btn btn-sm btn-warning">Ver Termos</button>
      </div>
    </div>
  </div>
</div>
