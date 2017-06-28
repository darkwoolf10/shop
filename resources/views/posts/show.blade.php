@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">{{$post->title}}</h2>
                <p class="blog-post-meta">Juniary 1, 2020</p>
                <p>
                    {{$post->body}}
                </p>
            </div>
        </div>
    </div>
@endsection