@extends('layout')

@section('title', 'Portfolio')

@section('content')
<div class="portfolio-container">
    <h1 class="portfolio-title">Portofolio</h1>
    <div class="portfolio-items">
        @foreach ($projects as $project)
            <div class="portfolio-item">
                <!-- Title Section -->
                <div class="portfolio-text">
                    <h2>{{ $project->title }}</h2>
                </div>

                <!-- Image Section -->
                <div class="portfolio-image">
                    <div class="image-wrapper">
                        <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="portfolio-description">
                    <p>{{ $project->description }}</p>
                </div>

                <!-- Button Section -->
                @if ($project->link)
                    <div class="button-container">
                        <a href="{{ $project->link }}" target="_blank" class="view-button">View Project</a>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
