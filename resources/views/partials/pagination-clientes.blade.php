@php
  /** Search Variables */
  $search_params = \App\get_params_search_url($_GET);
  $params = strlen($search_params) ? $search_params.'&pg=' : 'pg=';

  /** Pagination Varibales */
  $pg = $_GET['pg'];

  $filter = array_filter($_GET);

  if(count($filter) > 0 && !$pg):
    $count = count(\App\Controllers\ListarClientes::get());
  else:
    $count = count(\App\Controllers\ListarClientes::getAll());
  endif;

  $pagination = ceil( $count / \App\Models\Clientes::totalListClients() ) - 1;
  $previous = (isset($pg) && $pg != 1) ? intval($pg) - 1 : 1;
  $next = (isset($pg) && $pg < $pagination) ? intval($pg) + 1 : $previous + 1;
@endphp

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item {{ ($pg <= 1) ? 'disabled' : '' }}">
      <a class="page-link" href="?{{$params}}{{$previous}}">Anterior</a>
    </li>

    @for ($i = 1; $i <= $pagination; $i++)
      <li class="page-item {{ (!isset($pg) && $i == 1) || ($pg == $i) ? 'active' : '' }}">
        <a class="page-link" href="?{{$params}}{{$i}}">{{$i}}</a>
      </li>
    @endfor

    <li class="page-item {{ ($pagination <= 1 || $pg == $pagination) ? 'disabled' : '' }}">
      <a class="page-link" href="?{{$params}}{{$next}}">Próximo</a>
    </li>
  </ul>
</nav>
