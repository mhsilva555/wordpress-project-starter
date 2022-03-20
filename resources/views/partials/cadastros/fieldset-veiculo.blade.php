<fieldset>
  <legend>&raquo; Cadastro do Veículo</legend>
  <div class="fields">
    <input id="tipo_veiculo" type="text" name="tipo_veiculo" class="form-control" placeholder="Tipo de Veículo" required value="Carro">
    <input id="marca_veiculo" type="text" name="marca_veiculo" class="form-control" placeholder="Marca" required value="Volkswagem">
    <input id="modelo_veiculo" type="text" name="modelo_veiculo" class="form-control" placeholder="Modelo" required value="Fox 1.0">
    <input id="placa_veiculo" type="text" name="placa_veiculo" class="form-control" placeholder="Placa" required value="OIT-6445">
    <input id="ano_veiculo" type="text" name="ano_veiculo" class="form-control" placeholder="Ano" required value="2013">
    <input id="cor_veiculo" type="tel" name="cor_veiculo" class="form-control" placeholder="Cor" required value="Prata">
    <input id="renavam" type="text" name="renavam" class="form-control" placeholder="RENAVAM" required value="0125565445">

    <select class="form-control" name="tipo_instalacao" id="tipo_instalacao" required>
      <option value="" disabled>Tipo de Instalação</option>
      <option value="com_bloqueio" selected>Com Bloqueio</option>
      <option value="sem_bloqueio" selected>Sem Bloqueio</option>
    </select>

    <select class="form-control" name="forma_pagamento" id="forma_pagamento" required>
      <option value="" disabled>Forma de Pagamento</option>
      <option value="a_vista" selected>À Vista</option>
    </select>

    <input id="valor_instalacao" type="tel" name="valor_instalacao" class="form-control" placeholder="Valor da Instalação" required value="100,00">
  </div>
</fieldset>
