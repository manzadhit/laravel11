@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{!! $post->body !!}</p>


    <a href="/blog">Kembali Ke Daftar Post</a>
@endsection
