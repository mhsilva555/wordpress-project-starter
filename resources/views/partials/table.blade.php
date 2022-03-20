<div class="table-contratos">

  <h4 class="title-table">Últimos Contratos Assinados</h4>

  <table class="table border-light">
    <thead>
      <tr>
        <th class="n-contrato">Nº Contrato</th>
        <th>Cliente</th>
        <th>Data Assinatura</th>
        <th class="text-center">Ações</th>
      </tr>
    </thead>

    <tbody>
      @for($i = 1; $i <= 20; $i++)
      <tr class="tr">
        <td class="n-contrato"><b>{{ $i }}</b></td>
        <td class="cliente">Marcos Henrique Silva de Souza</td>
        <td>{{ date('d/m/Y') }}</td>
        <td class="d-flex justify-content-around">
          <a href="{{ home_url('/ver-contrato') }}"><i class="fas fa-eye"></i></a>
          <a href="{{ home_url('/apagar-contrato') }}"><i class="fas fa-trash"></i></a>
        </td>
      </tr>
      @endfor
    </tbody>

  </table>

</div>
