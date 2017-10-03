@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Add new Material
                        </div>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-default" href="{{ action('MaterialController@index') }}">Back</a>
                        <form class="form-group" action="{{ action('MaterialController@store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="silicon">
                            </div>
                            <button class="btn btn-success" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection