<!DOCTYPE html>
<html lang="{{ $currentLanguage ?? 'en' }}">

<head>

    @include('layouts.partials.admin.head')

    <title>Indie Creator | Login</title>

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>Indie</b>Creator</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ lang('Auth/Login.title') }}</p>

                <form id="form-login" role="form" method="post" class="needs-validation" novalidate>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="email" class="form-label">
                            {{ lang('Auth/Login.email') }}
                            <i class="text-danger" aria-hidden="true">*</i>
                            <i class="d-none">{{ lang('Validation.required_field') }}</i>
                        </label>
                        <div class="input-group mb-3">
                            <input type="email" id="email" name="email"
                                placeholder="{{ lang('Auth/Login.email') }}" maxlength="320"
                                aria-describedby="input-group-email"
                                class="form-control {{ session('errors.email') ? 'is-invalid' : 'is-valid' }}"
                                value="{{ old('email') }}" autofocus required />
                            <div class="input-group-append">
                                <div class="input-group-text" id="input-group-email" aria-label="email">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            <div class="text-danger" aria-alive="assertive">
                                {{ session('errors.email') }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">
                            {{ lang('Auth/Login.password') }}
                            <i class="text-danger" aria-hidden="true">*</i>
                            <i class="d-none">{{ lang('Validation.required_field') }}</i>
                        </label>
                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password"
                                placeholder="{{ lang('Auth/Login.password') }}" maxlength="25"
                                aria-describedby="input-group-password"
                                class="form-control {{ session('errors.password') ? 'is-invalid' : 'is-valid' }}"
                                value="{{ old('password') }}" autocomplete="off" required />
                            <div class="input-group-append">
                                <div class="input-group-text" id="input-group-password" aria-label="password">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <div class="text-danger" aria-alive="assertive">
                                {{ session('errors.password') }}
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5 offset-7">
                            <button type="submit" class="btn btn-primary btn-block" form="form-login">
                                {{ lang('Auth/Login.sign_in') }}
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">{{ lang('Auth/Login.forgot_password') }}</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="@asset('assets/admin/plugins/jquery/jquery.min.js')"></script>
    <!-- Bootstrap 4 -->
    <script src="@asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')"></script>
    <!-- AdminLTE App -->
    <script src="@asset('assets/admin/js/adminlte.js')"></script>

    <script src="@asset('assets/bootstrap-validation.js')"></script>

</body>

</html>
