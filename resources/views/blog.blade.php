@extends('layouts.main')

@section('container')
    <h1>Ini halaman Blog</h1>


    @foreach ($posts as $post)
        <article>
            <h2><a href="blog/{{ $post["slug"] }}">{{ $post['title'] }}</a></h2>
            <h5>{{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
