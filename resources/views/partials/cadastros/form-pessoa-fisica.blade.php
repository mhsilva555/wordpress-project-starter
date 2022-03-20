<form method="POST" class="form form-pf form-group">

  <fieldset>
    <legend>&raquo; Dados Pessoais</legend>
    <div class="fields">
      <input id="nome" type="text" name="name" class="form-control" placeholder="Nome" required value="Marcos Henrique">
      <input id="cpf" type="text" name="document" class="form-control" placeholder="CPF/CNPJ" required value="60712870300">
      <input id="rua" type="text" name="street" class="form-control" placeholder="Rua" required value="Rua Maria Helena Coutinho">
      <input id="numero" type="text" name="number" class="form-control" placeholder="Número" required value="96">
      <input id="bairro" type="text" name="neighborhood" class="form-control" placeholder="Bairro" required value="Parque Planalto">
      <input id="cep" type="tel" name="zipcode" class="form-control" placeholder="CEP" required value="65917-150">
      <input id="cidade" type="text" name="city" class="form-control" placeholder="Cidade" required value="Imperatriz">
      <input id="estado" type="text" name="state" class="form-control" placeholder="Estado" required value="MA">
      <input id="complemento" type="text" name="complement" class="form-control" placeholder="Complemento" required value="Complemento">
      <input id="referencia" type="text" name="referencia" class="form-control" placeholder="Referência" required value="Referência">
      <input id="telefone-1" type="tel" name="phone_number" class="form-control" placeholder="Telefone 1" required value="999810211994">
      <input id="telefone-2" type="text" name="telefone_2" class="form-control" placeholder="Telefone 2" value="999810211994">
      <input id="whatsapp" type="text" name="whatsapp" class="form-control" placeholder="Whatsapp" required value="999810211994">
      <input id="email" type="email" name="email" class="form-control" placeholder="E-mail" required value="mhsilva555@gmail.com">
    </div>
  </fieldset>

  <input type="hidden" name="tipo_pessoa" value="pf">

  <button type="submit" class="btn btn-success font-weight-bold mt-2">Cadastrar Contrato</button>
</form>
