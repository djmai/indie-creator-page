@extends('layouts.admin')

@section('title')
    @parent
    {{ lang('Admin/Layout.sidebar.public_profile') }}
@endsection

@section('content')
    @parent
    <section class="col-lg-12">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ lang('Admin/Profile.profile_details') }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <span title="{{ lang('Admin/Profile.unpublished_title') }}" class="badge badge-danger text-uppercase">
                        {{ lang('Admin/Profile.unpublished') }}
                    </span>
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item">{{ lang('Admin/Profile.publish') }}</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">{{ lang('Admin/Profile.preview') }}</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="{{ lang('Admin/Profile.collapse') }}">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="{{ lang('Admin/Profile.maximize') }}">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                        title="{{ lang('Admin/Profile.remove') }}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="card-body">
                <div class="callout callout-info">
                    <h5>{{ lang('Admin/Profile.language_alert_title') }}</h5>
                    <p>
                        {{ lang('Admin/Profile.language_alert_body') }}
                    </p>
                </div>
                <form id="form-update-profile" role="form" method="post" class="needs-validation" novalidate>
                    {!! csrf_field() !!}
                    <div class="form-group row">
                        <label for="name" class="form-label">
                            {{ lang('Admin/Profile.name') }}
                            <i class="text-danger" aria-hidden="true">*</i>
                            <i class="d-none">{{ lang('Validation.required_field') }}</i>
                        </label>
                        <input type="text" name="name" id="name" placeholder="{{ lang('Admin/Profile.name') }}"
                            maxlength="100" class="form-control {{ session('errors.name') ? 'is-invalid' : 'is-valid' }}"
                            aria-describedby="name-help" value="{{ set_value('name', $user->name) }}" required>
                        <div class="form-text" id="name-help">
                            {{ lang('Admin/Profile.name_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.name') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="form-label">
                            {{ lang('Admin/Profile.description') }}
                        </label>
                        <textarea name="description" id="description" placeholder="{{ lang('Admin/Profile.description_placeholder') }}"
                            maxlength="250" aria-describedby="description-help"
                            class="form-control {{ session('errors.description') ? 'is-invalid' : 'is-valid' }}">{{ set_value('description', $translation->description ?? '') }}</textarea>
                        <div class="form-text" id="description-help">
                            {{ lang('Admin/Profile.description_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.description') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tags" class="form-label">
                            {{ lang('Admin/Profile.tags') }}
                        </label>
                        <input type="text" name="tags" id="tags" placeholder="{{ lang('Admin/Profile.tags') }}"
                            class="form-control tagify--outside {{ session('errors.tags') ? 'is-invalid' : 'is-valid' }}"
                            value="{{ set_value('tags', $translation->tags ?? '') }}">
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.tags') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="form-label">
                            {{ lang('Admin/Profile.location') }}
                        </label>
                        <input type="text" name="location" id="location"
                            placeholder="{{ lang('Admin/Profile.location') }}"
                            class="form-control {{ session('errors.location') ? 'is-invalid' : 'is-valid' }}"
                            value="{{ set_value('location', $user->location) }}">
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.location') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="language" class="form-label">
                            {{ lang('Admin/Profile.language') }}
                        </label>
                        <select name="language" id="language"
                            class="form-control form-select {{ session('errors.language') ? 'is-invalid' : 'is-valid' }}"
                            aria-describedby="language-help">
                            <option></option>
                            @foreach ($languages as $language)
                                <option value="{{ $language->name }}">{{ $language->name }}</option>
                            @endforeach
                        </select>
                        <div class="form-text" id="language-help">
                            {{ lang('Admin/Profile.language_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.language') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="timezone" class="form-label">
                            {{ lang('Admin/Profile.timezone') }}
                        </label>
                        <select name="timezone" id="timezone"
                            class="form-control form-select {{ session('errors.timezone') ? 'is-invalid' : 'is-valid' }}"
                            aria-describedby="timezone-help">
                            <option></option>
                            <option value="(GMT-11:00) International Date Line West">
                                (GMT-11:00) International Date Line West
                            </option>
                            <option value="(GMT-11:00) Midway Island">
                                (GMT-11:00) Midway Island
                            </option>
                            <option value="(GMT-11:00) Samoa">
                                (GMT-11:00) Samoa
                            </option>
                            <option value="(GMT-10:00) Hawaii">
                                (GMT-10:00) Hawaii
                            </option>
                            <option value="(GMT-08:00) Alaska">
                                (GMT-08:00) Alaska
                            </option>
                            <option value="(GMT-07:00) Pacific Time (US & Canada)">
                                (GMT-07:00) Pacific Time (US & Canada)
                            </option>
                            <option value="(GMT-07:00) Tijuana">
                                (GMT-07:00) Tijuana
                            </option>
                            <option value="(GMT-07:00) Arizona">
                                (GMT-07:00) Arizona
                            </option>
                            <option value="(GMT-06:00) Mountain Time (US & Canada)">
                                (GMT-06:00) Mountain Time (US & Canada)
                            </option>
                            <option value="(GMT-06:00) Chihuahua">
                                (GMT-06:00) Chihuahua
                            </option>
                            <option value="(GMT-06:00) Mazatlan">
                                (GMT-06:00) Mazatlan
                            </option>
                            <option value="(GMT-06:00) Saskatchewan">
                                (GMT-06:00) Saskatchewan
                            </option>
                            <option value="(GMT-06:00) Central America">
                                (GMT-06:00) Central America
                            </option>
                            <option value="(GMT-05:00) Central Time (US & Canada)">
                                (GMT-05:00) Central Time (US & Canada)
                            </option>
                            <option value="(GMT-05:00) Guadalajara">
                                (GMT-05:00) Guadalajara
                            </option>
                            <option value="(GMT-05:00) Mexico City">
                                (GMT-05:00) Mexico City
                            </option>
                            <option value="(GMT-05:00) Monterrey">
                                (GMT-05:00) Monterrey
                            </option>
                            <option value="(GMT-05:00) Bogota">
                                (GMT-05:00) Bogota
                            </option>
                            <option value="(GMT-05:00) Lima">
                                (GMT-05:00) Lima
                            </option>
                            <option value="(GMT-05:00) Quito">
                                (GMT-05:00) Quito
                            </option>
                            <option value="(GMT-04:00) Eastern Time (US & Canada)">
                                (GMT-04:00) Eastern Time (US & Canada)
                            </option>
                            <option value="(GMT-04:00) Indiana (East)">
                                (GMT-04:00) Indiana (East)
                            </option>
                            <option value="(GMT-04:00) Caracas">
                                (GMT-04:00) Caracas
                            </option>
                            <option value="(GMT-04:00) La Paz">
                                (GMT-04:00) La Paz
                            </option>
                            <option value="(GMT-04:00) Georgetown">
                                (GMT-04:00) Georgetown
                            </option>
                            <option value="(GMT-03:00) Atlantic Time (Canada)">
                                (GMT-03:00) Atlantic Time (Canada)
                            </option>
                            <option value="(GMT-03:00) Santiago">
                                (GMT-03:00) Santiago
                            </option>
                            <option value="(GMT-03:00) Brasilia">
                                (GMT-03:00) Brasilia
                            </option>
                            <option value="(GMT-03:00) Buenos Aires">
                                (GMT-03:00) Buenos Aires
                            </option>
                            <option value="(GMT-02:30) Newfoundland">
                                (GMT-02:30) Newfoundland
                            </option>
                            <option value="(GMT-02:00) Greenland">
                                (GMT-02:00) Greenland
                            </option>
                            <option value="(GMT-02:00) Mid-Atlantic">
                                (GMT-02:00) Mid-Atlantic
                            </option>
                            <option value="(GMT-01:00) Cape Verde Is.">
                                (GMT-01:00) Cape Verde Is.
                            </option>
                            <option value="(GMT) Azores">
                                (GMT) Azores
                            </option>
                            <option value="(GMT) Monrovia">
                                (GMT) Monrovia
                            </option>
                            <option value="(GMT) UTC">
                                (GMT) UTC
                            </option>
                            <option value="(GMT+01:00) Dublin">
                                (GMT+01:00) Dublin
                            </option>
                            <option value="(GMT+01:00) Edinburgh">
                                (GMT+01:00) Edinburgh
                            </option>
                            <option value="(GMT+01:00) Lisbon">
                                (GMT+01:00) Lisbon
                            </option>
                            <option value="(GMT+01:00) London">
                                (GMT+01:00) London
                            </option>
                            <option value="(GMT+01:00) Casablanca">
                                (GMT+01:00) Casablanca
                            </option>
                            <option value="(GMT+01:00) West Central Africa">
                                (GMT+01:00) West Central Africa
                            </option>
                            <option value="(GMT+02:00) Belgrade">
                                (GMT+02:00) Belgrade
                            </option>
                            <option value="(GMT+02:00) Bratislava">
                                (GMT+02:00) Bratislava
                            </option>
                            <option value="(GMT+02:00) Budapest">
                                (GMT+02:00) Budapest
                            </option>
                            <option value="(GMT+02:00) Ljubljana">
                                (GMT+02:00) Ljubljana
                            </option>
                            <option value="(GMT+02:00) Prague">
                                (GMT+02:00) Prague
                            </option>
                            <option value="(GMT+02:00) Sarajevo">
                                (GMT+02:00) Sarajevo
                            </option>
                            <option value="(GMT+02:00) Skopje">
                                (GMT+02:00) Skopje
                            </option>
                            <option value="(GMT+02:00) Warsaw">
                                (GMT+02:00) Warsaw
                            </option>
                            <option value="(GMT+02:00) Zagreb">
                                (GMT+02:00) Zagreb
                            </option>
                            <option value="(GMT+02:00) Brussels">
                                (GMT+02:00) Brussels
                            </option>
                            <option value="(GMT+02:00) Copenhagen">
                                (GMT+02:00) Copenhagen
                            </option>
                            <option value="(GMT+02:00) Madrid">
                                (GMT+02:00) Madrid
                            </option>
                            <option value="(GMT+02:00) Paris">
                                (GMT+02:00) Paris
                            </option>
                            <option value="(GMT+02:00) Amsterdam">
                                (GMT+02:00) Amsterdam
                            </option>
                            <option value="(GMT+02:00) Berlin">
                                (GMT+02:00) Berlin
                            </option>
                            <option value="(GMT+02:00) Bern">
                                (GMT+02:00) Bern
                            </option>
                            <option value="(GMT+02:00) Rome">
                                (GMT+02:00) Rome
                            </option>
                            <option value="(GMT+02:00) Stockholm">
                                (GMT+02:00) Stockholm
                            </option>
                            <option value="(GMT+02:00) Vienna">
                                (GMT+02:00) Vienna
                            </option>
                            <option value="(GMT+02:00) Cairo">
                                (GMT+02:00) Cairo
                            </option>
                            <option value="(GMT+02:00) Harare">
                                (GMT+02:00) Harare
                            </option>
                            <option value="(GMT+02:00) Pretoria">
                                (GMT+02:00) Pretoria
                            </option>
                            <option value="(GMT+03:00) Bucharest">
                                (GMT+03:00) Bucharest
                            </option>
                            <option value="(GMT+03:00) Helsinki">
                                (GMT+03:00) Helsinki
                            </option>
                            <option value="(GMT+03:00) Kiev">
                                (GMT+03:00) Kiev
                            </option>
                            <option value="(GMT+03:00) Kyiv">
                                (GMT+03:00) Kyiv
                            </option>
                            <option value="(GMT+03:00) Riga">
                                (GMT+03:00) Riga
                            </option>
                            <option value="(GMT+03:00) Sofia">
                                (GMT+03:00) Sofia
                            </option>
                            <option value="(GMT+03:00) Tallinn">
                                (GMT+03:00) Tallinn
                            </option>
                            <option value="(GMT+03:00) Vilnius">
                                (GMT+03:00) Vilnius
                            </option>
                            <option value="(GMT+03:00) Athens">
                                (GMT+03:00) Athens
                            </option>
                            <option value="(GMT+03:00) Istanbul">
                                (GMT+03:00) Istanbul
                            </option>
                            <option value="(GMT+03:00) Minsk">
                                (GMT+03:00) Minsk
                            </option>
                            <option value="(GMT+03:00) Jerusalem">
                                (GMT+03:00) Jerusalem
                            </option>
                            <option value="(GMT+03:00) Moscow">
                                (GMT+03:00) Moscow
                            </option>
                            <option value="(GMT+03:00) St. Petersburg">
                                (GMT+03:00) St. Petersburg
                            </option>
                            <option value="(GMT+03:00) Volgograd">
                                (GMT+03:00) Volgograd
                            </option>
                            <option value="(GMT+03:00) Kuwait">
                                (GMT+03:00) Kuwait
                            </option>
                            <option value="(GMT+03:00) Riyadh">
                                (GMT+03:00) Riyadh
                            </option>
                            <option value="(GMT+03:00) Nairobi">
                                (GMT+03:00) Nairobi
                            </option>
                            <option value="(GMT+03:00) Baghdad">
                                (GMT+03:00) Baghdad
                            </option>
                            <option value="(GMT+04:00) Abu Dhabi">
                                (GMT+04:00) Abu Dhabi
                            </option>
                            <option value="(GMT+04:00) Muscat">
                                (GMT+04:00) Muscat
                            </option>
                            <option value="(GMT+04:00) Baku">
                                (GMT+04:00) Baku
                            </option>
                            <option value="(GMT+04:00) Tbilisi">
                                (GMT+04:00) Tbilisi
                            </option>
                            <option value="(GMT+04:00) Yerevan">
                                (GMT+04:00) Yerevan
                            </option>
                            <option value="(GMT+04:30) Tehran">
                                (GMT+04:30) Tehran
                            </option>
                            <option value="(GMT+04:30) Kabul">
                                (GMT+04:30) Kabul
                            </option>
                            <option value="(GMT+05:00) Ekaterinburg">
                                (GMT+05:00) Ekaterinburg
                            </option>
                            <option value="(GMT+05:00) Islamabad">
                                (GMT+05:00) Islamabad
                            </option>
                            <option value="(GMT+05:00) Karachi">
                                (GMT+05:00) Karachi
                            </option>
                            <option value="(GMT+05:00) Tashkent">
                                (GMT+05:00) Tashkent
                            </option>
                            <option value="(GMT+05:30) Chennai">
                                (GMT+05:30) Chennai
                            </option>
                            <option value="(GMT+05:30) Kolkata">
                                (GMT+05:30) Kolkata
                            </option>
                            <option value="(GMT+05:30) Mumbai">
                                (GMT+05:30) Mumbai
                            </option>
                            <option value="(GMT+05:30) New Delhi">
                                (GMT+05:30) New Delhi
                            </option>
                            <option value="(GMT+05:30) Sri Jayawardenepura">
                                (GMT+05:30) Sri Jayawardenepura
                            </option>
                            <option value="(GMT+05:45) Kathmandu">
                                (GMT+05:45) Kathmandu
                            </option>
                            <option value="(GMT+06:00) Astana">
                                (GMT+06:00) Astana
                            </option>
                            <option value="(GMT+06:00) Dhaka">
                                (GMT+06:00) Dhaka
                            </option>
                            <option value="(GMT+06:00) Almaty">
                                (GMT+06:00) Almaty
                            </option>
                            <option value="(GMT+06:00) Urumqi">
                                (GMT+06:00) Urumqi
                            </option>
                            <option value="(GMT+06:30) Rangoon">
                                (GMT+06:30) Rangoon
                            </option>
                            <option value="(GMT+07:00) Novosibirsk">
                                (GMT+07:00) Novosibirsk
                            </option>
                            <option value="(GMT+07:00) Bangkok">
                                (GMT+07:00) Bangkok
                            </option>
                            <option value="(GMT+07:00) Hanoi">
                                (GMT+07:00) Hanoi
                            </option>
                            <option value="(GMT+07:00) Jakarta">
                                (GMT+07:00) Jakarta
                            </option>
                            <option value="(GMT+07:00) Krasnoyarsk">
                                (GMT+07:00) Krasnoyarsk
                            </option>
                            <option value="(GMT+08:00) Beijing">
                                (GMT+08:00) Beijing
                            </option>
                            <option value="(GMT+08:00) Chongqing">
                                (GMT+08:00) Chongqing
                            </option>
                            <option value="(GMT+08:00) Hong Kong">
                                (GMT+08:00) Hong Kong
                            </option>
                            <option value="(GMT+08:00) Kuala Lumpur">
                                (GMT+08:00) Kuala Lumpur
                            </option>
                            <option value="(GMT+08:00) Singapore">
                                (GMT+08:00) Singapore
                            </option>
                            <option value="(GMT+08:00) Taipei">
                                (GMT+08:00) Taipei
                            </option>
                            <option value="(GMT+08:00) Perth">
                                (GMT+08:00) Perth
                            </option>
                            <option value="(GMT+08:00) Irkutsk">
                                (GMT+08:00) Irkutsk
                            </option>
                            <option value="(GMT+08:00) Ulaan Bataar">
                                (GMT+08:00) Ulaan Bataar
                            </option>
                            <option value="(GMT+09:00) Seoul">
                                (GMT+09:00) Seoul
                            </option>
                            <option value="(GMT+09:00) Osaka">
                                (GMT+09:00) Osaka
                            </option>
                            <option value="(GMT+09:00) Sapporo">
                                (GMT+09:00) Sapporo
                            </option>
                            <option value="(GMT+09:00) Tokyo">
                                (GMT+09:00) Tokyo
                            </option>
                            <option value="(GMT+09:00) Yakutsk">
                                (GMT+09:00) Yakutsk
                            </option>
                            <option value="(GMT+09:30) Darwin">
                                (GMT+09:30) Darwin
                            </option>
                            <option value="(GMT+09:30) Adelaide">
                                (GMT+09:30) Adelaide
                            </option>
                            <option value="(GMT+10:00) Canberra">
                                (GMT+10:00) Canberra
                            </option>
                            <option value="(GMT+10:00) Melbourne">
                                (GMT+10:00) Melbourne
                            </option>
                            <option value="(GMT+10:00) Sydney">
                                (GMT+10:00) Sydney
                            </option>
                            <option value="(GMT+10:00) Brisbane">
                                (GMT+10:00) Brisbane
                            </option>
                            <option value="(GMT+10:00) Hobart">
                                (GMT+10:00) Hobart
                            </option>
                            <option value="(GMT+10:00) Vladivostok">
                                (GMT+10:00) Vladivostok
                            </option>
                            <option value="(GMT+10:00) Guam">
                                (GMT+10:00) Guam
                            </option>
                            <option value="(GMT+10:00) Port Moresby">
                                (GMT+10:00) Port Moresby
                            </option>
                            <option value="(GMT+10:00) Solomon Is.">
                                (GMT+10:00) Solomon Is.
                            </option>
                            <option value="(GMT+11:00) Magadan">
                                (GMT+11:00) Magadan
                            </option>
                            <option value="(GMT+11:00) New Caledonia">
                                (GMT+11:00) New Caledonia
                            </option>
                            <option value="(GMT+12:00) Fiji">
                                (GMT+12:00) Fiji
                            </option>
                            <option value="(GMT+12:00) Kamchatka">
                                (GMT+12:00) Kamchatka
                            </option>
                            <option value="(GMT+12:00) Marshall Is.">
                                (GMT+12:00) Marshall Is.
                            </option>
                            <option value="(GMT+12:00) Auckland">
                                (GMT+12:00) Auckland
                            </option>
                            <option value="(GMT+12:00) Wellington">
                                (GMT+12:00) Wellington
                            </option>
                            <option value="(GMT+13:00) Nuku'alofa">
                                (GMT+13:00) Nuku'alofa
                            </option>
                        </select>
                        <div class="form-text" id="timezone-help">
                            {{ lang('Admin/Profile.timezone_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.timezone') }}
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" form="form-update-profile">
                        {{ lang('Admin/Profile.update_profile') }}
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
                    {{ lang('Admin/Profile.website_widget') }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="{{ lang('Admin/Profile.collapse') }}">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="{{ lang('Admin/Profile.maximize') }}">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                        title="{{ lang('Admin/Profile.remove') }}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="card-body">
                <div class="callout callout-success">
                    <h5>{{ lang('Admin/Profile.widget_alert_title') }}</h5>
                    <p>
                        {{ lang('Admin/Profile.widget_alert_body') }}
                    </p>
                </div>
                <form id="form-add-widget" role="form" method="post" class="needs-validation" novalidate>
                    {!! csrf_field() !!}
                    <div class="form-group row">
                        <label for="widget" class="form-label">
                            {{ lang('Admin/Profile.widget') }}
                        </label>
                        <textarea name="widget" id="widget" class="form-control" aria-describedby="widget-help" rows="5">{{ old('widget') }}</textarea>
                        <div class="form-text" id="widget-help">
                            {{ lang('Admin/Profile.widget_help') }}
                        </div>
                        <div class="text-danger" aria-alive="assertive">
                            {{ session('errors.widget') }}
                        </div>
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" class="form-control form-control-color" id="exampleColorInput"
                            value="#563d7c" title="Choose your color">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" form="form-add-widget">
                        {{ lang('Admin/Profile.add_widget') }}
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
    <link rel="stylesheet" type="text/css" href="@asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')">
    <script src="@asset('assets/admin/plugins/select2/js/select2.full.min.js')"></script>

    <script>
        $(function() {
            var input = document.querySelector('input[name=tags]')
            // init Tagify script on the above inputs
            var tagify = new Tagify(input, {
                whitelist: [
                    "Entertainment",
                    "Music",
                    "Lifestyle",
                    "Gaming",
                    "Science",
                    "Technology",
                    "Education",
                    "Sports",
                    "Travels",
                    "Pets",
                ],
                dropdown: {
                    position: "input",
                    enabled: 0 // always opens dropdown when input gets focus
                }
            })

            //Initialize Select2 Elements
            $('#language').select2({
                placeholder: '{{ lang('Admin/Profile.language_placeholder') }}',
                allowClear: true,
                theme: 'bootstrap4',
            });

            //Initialize Select2 Elements
            $('#timezone').select2({
                placeholder: '{{ lang('Admin/Profile.timezone_placeholder') }}',
                allowClear: true,
                theme: 'bootstrap4',
            });
        })
    </script>
@endsection
