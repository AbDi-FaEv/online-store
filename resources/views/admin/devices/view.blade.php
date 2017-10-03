@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            {{ $device->name }} models
                        </div>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-success" href="#">Add new model</a>
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if (count($models) == 0)
                                    <h4>No models for this device</h4>
                                @else
                                    @foreach($models as $model)
                                        <tr>
                                            <td>
                                                {{ $model->name }}
                                            </td>
                                            <td class="text-right">
                                                <a class="btn btn-primary" href="#">View</a>
                                                <a class="btn btn-danger" href="#">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection