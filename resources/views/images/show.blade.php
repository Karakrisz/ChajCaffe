@extends('layouts.app')

@section('content')

<div class="blog-custom-content position-relative">
    <h2 class="blog-custom-content__h2">{{ $image->title }}</h2>
    <img class="blog-custom-content__img" src="{{ Voyager::image($image->image_path) }}" alt="{{ $image->title }}">
    <p class="blog-custom-content__p">{!! $image->description !!}</p>

    <div class="blog-custom-content__link-box">
        <a class="blog-custom-content__link-box__link" href="/">home</a>
    </div>
</div>

@endsection