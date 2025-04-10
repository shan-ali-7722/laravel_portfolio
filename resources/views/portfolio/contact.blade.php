@extends('layouts.app')

@section('title', 'Contact | Shan Ali Portfolio')

@section('meta_description', 'Get in touch with Shan Ali, Senior Software Engineer specializing in Full-Stack Development, DevOps, and AI Integration.')

@section('additional_styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<section id="contact" class="contact-page">
    <div class="section-header">
        <div class="navbar-placeholder"></div>
        <h1>Get In Touch</h1>
        <p class="section-subtitle">Let's discuss your project or a potential collaboration</p>
    </div>
    
    <div class="contact-container">
        <div class="contact-info">
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-content">
                    <h3>Email</h3>
                    <p><a href="mailto:{{ $personalInfo['email'] }}">{{ $personalInfo['email'] }}</a></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info-content">
                    <h3>Phone</h3>
                    <p><a href="tel:{{ $personalInfo['phone'] }}">{{ $personalInfo['phone'] }}</a></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fab fa-linkedin"></i>
                </div>
                <div class="info-content">
                    <h3>LinkedIn</h3>
                    <p><a href="{{ $personalInfo['social_links']['linkedin'] }}" target="_blank">Connect on LinkedIn</a></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fab fa-github"></i>
                </div>
                <div class="info-content">
                    <h3>GitHub</h3>
                    <p><a href="{{ $personalInfo['social_links']['github'] }}" target="_blank">View GitHub Profile</a></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="info-content">
                    <h3>WhatsApp</h3>
                    <p><a href="{{ $personalInfo['social_links']['whatsapp'] }}" target="_blank">Message on WhatsApp</a></p>
                </div>
            </div>
        </div>
        
        <div class="contact-form-container">
            <h2>Send a Message</h2>
            <form class="contact-form" action="{{ route('home') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter subject">
                </div>
                
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Enter your message" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
            <p class="form-note">* This is a demo form and doesn't actually send messages in this example.</p>
        </div>
    </div>
    
    <div class="availability-section">
        <div class="availability-card">
            <div class="availability-header">
                <i class="far fa-calendar-check"></i>
                <h2>Current Availability</h2>
            </div>
            <div class="availability-content">
                <p>I'm currently available for select freelance projects, partnerships, and consulting opportunities.</p>
                <p>Typical response time: <strong>24-48 hours</strong></p>
                <a href="mailto:{{ $personalInfo['email'] }}" class="cta-button">Start a Conversation</a>
            </div>
        </div>
    </div>
</section>
@endsection 