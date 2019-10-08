@extends('master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mt-5">
                <div class="card-header default-color border-0">
                    <h3 class="mb-0 text-white">Insert an image</h3>
                </div>
                <div class="card-body">
                    <!-- Default form login -->
                    <form action="{{url('add-image')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="slider_image">
                                <label class="custom-file-label" for="">Choose file</label>
                            </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn default-color text-white btn-block mt-4 mx-0" type="submit">UPLOAD</button>

                    </form>
                    <!-- Default form login -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection