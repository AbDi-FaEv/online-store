@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Covers
                        </div>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-success" href="{{ action('CoverController@create') }}">Add new cover</a>
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Material</th>
                                <th>Price</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($covers as $cover)
                                <tr>
                                    <td>{{ $cover->name }}</td>
                                    <td>{{ $cover->material->name }}</td>
                                    <td>{{ $cover->price }}</td>
                                    <td class="text-right">
                                        <a class="btn btn-primary" href="{{ action('CoverController@show', ['id' => $cover->id]) }}">View</a>
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