<fieldset>
  <legend>&raquo; Plano Contratado</legend>
  <div class="fields">
    <select class="form-control" name="plano" id="plano" required>
      @php
        $planos = new \App\Controllers\Setups('planos', 'configuracoes');
        $planos->getFieldsOption();
      @endphp

      @if(count($planos))
        @foreach($planos as $plano)
          <option value="{{ $plano['plano'] }}">{{ $plano['plano'] }}</option>
        @endforeach
      @endif
    </select>

    <select class="form-control" name="duracao_contrato" id="duracao_contrato" required>
      <option value="" disabled>Duração do Contrato</option>
      <option value="1_ano" selected>1 Ano</option>
    </select>

    <input id="valor_mensalidade" type="text" name="valor_mensalidade" class="form-control" placeholder="Valor da Mensalidade" required value="50,00">
  </div>
</fieldset>
