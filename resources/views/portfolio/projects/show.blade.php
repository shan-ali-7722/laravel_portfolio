@extends('layouts.project')

@section('title', $project['title'] . ' | Portfolio Project | ' . (isset($personalInfo) ? $personalInfo['name'] : 'Shan Ali'))

@section('meta_description', 'Detailed information about ' . $project['title'] . ' - ' . $project['short_description'])

@section('additional_styles')
<link rel="stylesheet" href="{{ asset('css/project.css') }}">
@endsection

@section('content')
<section class="project-hero">
    <div class="project-hero-content">
        <h1 class="project-title">{{ $project['title'] }}</h1>
        <p class="project-subtitle">{{ $project['short_description'] }}</p>
        <div class="project-tags">
            @foreach($project['tags'] as $tag)
            <span class="project-tag">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
    <div class="project-image">
        <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}">
    </div>
</section>

<main class="project-container">
    @if(isset($project['overview']))
    <section class="project-section">
        <h2 class="section-title">Project Overview</h2>
        <div class="section-content">
            <p>{{ $project['overview'] }}</p>
            
            @if(isset($project['client']) || isset($project['year']))
            <div class="project-meta">
                @if(isset($project['client']))
                <div class="meta-item">
                    <strong>Client:</strong> {{ $project['client'] }}
                </div>
                @endif
                
                @if(isset($project['year']))
                <div class="meta-item">
                    <strong>Year:</strong> {{ $project['year'] }}
                </div>
                @endif
            </div>
            @endif
        </div>
    </section>
    @endif

    @if(isset($project['key_features']) && count($project['key_features']) > 0)
    <section class="project-section">
        <h2 class="section-title">Key Features</h2>
        <div class="features-grid">
            @foreach($project['key_features'] as $feature)
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="{{ $feature['icon'] }}"></i>
                </div>
                <h3 class="feature-title">{{ $feature['title'] }}</h3>
                <p class="feature-description">{{ $feature['description'] }}</p>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    @if(isset($project['challenges']) && count($project['challenges']) > 0)
    <section class="project-section">
        <h2 class="section-title">Technical Challenges</h2>
        <div class="challenges-content">
            @foreach($project['challenges'] as $challenge)
            <div class="challenge-item">
                <h3 class="challenge-title">{{ $challenge['title'] }}</h3>
                <p>{{ $challenge['description'] }}</p>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    @if(isset($project['results']) && count($project['results']) > 0)
    <section class="project-section">
        <h2 class="section-title">Results & Impact</h2>
        <div class="section-content">
            <ul>
                @foreach($project['results'] as $result)
                <li>{{ $result }}</li>
                @endforeach
            </ul>
        </div>
    </section>
    @endif

    @if(isset($project['technologies']) && count($project['technologies']) > 0)
    <section class="project-section">
        <h2 class="section-title">Technologies Used</h2>
        <div class="tech-stack">
            @foreach($project['technologies'] as $tech)
            <div class="tech-item">
                <div class="tech-icon">
                    @if($tech === 'Laravel')
                    <i class="fab fa-laravel"></i>
                    @elseif($tech === 'Vue.js')
                    <i class="fab fa-vuejs"></i>
                    @elseif($tech === 'React')
                    <i class="fab fa-react"></i>
                    @elseif($tech === 'MySQL')
                    <i class="fas fa-database"></i>
                    @elseif($tech === 'Docker')
                    <i class="fab fa-docker"></i>
                    @elseif($tech === 'AWS')
                    <i class="fab fa-aws"></i>
                    @elseif($tech === 'Node.js')
                    <i class="fab fa-node-js"></i>
                    @elseif($tech === 'Git')
                    <i class="fab fa-git-alt"></i>
                    @elseif($tech === 'REST API')
                    <i class="fas fa-server"></i>
                    @elseif($tech === 'Chart.js')
                    <i class="fas fa-chart-bar"></i>
                    @elseif($tech === 'Redis')
                    <i class="fas fa-database"></i>
                    @elseif($tech === 'TensorFlow')
                    <i class="fas fa-brain"></i>
                    @else
                    <i class="fas fa-code"></i>
                    @endif
                </div>
                <span class="tech-name">{{ $tech }}</span>
            </div>
            @endforeach
        </div>
    </section>
    @endif
</main>

<section class="attribution-section">
    <div class="project-container">
        <img src="{{ asset('images/logos/brainx-logo.png') }}" alt="Brainx Technologies Logo" class="brainx-logo">
        <div class="attribution-content">
            <h2>Project Attribution</h2>
            <p class="attribution-text">This project was developed while working at Brainx Technologies. Full project credits and intellectual property belong to Brainx Technologies. My role in this project was as a Full Stack Developer, responsible for both backend and frontend development, API architecture, and deployment infrastructure.</p>
            <p class="attribution-text">Brainx Technologies is a leading software development company providing disruptive digital products and tech solutions to SMBs, Startups & Enterprises.</p>
            @if(isset($project['attribution_link']))
            <a href="{{ $project['attribution_link'] }}" target="_blank" class="attribution-link">View Original Case Study</a>
            @endif
        </div>
    </div>
</section>
@endsection 