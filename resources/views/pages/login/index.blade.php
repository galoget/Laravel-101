@extends('app')

@section('content')

  <section class="container">
    <div class="login">
      <h1>Login to Web App</h1>
      <form method="post" class="form-horizontal" action="index.html">
        <div class="form-group">
          <label class="col-md-3">Usuario </label>
           <div class="col-md-9">

          <input type="text" class="form-control" name="login" value="" placeholder="Username or Email">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3">Contraseña</label>
           <div class="col-md-9">
          <input type="password" class="form-control" name="password" value="" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
          <label class="col-offset-md-3 col-md-9">
            <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        </div>
        <p class="submit"><input type="submit" class="btn btn-success" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="jessa/">Click here to reset it</a>.</p>
    </div>

  </section>
@endsection
