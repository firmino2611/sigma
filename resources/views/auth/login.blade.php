


@extends('auth.index')

@section('content')
  <body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      {{--<a href="#"><b>Action</b> S.T.</a>--}}
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <h2 align="center">BDMG</h2>
      <p class="login-box-msg">Entre para iniciar a sessão</p>

      <form action="{{ route('autenticar') }}" method="post">
        {{ csrf_field() }}
          <div class="form-group has-feedback">
              <input type="email" name="email" class="form-control" placeholder="Email">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" name="senha" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
              <div class="col-xs-8">
                  <div class="checkbox icheck">
                      <label>
                          <input type="checkbox"> Lembrar senha
                      </label>
                  </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                  <button type="submit" class="btn btn-success btn-block btn-flat">Entrar</button>
              </div>
              <!-- /.col -->
          </div>
      </form> <br>
      <!--
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div>
      /.social-auth-links -->

      <a href="#">Esqueci a senha</a><br>


    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

@endsection