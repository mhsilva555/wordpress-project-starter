<div class="search-clientes">
  <form method="GET" class="form-group" action="<?= home_url('/clientes-cadastrados/search') ?>">
    @php
      $fields = [
        ['name' => 'name', 'placeholder' => 'Nome/Razão Social'],
        ['name' => 'document', 'placeholder' => 'CPF/CNPJ'],
        ['name' => 'city', 'placeholder' => 'Cidade'],
        ['name' => 'state', 'placeholder' => 'Estado'],
      ];
    @endphp

    @foreach($fields as $field)
      <fieldset>
        <input type="text" name="{{$field['name']}}" class="form-control" placeholder="{{$field['placeholder']}}" value="{{ $_GET[$field['name']] ?? '' }}">
      </fieldset>
    @endforeach

    <button type="submit" class="btn btn-primary">Filtrar <i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
</div>

@if (isset($_GET['nome']))
<a href="./" class="badge bg-secondary text-white">Limpar Filtros <i class="fa-solid fa-xmark"></i></a>
@endif

<div class="mb-3"></div>

