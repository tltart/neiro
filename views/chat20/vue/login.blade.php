



    <div class="container"  v-if="loginformshow">
        <link href="/css/login.css" rel="stylesheet" type="text/css">




        <div class="row">

            <div class="col-xs-12 login-box">
                <div class="col-sm-6 login-box-left">
                    <div class="text-h1">Скажите "да" эффективной <br>
                        рекламе</div>
                    <div class="text-h2">Используйте ваши учетные данные для входа.<br>
                        Если Вы не являетесь участником, пожалуйста, <a href="{{ route('register') }}">зарегистрируйтесь</a>.
                    </div>

                </div>


                <div class="col-sm-6 login-box-right">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="col-xs-12 heder-logo-block">
                            <div class="logo-login"><img src="/images/logo_neiros.svg"></div>
                            <h5 class="content-group">Авторизация</h5>
                        </div>

                        <div class="col-xs-12 cont-form {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" placeholder=" " name="email" id="email"   value="{{ old('email') }}" required >
                            <label for="email">E-mail</label>

                          <?php /*?>             <div class="form-control-feedback">
                    <i class="icon-user text-muted"></i>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif<?php */?>
                        </div>

                        <div class="cont-form col-xs-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="******" required >
                            <label for="password">Пароль</label>
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="cont-form col-xs-12">
                            <div class="text-register-login"><a href="{{ route('register') }}">Регистрация</a> <a href="{{ route('password.request') }}">Забыли пароль?</a></div><button type="submit" class="btn btn-primary btn-block">Войти <i class="icon-circle-right2 position-right"></i></button>
                        </div>

                      <?php /*?><div class="text-center">
                <a  href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
                | <a  href="{{ route('register') }}">
                    Регистрация
                </a>
            </div><?php */?>

                    </form>
                </div>



            </div>

        </div>
    </div>
