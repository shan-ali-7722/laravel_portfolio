@extends('layouts.project')

@section('title', 'Projects | Shan Ali Portfolio')

@section('meta_description', 'Browse through all projects in Shan Ali\'s portfolio - Full-Stack Developer, DevOps Engineer, and AI Integration Specialist.')

@section('additional_styles')
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('content')
<section class="projects-page">
    <div class="section-header">
        <h1>All Projects</h1>
        <p class="section-subtitle">Browse through my portfolio of work across different domains</p>
    </div>

    <div class="filter-section">
        <p>Filter by</p>
        <div class="filters">
            <button class="filter-btn active" data-filter="all">All<span class="count">{{ count($projects) }}</span></button>
            <button class="filter-btn" data-filter="ai">AI<span class="count">{{ count(array_filter($projects, function($p) { return isset($p['category']) && $p['category'] === 'ai'; })) }}</span></button>
            <button class="filter-btn" data-filter="web">Web Development<span class="count">{{ count(array_filter($projects, function($p) { return isset($p['category']) && $p['category'] === 'web'; })) }}</span></button>
        </div>
    </div>

    <div class="projects-grid">
        @foreach($projects as $project)
        <a href="{{ $project['link'] }}" class="project-card" data-category="{{ $project['category'] ?? 'other' }}">
            <div class="project-image">
                <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}">
                @if(isset($project['is_featured']) && $project['is_featured'])
                <div class="featured-badge">Featured</div>
                @endif
            </div>
            <div class="project-info">
                <h2>{{ $project['title'] }}</h2>
                <p>{{ $project['short_description'] }}</p>
                <div class="project-tags">
                    @if(isset($project['tags']) && count($project['tags']) > 0)
                        @foreach(array_slice($project['tags'], 0, 3) as $tag)
                        <span class="project-tag">{{ $tag }}</span>
                        @endforeach
                        @if(count($project['tags']) > 3)
                        <span class="project-tag more-tag">+{{ count($project['tags']) - 3 }}</span>
                        @endif
                    @endif
                </div>
                @if(isset($project['year']))
                <div class="project-year">{{ $project['year'] }}</div>
                @endif
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection

@section('additional_scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Project filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                button.classList.add('active');

                // Get filter value
                const filterValue = button.getAttribute('data-filter');

                // Filter projects
                projectCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endsection
