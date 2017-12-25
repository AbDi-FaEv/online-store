@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Add a Cover
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form" action="{{ action('CoverController@store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Beautiful cover">
                                </div>
                                <div class="form-group">
                                    <label>Tag (unique identification)</label>
                                    <input class="form-control" type="text" name="tag" placeholder="beautiful-cover">
                                </div>
                                <div class="form-group">
                                    <label>Material</label>
                                    <select class="form-control" name="material">
                                        @foreach ($materials as $material)
                                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Devices</label>
                                    @foreach($devices as $device)
                                        <input type="checkbox" name="devices[]" value="{{ $device->id }}"> {{ $device->name }}
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" accept="image/*">
                                </div>
                                <input class="btn btn-success" type="submit" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection