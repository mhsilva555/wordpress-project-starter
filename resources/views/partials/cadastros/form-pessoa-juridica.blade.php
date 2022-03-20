<form method="POST" class="form form-pf form-group">

  <fieldset>
    <legend>&raquo; Dados Comerciais</legend>
    <div class="fields">
      <input id="razao_social" type="text" name="razao_social" class="form-control" placeholder="Razão Social" required value="Athomus Tecnologia da Informação">
      <input id="nome_fantasia" type="text" name="nome_fantasia" class="form-control" placeholder="Nome Fantasia" required value="ATI">
      <input id="cnpj" type="text" name="cpf_cnpj" class="form-control" placeholder="CPF/CNPJ" required value="32.602.025/0001-51">
      <input id="nome" type="text" name="nome" class="form-control" placeholder="Nome do Responsável" required value="Marcos Henrique">
{{--      <input id="cpf" type="text" name="cpf" class="form-control" placeholder="CPF" required value="60712870300">--}}
    </div>
  </fieldset>

  <fieldset>
    <legend>&raquo; Endereço Comercial</legend>
    <div class="fields">
      <input id="rua" type="text" name="rua" class="form-control" placeholder="Endereço Comercial" required value="Rua Maria Helena Coutinho">
      <input id="numero" type="text" name="numero" class="form-control" placeholder="Número" required value="96">
      <input id="bairro" type="text" name="bairro" class="form-control" placeholder="Bairro" required value="Parque Planalto">
      <input id="cep" type="tel" name="cep" class="form-control" placeholder="CEP" required value="65917-150">
      <input id="cidade" type="text" name="cidade" class="form-control" placeholder="Cidade" required value="Imperatriz">
      <input id="estado" type="text" name="estado" class="form-control" placeholder="Estado" required value="MA">
      <input id="complemento" type="text" name="complemento" class="form-control" placeholder="Complemento" required value="Complemento">
      <input id="referencia" type="text" name="referencia" class="form-control" placeholder="Referência" required value="Referência">
    </div>
  </fieldset>

  <fieldset>
    <legend>&raquo; Contato Comercial</legend>
    <div class="fields">
      <input id="telefone-1" type="tel" name="telefone-1" class="form-control" placeholder="Telefone Comercial 1" required value="999810211994">
      <input id="telefone-2" type="text" name="telefone-2" class="form-control" placeholder="Telefone Comercial 2" value="999810211994">
      <input id="whatsapp" type="text" name="whatsapp" class="form-control" placeholder="Whatsapp Comercial/Responsável" required value="999810211994">
      <input id="email" type="email" name="email" class="form-control" placeholder="E-mail Comercial" required value="mhsilva555@gmail.com">
    </div>
  </fieldset>

  <input type="hidden" name="tipo_pessoa" value="pj">

  <button type="submit" class="btn btn-success font-weight-bold mt-2">Cadastrar Contrato</button>
  @php wp_nonce_field( 'validate' ) @endphp
</form>
