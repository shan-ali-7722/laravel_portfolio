<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Shan Ali - Senior Software Engineer specializing in Full-Stack Development, DevOps, and AI Integration with expertise in Laravel, Vue.js, React, Docker, and AWS.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Senior Software Engineer, Full-Stack Developer, DevOps, Laravel, Vue.js, React, Docker, AWS, AI Integration, OpenAI')">
    <title>@yield('title', 'Shan Ali | Senior Software Engineer | Full-Stack, DevOps & AI')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
    @yield('additional_styles')

    <link rel="icon" href="{{ asset('images/logos/fav.png') }}">

    <!-- Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <!-- Simplified header with just project navigation -->
    <header class="project-header">
        <div class="project-nav">
            <div class="project-logo">
                <a href="{{ route('home') }}">ShanAli<span class="dot">.</span><span class="underscore">_</span></a>
            </div>
            <a href="{{ route('home') }}#work" class="back-link">
                <i class="fas fa-arrow-left"></i> Back to Projects
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p class="footer-text">Interested in learning more about my work or discussing a potential project?</p>
            <div class="footer-links">
                <a href="{{ route('contact') }}" class="footer-link">Contact Me</a>
                <a href="{{ route('projects.index') }}" class="footer-link">More Projects</a>
                @if(isset($personalInfo) && isset($personalInfo['social_links']))
                    @if(isset($personalInfo['social_links']['linkedin']))
                    <a href="{{ $personalInfo['social_links']['linkedin'] }}" target="_blank" class="footer-link">LinkedIn</a>
                    @endif
                    @if(isset($personalInfo['social_links']['github']))
                    <a href="{{ $personalInfo['social_links']['github'] }}" target="_blank" class="footer-link">GitHub</a>
                    @endif
                @endif
            </div>
            <p class="copyright">© {{ date('Y') }} Shan Ali. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/animations.js') }}"></script>
    @yield('additional_scripts')
</body>
</html> 