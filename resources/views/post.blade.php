@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    <p>by I Nyoman Aditia in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{!! $post->body !!}</p>


    <a href="/blog">Kembali Ke Daftar Post</a>
@endsection
