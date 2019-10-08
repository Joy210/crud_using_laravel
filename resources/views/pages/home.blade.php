@extends('master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mt-5">
                <div class="card-header default-color border-0">
                    <h3 class="mb-0 text-white">CRUD Operation</h3>
                </div>
                <div class="card-body">
                    <!-- Default form login -->
                    <form action="{{url('post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group purple-border">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group purple-border">
                            <label for="">Description</label>
                            <textarea class="form-control" id="" rows="3" name="description"></textarea>
                        </div>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="">Choose file</label>
                            </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn default-color text-white btn-block mt-4 mx-0" type="submit">SUBMIT</button>

                    </form>
                    <!-- Default form login -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection