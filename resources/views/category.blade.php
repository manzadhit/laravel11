@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Category : {{ $name }}</h1>
    @foreach ($posts as $post)
        <article>
            <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection