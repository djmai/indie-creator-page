@extends('layouts.admin')

@section('title')
    @parent
    {{ lang('Admin/Layout.sidebar.account') }}
@endsection

@section('content')
    @parent
    <section class="col-lg-12">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ lang('Admin/Account.change_username') }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="{{ lang('Admin/Account.collapse') }}">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="{{ lang('Admin/Account.maximize') }}">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                        title="{{ lang('Admin/Account.remove') }}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="card-body">
                <div class="callout callout-warning">
                    <h5>{{ lang('Admin/Account.change_username_alert_title') }}</h5>
                    <ul>
                        <li>
                            {{ lang('Admin/Account.change_username_alert_list_1') }}
                        </li>
                        <li>
                            {{ lang('Admin/Account.change_username_alert_list_2') }}
                        </li>
                        <li>
                            {{ lang('Admin/Account.change_username_alert_list_3') }}
                        </li>
                    </ul>
                </div>
                <form id="form-update-username" role="form" method="post" class="needs-validation" novalidate>
                    {!! csrf_field() !!}
                    <div class="form-group row">
                        <label for="username" class="form-label">
                            {{ lang('Admin/Account.username') }}
                            <i class="text-danger" aria-hidden="true">*</i>
                            <i class="d-none">{{ lang('Validation.required_field') }}</i>
                        </label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text" id="base-url">https://indie.creator/</span>
                            </div>
                            <input type="text" id="username" maxlength="20"
                                placeholder="{{ lang('Admin/Account.username') }}" pattern="[a-z][a-z0-9-_]{4,20}"
                                class="form-control {{ session('errors.username') ? 'is-invalid' : 'is-valid' }}"
                                aria-describedby="base-url username-help"
                                value="{{ set_value('username', $user->username) }}" required>
                        </div>
                        <div class="form-text" id="username-help">
                            {{ lang('Admin/Account.username_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.username') }}
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" form="form-update-username">
                        {{ lang('Admin/Account.update_username') }}
                    </button>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>

    <section class="col-lg-12">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ lang('Admin/Account.change_password') }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="{{ lang('Admin/Account.collapse') }}">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="{{ lang('Admin/Account.maximize') }}">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                        title="{{ lang('Admin/Account.remove') }}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="card-body">
                <div class="callout callout-info">
                    <h5>{{ lang('Admin/Account.change_password_alert_title') }}</h5>
                    <p>
                        {{ lang('Admin/Account.change_password_alert_body') }}
                    </p>
                </div>
                <form id="form-change-password" role="form" method="post" class="needs-validation" novalidate>
                    {!! csrf_field() !!}
                    <div class="form-group row">
                        <label for="password" class="form-label">
                            {{ lang('Admin/Account.current_password') }}
                            <i class="text-danger" aria-hidden="true">*</i>
                            <i class="d-none">{{ lang('Validation.required_field') }}</i>
                        </label>
                        <input type="password" name="password" id="password"
                            placeholder="{{ lang('Admin/Account.current_password') }}" maxlength="25"
                            class="form-control {{ session('errors.password') ? 'is-invalid' : 'is-valid' }}" required>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.password') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="new-password" class="form-label">
                            {{ lang('Admin/Account.new_password') }}
                            <i class="text-danger" aria-hidden="true">*</i>
                            <i class="d-none">{{ lang('Validation.required_field') }}</i>
                        </label>
                        <input type="password" name="new-password" id="new-password"
                            placeholder="{{ lang('Admin/Account.new_password') }}" maxlength="25"
                            class="form-control {{ session('errors.new_password') ? 'is-invalid' : 'is-valid' }}"
                            aria-describedby="new-password-help" required>
                        <div class="form-text" id="new-password-help">
                            {{ lang('Admin/Account.new_password_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.new_password') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirm-password" class="form-label">
                            {{ lang('Admin/Account.confirm_password') }}
                            <i class="text-danger" aria-hidden="true">*</i>
                            <i class="d-none">{{ lang('Validation.required_field') }}</i>
                        </label>
                        <input type="password" name="confirm-password" id="confirm-password"
                            placeholder="{{ lang('Admin/Account.confirm_password') }}" maxlength="25"
                            class="form-control {{ session('errors.confirm_password') ? 'is-invalid' : 'is-valid' }}"
                            required>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.confirm_password') }}
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" form="form-change-password">
                        {{ lang('Admin/Account.update_password') }}
                    </button>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>

    <section class="col-lg-12">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ lang('Admin/Account.delete_account') }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="{{ lang('Admin/Account.collapse') }}">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="{{ lang('Admin/Account.maximize') }}">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                        title="{{ lang('Admin/Account.remove') }}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="card-body">
                <div class="callout callout-danger">
                    <h5>{{ lang('Admin/Account.delete_account_alert_title') }}</h5>
                    <ul>
                        <li>
                            {{ lang('Admin/Account.delete_account_alert_list_1') }}
                        </li>
                        <li>
                            {{ lang('Admin/Account.delete_account_alert_list_2') }}
                        </li>
                        <li>
                            {{ lang('Admin/Account.delete_account_alert_list_3') }}
                        </li>
                    </ul>
                </div>
                <form id="form-delete-accout" role="form" method="post" class="needs-validation" novalidate>
                    {!! csrf_field() !!}
                    <div class="form-group row">
                        <label for="email" class="form-label">
                            {{ lang('Admin/Account.email') }}
                            <i class="text-danger" aria-hidden="true">*</i>
                            <i class="d-none">{{ lang('Validation.required_field') }}</i>
                        </label>
                        <input type="email" name="email" id="email"
                            placeholder="{{ lang('Admin/Account.email') }}" maxlength="320"
                            class="form-control {{ session('errors.email') ? 'is-invalid' : 'is-valid' }}" required>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.email') }}
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger" form="form-delete-accout">
                        {{ lang('Admin/Account.delete_your_account') }}
                    </button>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection

@section('scripts')
    @parent
    <script src="@asset('assets/bootstrap-validation.js')"></script>
@endsection
