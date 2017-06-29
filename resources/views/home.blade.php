@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>Intro</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->intro }}</td>
                            <td>
                                <p><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></p>
                                <form action="/posts/{{$post->id}}" method="post">
                                    {{csrf_field()}}
                                    {!! method_field('delete') !!}
                                    <p><button type="submit" class="btn btn-danger">Delete</button></p>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
