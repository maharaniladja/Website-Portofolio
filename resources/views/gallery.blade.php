@extends('layout')

@section('title', 'Gallery')

@section('content')
<div class="gallery-container">
    <h1 class="gallery-title">Galeri</h1>
    <div class="gallery-grid">
        @foreach ($images as $image)
            <div class="gallery-item">
                <img src="{{ asset('images/' . basename($image)) }}" alt="Gallery Image">
            </div>
        @endforeach
    </div>
</div>
@endsection
