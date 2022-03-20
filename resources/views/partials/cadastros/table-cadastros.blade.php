<table class="table table-clientes bg-white table-responsive">
  <thead class="bg-primary text-white">
  <tr>
    <th class="text-center">ID</th>
    <th>Nome</th>
    <th>CPF/CNPJ</th>
    <th>Cidade</th>
    <th>UF</th>
    <th>Whatsapp</th>
    <th>E-mail</th>
    <th>Ações</th>
  </tr>
  </thead>

  <tbody>
  @foreach($clientes as $cliente)
    <tr>
      <td class="text-center"><b>{{ $cliente->id }}</b></td>
      <td>{{ $cliente->name }}</td>
      <td>{{ $cliente->document }}</td>
      <td>{{ $cliente->city }}</td>
      <td>{{ $cliente->state }}</td>
      <td>{{ $cliente->phone_number }}</td>
      <td>{{ $cliente->email }}</td>
      <td>
        <div class="d-flex justify-content-between">
          <a href="?view=edit-cliente&cliente={{$cliente->id}}" class="text-white badge bg-primary">Editar <i class="fa-solid fa-pen-to-square"></i></a>
          <a href="#" class="text-white badge bg-danger">Excluir <i class="fa-solid fa-trash-can"></i></a>
          <a href="{{ \App\get_current_url("detalhes-cliente/{$cliente->id}") }}" class="text-white badge bg-success">Detalhes <i class="fa-solid fa-circle-info"></i></a>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
