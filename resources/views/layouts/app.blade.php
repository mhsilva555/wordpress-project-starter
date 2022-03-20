@php
  \App\Controllers\RedirectLogin::run()
@endphp

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>

    @php do_action('get_header') @endphp

    <div class="wrap" role="document">
      <div class="content container-fluid">
        <main class="main">
          
            @yield('content')

        </main>
      </div>
    </div>

    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp

  </body>
</html>
