<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Personal information data
        $personalInfo = [
            'name' => 'Shan Ali',
            'title' => 'Senior Software Engineer',
            'subtitle' => 'Full-Stack Development • Cloud Architecture • AI Solutions',
            'description' => 'Expert in crafting enterprise software solutions with AI, Laravel, Vue.js, React, and AWS cloud infrastructure, delivering high-performance applications with clean architecture.',
            'experience' => '4+',
            'projects_delivered' => '150+',
            'performance_optimization' => '85%',
            'social_links' => [
                'linkedin' => 'https://linkedin.com/in/shanali7722',
                'github' => 'https://github.com/shan-ali-7722',
                'email' => 'shan.ali7722@gmail.com',
                'phone' => '+923027829698',
                'whatsapp' => 'https://wa.me/923027829698',
            ],
        ];

        // Expertise data
        $expertise = [
            [
                'icon' => 'fas fa-code',
                'title' => 'Enterprise Software Architecture',
                'description' => 'Designing robust, scalable architectures using Laravel, PHP 8, MySQL, and microservices. Implementing domain-driven design principles and RESTful APIs that have improved system performance by 85% and reduced development cycles.'
            ],
            [
                'icon' => 'fab fa-vuejs',
                'title' => 'Frontend Engineering',
                'description' => 'Advanced expertise in Vue.js 3, React 18, and modern JavaScript, creating responsive SPAs with state-of-the-art UI/UX. Utilizing Composition API, Pinia, and Redux for efficient state management and component reusability.'
            ],
            [
                'icon' => 'fas fa-server',
                'title' => 'Cloud & DevOps Engineering',
                'description' => 'Architecting AWS cloud infrastructure with EC2, RDS, S3, Lambda, and ECS. Building automated CI/CD pipelines with GitHub Actions, Docker, and Kubernetes for continuous deployment with zero downtime delivery.'
            ],
            [
                'icon' => 'fas fa-robot',
                'title' => 'AI Integration & Innovation',
                'description' => 'Implementing advanced AI solutions using OpenAI APIs, LangChain, Vector databases, and custom LLM fine-tuning. Creating intelligent chatbots, voice agents, content generators, and data analysis tools that drive business innovation.'
            ],
        ];

        // Get featured and all projects from ProjectController
        $projectController = new ProjectController();
        $featuredProject = $projectController->getFeaturedProject();
        $projects = $projectController->getAllProjects();
        
        // Work description
        $workDescription = [
            'paragraph1' => 'As a Senior Software Engineer with over 5 years of expertise, I design and implement enterprise-grade solutions using cutting-edge technologies. My technical foundation is built on Laravel and PHP 8 for robust backend systems, complemented by Vue.js 3 and React 18 frontends. I specialize in performance optimization, having achieved 85% improvements in system performance through advanced caching, query optimization, and architecture refinements. My approach focuses on clean, maintainable code using SOLID principles, design patterns, and comprehensive testing strategies.',
            'paragraph2' => 'Beyond application development, I excel in cloud architecture and DevOps, leveraging AWS services (EC2, RDS, S3, Lambda, ECS) to create resilient, scalable infrastructures. I implement automated CI/CD pipelines with GitHub Actions, Docker, and Kubernetes that enable continuous delivery with confidence. My recent work has focused on AI integration, developing sophisticated solutions with OpenAI, LangChain, and vector databases to create intelligent applications that transform business processes. Throughout my career, I\'ve successfully delivered over 200 projects across diverse industries, consistently driving innovation while maintaining the highest standards of quality and performance.'
        ];

        // Compile all data for the view
        return view('portfolio.index', compact(
            'personalInfo',
            'expertise',
            'featuredProject',
            'projects',
            'workDescription'
        ));
    }

    /**
     * Display the contact page or section.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        $personalInfo = [
            'name' => 'Shan Ali',
            'email' => 'shan.ali7722@gmail.com',
            'phone' => '+923027829698',
            'social_links' => [
                'linkedin' => 'https://linkedin.com/in/shanali7722',
                'github' => 'https://github.com/shan-ali-7722',
                'whatsapp' => 'https://wa.me/923027829698',
            ],
        ];

        return view('portfolio.contact', compact('personalInfo'));
    }
} 