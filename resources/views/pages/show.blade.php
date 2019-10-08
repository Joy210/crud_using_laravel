@extends('master')

@section('content')

<div class="slider">
    @include('includes.slider')
</div>


<div class="container mt-4">
    <div class="row">

        <div class="col-9">
            <h2>Latest News</h2>
            <hr>
            @foreach ($post as $item)
            <div class="card card-body mb-4">
                <div class="row">
                    <div class="col-3">
                        <img class="w-100 h-100 rounded" src="{{asset($item->image)}}" alt="{{$item->title}}">
                    </div>
                    <div class="col-9">
                        <!-- Title -->
                        <h4 class="card-title text-capitalize mb-0"><a
                                href="{{url('details/'.$item->id)}}">{{$item->title}}</a></h4>

                        <small class="card-text text-success">{{$item->created_at}}</small>
                        <!-- Text -->
                        <p class="card-text text-capitalize mt-2">{{Str::limit($item->description, 130)}}</p>
                        <!-- Button -->
                        <a href="{{url('edit/'.$item->id)}}" class="btn btn-warning btn-sm mx-0">EDIT</a>
                        <a href="{{url('delete/'.$item->id)}}" class="btn btn-danger btn-sm mx-0">DELETE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-3">
            @include('includes.sidebar')
        </div>
    </div>
</div>

@endsection