@extends('layouts.main')

@section('container')
    <h5>{{ $post['author'] }}</h5>
    <p>{!! $post['body'] !!}</p>

    <a href="/blog">Kembali Ke Daftar Post</a>
@endsection
