@extends('layouts.app')

@section('title', $personalInfo['name'] . ' | Senior Software Engineer | Full-Stack, DevOps & AI')

@section('meta_description', 'Portfolio of ' . $personalInfo['name'] . ' - ' . $personalInfo['title'] . ' specializing in ' . $personalInfo['subtitle'])

@section('additional_styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')


    <!-- Expertise Section -->
    <section id="expertise" class="expertise">
        <div class="section-header">
            <h2>My Expertise</h2>
        </div>

        <div class="expertise-grid">
            @foreach($expertise as $item)
            <div class="expertise-card">
                <div class="card-header">
                    <i class="{{ $item['icon'] }}"></i>
                    <h3>{!! nl2br(e($item['title'])) !!}</h3>
                </div>
                <div class="card-content">
                    <p>{{ $item['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="code-bg"></div>
    </section>

    <!-- Work Section -->
    <section id="work" class="work">
        <div class="section-header">
            <h2>My Work</h2>
        </div>

        <div class="work-description">
            <p>{{ $workDescription['paragraph1'] }}</p>
            <br>
            <p>{{ $workDescription['paragraph2'] }}</p>
        </div>

        @if($featuredProject)
        <div class="featured-project">
            <div class="project-info">
                <h3>Featured Project</h3>
                <h2>{{ $featuredProject['title'] }}</h2>
                <a href="{{ $featuredProject['link'] }}" class="view-project-btn">View Project</a>
            </div>
            <div class="project-image">
                <img src="{{ asset('images/' . $featuredProject['image']) }}" alt="{{ $featuredProject['title'] }}">
                <div class="project-arrow"></div>
            </div>
        </div>
        @endif

        <div class="filter-section">
            <p>Filter by</p>
            <div class="filters">
                <button class="filter-btn active" data-filter="all">All<span class="count">{{ count($projects) }}</span></button>
                <button class="filter-btn" data-filter="ai">AI<span class="count">{{ count(array_filter($projects, function($p) { return isset($p['category']) && $p['category'] === 'ai'; })) }}</span></button>
                <button class="filter-btn" data-filter="web">Web Development<span class="count">{{ count(array_filter($projects, function($p) { return isset($p['category']) && $p['category'] === 'web'; })) }}</span></button>
            </div>
        </div>

        <div class="project-grid">
            @foreach($projects as $project)
            <a href="{{ $project['link'] }}" class="project-card" data-category="{{ $project['category'] ?? 'other' }}">
                <div class="project-image">
                    <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}">
                </div>
                <div class="project-info">
                    <h3>{{ $project['title'] }}</h3>
                    <p>{{ $project['short_description'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    <!-- Experience Section Placeholder -->
    <section id="experience" class="experience">
        <div class="section-header">
            <h2>Experience</h2>
        </div>

        <div class="experience-timeline">
            <!-- Experience content will go here -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3>Sr. Software Engineer | Full-Stack Laravel & Vue.js Developer</h3>
                        <span class="timeline-company">Brainx Technologies</span>
                        <span class="timeline-date">10/2020 - Present</span>
                    </div>
                    <p>Developing enterprise-grade applications with Laravel & Vue.js, leading database optimizations, and implementing CI/CD pipelines. Currently focusing on Laravel and AI integration projects. As Team Lead, managing a team of 7 Laravel developers while specializing in modernizing legacy systems, enhancing performance (40-80% improvement in query execution), and exploring Docker-based deployments for zero-downtime releases.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3>Freelance Developer</h3>
                        <span class="timeline-company">Fiverr</span>
                        <span class="timeline-date">09/2018 - 09/2020</span>
                    </div>
                    <p>Completed 30+ freelance projects specializing in PHP-based web applications, C++ programming, and MySQL database management. Developed custom solutions including CRUD operations, RESTful APIs, and backend functionalities for dynamic websites while managing client communication and project deadlines.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additional_scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize particles.js
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: '#ffffff' },
                shape: { type: 'circle' },
                opacity: { value: 0.5, random: false },
                size: { value: 3, random: true },
                line_linked: { enable: true, distance: 150, color: '#ffffff', opacity: 0.4, width: 1 },
                move: { enable: true, speed: 2, direction: 'none', random: false, straight: false, out_mode: 'out', bounce: false },
            },
            interactivity: {
                detect_on: 'canvas',
                events: { onhover: { enable: true, mode: 'repulse' }, onclick: { enable: true, mode: 'push' }, resize: true },
                modes: { repulse: { distance: 100, duration: 0.4 }, push: { particles_nb: 4 } }
            },
            retina_detect: true
        });

        // Handle scroll indicator visibility
        const scrollIndicator = document.getElementById('scroll-down-indicator');
        if (scrollIndicator) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    scrollIndicator.style.opacity = '0';
                } else {
                    scrollIndicator.style.opacity = '1';
                }
            });

            // Scroll to expertise section when clicking the indicator
            scrollIndicator.addEventListener('click', function() {
                document.getElementById('expertise').scrollIntoView({ behavior: 'smooth' });
            });
        }

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
