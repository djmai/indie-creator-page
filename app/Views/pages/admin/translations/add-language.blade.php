@extends('layouts.admin')

@section('title')
    @parent
    {{ lang('Admin/Translation.add_language') }}
@endsection

@section('content')
    @parent
    <section class="col-lg-12">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ lang('Admin/Translation.add_language') }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="{{ lang('Admin/Translation.collapse') }}">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="{{ lang('Admin/Translation.maximize') }}">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                        title="{{ lang('Admin/Translation.remove') }}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="card-body">
                <form id="form-add-language" role="form" method="post" class="needs-validation" novalidate>
                    {!! csrf_field() !!}
                    <div class="form-group row">
                        <label for="language" class="form-label">
                            {{ lang('Admin/Translation.language') }}
                        </label>
                        <select name="language" id="language"
                            class="form-control form-select {{ session('errors.language') ? 'is-invalid' : 'is-valid' }}"
                            aria-describedby="language-help" required>
                            <option></option>
                            @foreach ($languages as $language)
                                <option value="{{ $language->iso }}">{{ $language->name }}</option>
                            @endforeach
                        </select>
                        <div class="form-text" id="language-help">
                            {{ lang('Admin/Translation.language_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.language') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="form-label">
                            {{ lang('Admin/Translation.description') }}
                        </label>
                        <textarea name="description" id="description" placeholder="{{ lang('Admin/Translation.description_placeholder') }}"
                            maxlength="250" aria-describedby="description-help"
                            class="form-control {{ session('errors.description') ? 'is-invalid' : 'is-valid' }}">{{ old('description') }}</textarea>
                        <div class="form-text" id="description-help">
                            {{ lang('Admin/Translation.description_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.description') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tags" class="form-label">
                            {{ lang('Admin/Translation.tags') }}
                        </label>
                        <input type="text" name="tags" id="tags"
                            placeholder="{{ lang('Admin/Translation.tags') }}"
                            class="form-control tagify--outside {{ session('errors.tags') ? 'is-invalid' : 'is-valid' }}"
                            value="{{ old('tags') }}">
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.tags') }}
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" form="form-add-language">
                        {{ lang('Admin/Translation.add_language') }}
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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>

    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="@asset('assets/admin/plugins/select2/css/select2.min.css')">
    <link rel="stylesheet" type="text/css"
        href="@asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')">
    <script src="@asset('assets/admin/plugins/select2/js/select2.full.min.js')"></script>

    <script>
        $(function() {
            var input = document.querySelector('input[name=tags]')
            // init Tagify script on the above inputs
            var tagify = new Tagify(input, {
                dropdown: {
                    position: "input",
                    enabled: 0 // always opens dropdown when input gets focus
                }
            })

            //Initialize Select2 Elements
            $('#language').select2({
                placeholder: '{{ lang('Admin/Translation.language_placeholder') }}',
                allowClear: true,
                theme: 'bootstrap4',
            });
        })
    </script>
@endsection
