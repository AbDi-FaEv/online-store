@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Cover's view
                        </div>
                    </div>
                    <div class="panel-body">
                        <h2>{{ $cover->name }}</h2>
                        <img src="{{ $cover->image }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection