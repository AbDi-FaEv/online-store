@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrapper">
                @foreach($covers as $cover)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="grid_header">
                                    <div>
                                        <a href="#" class="">{{ $cover->name }}</a>
                                    </div>
                                    <div class="left-col">{{ $cover->price }}$</div>
                                    <div>
                                        @foreach($cover->devices as $device )
                                            <span class="label label-default">{{ $device->name }}</span>
                                        @endforeach
                                    </div>
                                    <div class="left-col">
                                        @if(!Auth::user()->hasCover($cover->id))
                                            <a href="{{ action('HomeController@buy', ['id' => $cover->id]) }}">Купить</a>
                                        @else
                                            <span class="label label-success">куплено</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img src="{{ $cover->image }}">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {!! $covers->appends(Request::input())->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
