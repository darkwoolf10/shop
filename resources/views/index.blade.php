@extends('layouts.layout')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->intro }}</p>
                <p><a href="/posts/{{$post->alias}}" class="btn btn-default">Learn more</a></p>
            </div>
        @endforeach
    </div>
    {{$posts = DB::table('posts')->paginate(12)}}

@endsection
