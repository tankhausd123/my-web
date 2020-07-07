@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($posts as $key=>$post)
                <div class="col-12 col-md-4">
                    <div class="card">
                            <img src="{{asset('storage/'.$post->image)}}" style="width: 100%; height: 100%">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
