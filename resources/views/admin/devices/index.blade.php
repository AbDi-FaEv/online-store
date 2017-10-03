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
                        <a class="btn btn-success" href="{{ action('DeviceController@create') }}">Add new device</a>
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
                                    <td>
                                        <a class="" href="{{ action('DeviceController@show', ['id' => $device->id]) }}">{{ $device->name }}</a>
                                    </td>
                                    <td>
                                       <div class="text-right">
                                           <form action="{{ action('DeviceController@destroy', ['material' => $device]) }}" method="POST">
                                               {{ csrf_field() }}
                                               {{ method_field('DELETE') }}
                                               <button style="display: inline" class="btn btn-danger" type="submit">Delete</button>
                                           </form>
                                       </div>
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