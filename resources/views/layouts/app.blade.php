@php
  \App\Controllers\RedirectLogin::run()
@endphp

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>

    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('partials.loading')
    @include('partials.alert')

    <div class="wrap" role="document">
      <div class="content container-fluid">
        <main class="main">
          <div class="row">

            <div class="col-md-3 position-relative">
              @include('partials.sidebar')
            </div>

            <div class="col-md-9">

              <div class="row">
                <div class="col-md-4 mb-4">
                  @include('partials.breadcumbs')
                </div>

                <div class="profile col-md-8 d-flex justify-content-end align-items-center">
                  <div class="text-right pr-2 d-flex justify-content-end align-items-end flex-column me-2">
                    <span class="d-block mr-2">Olá, seja Bem-Vindoª <b>{{ Username::getName() }}</b></span>
                    <button id="logout" type="button" class="btn btn-sm btn-danger">SAIR</button>
                  </div>

                  <div class="user-thumbnail rounded-circle overflow-hidden">
                    <img class="img-fluid" src="{{ get_avatar_url(get_current_user_id()) }}">
                  </div>
                </div>
              </div>

              <hr class="mb-4">

              @yield('content')
            </div>

          </div>
        </main>
      </div>
    </div>

    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp

  </body>
</html>
