@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            {{ $type->name }} model
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection