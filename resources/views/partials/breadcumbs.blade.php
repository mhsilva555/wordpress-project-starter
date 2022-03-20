@php
  global $wp;
  $explode = explode('/', $wp->request);
  $title = ucfirst(str_replace('-', ' ', $explode[0]));
  $endpoint = $explode[2];
@endphp

@if(!is_front_page())
  <a href="{{ home_url() }}" class="fw-normal m-0 text-white badge bg-secondary badge-pill"><b>Home</b></a>
@endif

<span class="fs-4 mx-1">&raquo;</span>

@if($wp->query_string == 'error=404')
  <a href="{{ home_url($explode[0]) }}" class="fw-normal m-0 text-white badge bg-secondary badge-pill"><b>{{$title}}</b></a>
  <span class="fs-4 mx-1">&raquo;</span>
@endif

@if($wp->query_string == 'error=404')
  <p class="fw-normal m-0 badge bg-primary text-white badge-pill text-secondary"><b>{{ $endpoint }}</b></p>
@else
  <p class="fw-normal m-0 badge bg-primary text-white badge-pill text-secondary"><b>{{ get_the_title() }}</b></p>
@endif
