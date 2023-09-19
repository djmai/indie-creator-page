@extends('layouts.admin')

@section('title')
    @parent
    {{ lang('Admin/Translation.list_languages') }}
@endsection

@section('content')
    @parent
    <section class="col-lg-12">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ lang('Admin/Translation.list_languages') }}
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
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ lang('Admin/Translation.table_language') }}</th>
                            <th>{{ lang('Admin/Translation.table_description') }}</th>
                            <th>{{ lang('Admin/Translation.table_tags') }}</th>
                            <th>{{ lang('Admin/Translation.table_tools') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($translations as $translation)
                            <tr>
                                <td>{{ $translation->name }}</td>
                                <td>{{ $translation->description }}</td>
                                <td>
                                    @set($tags = explode(',', $translation->tags))
                                    @foreach ($tags as $tag)
                                        #{{ $tag }}
                                    @endforeach
                                </td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route_to('translations') . '/edit-language/' . $sqids->encode([$translation->id]) }}"
                                            class="btn btn-info">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection
