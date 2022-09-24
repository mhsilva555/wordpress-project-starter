<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>

    @include('partials.header')

      <div class="main">
        
          @yield('content')

      </div>
      
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>
