@extends('layout')

@section('title', 'Home')

@section('content')
<div class="home-container">
    <div class="welcome-section">
        <h1 class="typing-animation">Hello! Welcome to My Creations.</h1>
    </div>
    <img src="{{ asset('images/' . $profile->photo) }}" alt="Profile Photo" class="profile-photo">
    <h1>{{ $profile->name }}</h1>
    <div class="description">
        <p>{{ $profile->description }}</p>
    </div>
    <div class="contact-section">
        <p>Contact Me:</p>
        <a href="mailto:{{ $profile->contact }}" class="contact-btn">
            <i class="fa fa-envelope"></i> Gmail
        </a>
        <a href="{{ $profile->instagram }}" class="contact-btn" target="_blank">
            <i class="fab fa-instagram"></i> Instagram
        </a>
        <a href="{{ $profile->github }}" class="contact-btn" target="_blank">
            <i class="fab fa-github"></i> GitHub
        </a>
    </div>
</div>
@endsection

