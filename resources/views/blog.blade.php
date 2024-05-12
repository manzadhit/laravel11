@extends('layouts.main')

@section('container')
    <h1>Ini halaman Blog</h1>


    @foreach ($posts as $post)
        <article class="mt-5">
            <h2><a class="text-decoration-none" href="blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}....</p>
            
            <a class="text-decoration-none" href="blog/{{ $post->slug }}">Read more..</a>
        </article>
    @endforeach
@endsection

