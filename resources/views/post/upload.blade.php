@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('post.upload')}}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>
                        Upload Image
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <p>
                            Title:
                        </p>
                        <label>
                            <input type="text" class="form-control" placeholder="Title" name="title">
                        </label>
                        <p>
                            Image:
                        </p>
                        <label>
                            <input type="file" class="form-control-file" name="image">
                        </label>
                        <button type="submit" class="btn btn-primary">
                            Upload
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
