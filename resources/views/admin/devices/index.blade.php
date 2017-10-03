@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Devices
                        </div>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-success" href="#">Add new device</a>
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($devices as $device)
                                <tr>
                                    <td>{{ $device->name }}</td>
                                    <td class="text-right">
                                        <a class="btn btn-primary" href="{{ action('DeviceController@show', ['id' => $device->id]) }}">View</a>
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection