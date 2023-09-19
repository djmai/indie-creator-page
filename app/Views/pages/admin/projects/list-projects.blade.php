@extends('layouts.admin')

@section('title')
    @parent
    {{ lang('Admin/Project.list_projects') }}
@endsection

@section('content')
    @parent
    <section class="col-lg-12">
        <!-- card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ lang('Admin/Project.list_projects') }}
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="{{ lang('Admin/Project.collapse') }}">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="{{ lang('Admin/Project.maximize') }}">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                        title="{{ lang('Admin/Project.remove') }}">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ lang('Admin/Project.table_project') }}</th>
                            <th>{{ lang('Admin/Project.table_description') }}</th>
                            <th>{{ lang('Admin/Project.table_tags') }}</th>
                            <th>{{ lang('Admin/Project.table_tools') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->description }}</td>
                                <td>
                                    @set($tags = explode(',', $project->tags))
                                    @foreach ($tags as $tag)
                                        #{{ $tag }}
                                    @endforeach
                                </td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route_to('projects') . '/edit-project/' . $project->uuid }}"
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
