@extends('master')

@section('content')

<div class="container mt-4">
    <div class="row">

        <div class="col-9">
            <div class="card  mb-4">
                <div class="card-header bg-white text-capitalize">
                    <h4 class="card-title mb-0">{{$post->title}}</h4><small
                        class="card-text text-success">{{$post->created_at}}</small>
                </div>
                <img class="img-card-top w-100" src="{{asset($post->image)}}" alt="{{$post->title}}">
                <div class="card-body">
                    <!-- Text -->
                    <p class="card-text">{{$post->description}}</p>
                </div>
            </div>
        </div>


        <div class="col-3">
            <h2>Recent News</h2>
            <hr>
            <div class="card list-group">
                <a href="#!" class="list-group-item list-group-item-action">
                    Cras justo odio
                </a>
                <a href="#!" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#!" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#!" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
            </div>
        </div>
    </div>
</div>

@endsection