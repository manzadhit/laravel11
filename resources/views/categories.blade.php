@extends('layouts.main')

@section('container')
    <h1>Ini halaman Categories</h1>


    @foreach ($categories as $category)
        <article>
            <h2><a href="category/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </article>
    @endforeach
@endsection

