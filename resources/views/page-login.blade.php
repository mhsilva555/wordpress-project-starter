@extends('layouts.login')

@section('content')

<div class="login-page" style="background: url( '{{ INCLUDE_URI }}/assets/images/quantum-gradient.svg') center center no-repeat">

  @include('partials.alert')

  <div class="container d-flex justify-content-center align-items-center">

    <div class="login-form">
      <div class="text-center">
        <img class="img-fluid logo-form" src="{{ INCLUDE_URI }}/assets/images/logo-colorida.png" alt="">
      </div>

      <form method="POST" class="form-login form-group">
        <fieldset>
          <label>Usuário ou E-mail</label>
          <input type="text" class="form-control" name="user" required>
        </fieldset>

        <fieldset>
          <label>Senha</label>
          <input type="password" class="form-control" name="password" required>
        </fieldset>

        <fieldset class="d-flex pb-4">
          <input type="checkbox" class="float-left" name="remember" id="remember">
          <label for="remember" class="float-left ms-2">Lembrar meu acesso</label>
        </fieldset>

        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>

    </div>

  </div>
</div>

@endsection
