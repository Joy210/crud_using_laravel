@extends('master')

@section('content')

<div class="container mt-4">
    <h2>Gallery</h2>
    <hr>
    <div class="row">
        @foreach ($images as $item)
        <div class="col-3">
            <div class="card mb-4">
                <img src="{{asset('storeImages/'.$item->slider_image)}}" alt="" class="img-card-top rounded w-100">
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection