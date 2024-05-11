@extends('layouts.main')

@section('container')
    <h1>Ini halaman Blog</h1>


    @foreach ($posts as $post)
        <article>
            <h2><a href="blog/{{ $post->title }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection

