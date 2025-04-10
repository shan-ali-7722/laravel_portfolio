<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Project data storage - in a real app, this would come from a database
     */
    private $projects = [];

    /**
     * Constructor to initialize projects data
     */
    public function __construct()
    {
        $this->projects = [
            [
                'id' => 'ai-healthcare',
                'title' => 'AI-Powered Healthcare Platform',
                'short_description' => 'AI-Powered Healthcare | Laravel & Vue.js',
                'is_featured' => true,
                'image' => 'projects/default.png',
                'category' => 'ai',
                'link' => '/projects/ai-healthcare',
                'client' => 'HealthTech Innovations',
                'year' => '2024',
                'tags' => ['Laravel', 'Vue.js', 'AI', 'Healthcare', 'MySQL', 'REST API'],
                'overview' => 'An AI-powered healthcare platform designed to streamline patient care, diagnosis assistance, and medical record management. The platform leverages machine learning algorithms to assist healthcare professionals in making more accurate diagnoses and treatment recommendations.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-brain',
                        'title' => 'Diagnostic Assistance',
                        'description' => 'Implemented advanced ML algorithms to analyze medical data and assist healthcare professionals in making more accurate diagnoses.'
                    ],
                    [
                        'icon' => 'fas fa-heartbeat',
                        'title' => 'Patient Monitoring',
                        'description' => 'Developed real-time monitoring systems to track patient vitals and alert medical staff of any concerning changes.'
                    ],
                    [
                        'icon' => 'fas fa-file-medical-alt',
                        'title' => 'Medical Records Management',
                        'description' => 'Created a comprehensive system for managing patient medical records, including history, treatments, and outcomes.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Data Security',
                        'description' => 'Ensuring HIPAA compliance and maximum data security for sensitive patient information.'
                    ],
                    [
                        'title' => 'AI Accuracy',
                        'description' => 'Fine-tuning machine learning models to provide reliable diagnostic assistance without false positives.'
                    ]
                ],
                'results' => [
                    'Reduced diagnostic time by 35%',
                    'Improved accuracy of preliminary diagnoses by 28%',
                    'Streamlined record management, saving medical staff 15+ hours per week',
                    'Integrated with existing hospital systems in 20+ medical facilities'
                ],
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'TensorFlow', 'Docker', 'AWS', 'REST API']
            ],
            [
                'id' => 'tripio',
                'title' => 'Tripio Travel App',
                'short_description' => 'AI-Driven Itinerary Planner | Laravel & Vue.js',
                'is_featured' => false,
                'image' => 'projects/default.png',
                'category' => 'web',
                'link' => 'https://web.tripioapp.com/',
                'client' => 'Tripio Inc',
                'year' => '2023',
                'tags' => ['Laravel', 'Vue.js', 'AI', 'Travel', 'MySQL', 'REST API'],
                'overview' => 'Tripio is an AI-driven travel planning platform that creates personalized itineraries based on user preferences, travel style, and destination. The app optimizes trip planning by considering factors like local attractions, weather, opening hours, and travel distances.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-map-marked-alt',
                        'title' => 'AI Itinerary Generation',
                        'description' => 'Implemented algorithms that create optimized travel itineraries based on user preferences and constraints.'
                    ],
                    [
                        'icon' => 'fas fa-calendar-alt',
                        'title' => 'Dynamic Scheduling',
                        'description' => 'Developed a flexible scheduling system that adapts to changes in plans, weather, or unexpected events.'
                    ],
                    [
                        'icon' => 'fas fa-concierge-bell',
                        'title' => 'Booking Integration',
                        'description' => 'Integrated with multiple booking APIs to enable seamless reservation of accommodations, activities, and transportation.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Data Integration',
                        'description' => 'Aggregating and normalizing data from multiple travel APIs and services.'
                    ],
                    [
                        'title' => 'Optimization Algorithms',
                        'description' => 'Creating efficient algorithms to generate optimal itineraries considering multiple constraints.'
                    ]
                ],
                'results' => [
                    'Reduced trip planning time by 75% for average users',
                    'Increased user satisfaction with travel experiences by 42%',
                    'Processed over 25,000 itineraries in the first year',
                    'Maintained 4.7/5 rating on app stores'
                ],
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Google Maps API', 'AWS', 'Redis', 'REST API']
            ],
            [
                'id' => 'wrm',
                'title' => 'WorkReady Mobile',
                'short_description' => 'Adult Education Support & Retention | PHP & Laravel',
                'is_featured' => false,
                'image' => 'projects/wrm.png',
                'category' => 'web',
                'link' => '/projects/wrm',
                'client' => 'AdvanceNet Labs & Dallas County Community College District',
                'tags' => ['Laravel', 'PHP', 'AWS', 'iOS', 'Android', 'Mobile App', 'Education'],
                'overview' => 'WorkReady Mobile is a multi-platform solution designed to support Adult Basic Education (ABE) programs and help students complete their education. The platform serves as a central source of communication between administrators, instructors, and adult students, enabling virtual training without the need to attend physical classes. This solution was particularly crucial for educational institutions that needed to retain students to receive state funding based on student milestone achievements.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-comments',
                        'title' => 'Multi-Channel Communication',
                        'description' => 'Implemented various communication methods including in-app messages, push notifications, SMS, and emails to keep students engaged throughout their educational journey.'
                    ],
                    [
                        'icon' => 'fas fa-language',
                        'title' => 'Multilingual Support',
                        'description' => 'Developed support for multiple languages to ensure accessibility for diverse student populations in adult education programs.'
                    ],
                    [
                        'icon' => 'fas fa-graduation-cap',
                        'title' => 'Complete Educational Journey',
                        'description' => 'Created a comprehensive system that manages everything from student orientation to graduation, helping schools track and support the entire educational process.'
                    ],
                    [
                        'icon' => 'fas fa-tasks',
                        'title' => 'Skills Assessment',
                        'description' => 'Created a dynamic skills assessment framework that evaluates students\' technical and soft skills and identifies gaps.'
                    ],
                    [
                        'icon' => 'fas fa-chart-bar',
                        'title' => 'Smart Reporting Tools',
                        'description' => 'Implemented advanced reporting capabilities for administrators to monitor student progress, identify at-risk students, and measure program effectiveness.'
                    ],
                    [
                        'icon' => 'fas fa-palette',
                        'title' => 'Customizable UI',
                        'description' => 'Designed a flexible user interface that could be customized to meet the varying needs of different educational institutions and their branding requirements.'
                    ],
                    [
                        'icon' => 'fas fa-sync',
                        'title' => 'Multi-Platform Synchronization',
                        'description' => 'Built synchronization between web and mobile app platforms, ensuring a consistent experience across all devices.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Student Engagement',
                        'description' => 'Addressing the challenge of keeping adult students engaged in educational programs when they face numerous external barriers to education completion.'
                    ],
                    [
                        'title' => 'Multi-Tenant Architecture',
                        'description' => 'Developing a scalable system that could support multiple educational institutions while maintaining data isolation and allowing for institution-specific customizations.'
                    ],
                    [
                        'title' => 'Cross-Platform Consistency',
                        'description' => 'Ensuring a consistent user experience and data synchronization across web, iOS, and Android platforms.'
                    ],
                    [
                        'title' => 'Remote Learning Support',
                        'description' => 'Creating a platform that could effectively support distance learning, which became particularly essential during the COVID-19 pandemic.'
                    ],
                    [
                       'title' => 'Integration Ecosystem',
                        'description' => 'Created a flexible API integration layer for seamless connections to external systems.'
                    ],
                    [
                        'title' => 'Real-time Analytics',
                        'description' => 'Implemented a hybrid data processing approach for responsive analytics without overwhelming the database.'
                    ]
                ],
                'results' => [
                    'Increased student retention rates by 24%',
                    'Improved career placement outcomes by 35%',
                    'Enhanced administrative decision-making through data-driven insights',
                    'Reduced administrative workload by 15 hours per week per institution',
                    'Scaled to support over 50 educational institutions and 100,000+ students',
                    'Increased graduation rates for participating educational institutions',
                    'Improved student retention through better communication and engagement',
                    'Helped students maintain focus on educational goals',
                    'Modernized accessibility to education, especially during the COVID pandemic',
                    'Reduced administrative workload for educational institutions'
                ],
                'technologies' => ['PHP', 'Laravel', 'Vue.js', 'MySQL', 'Chart.js', 'Node.js', 'AWS', 'Git', 'AWS', 'iOS', 'Android', 'Mobile App', 'Education', 'Cornerstone', 'Adobe Sign', 'Docusign', 'Jobtimize'],
                'attribution_link' => 'https://brainxtech.com/portfolio/work-ready-mobile/'
            ],
            [
                'id' => 'dme',
                'title' => 'DosingMadeEasy',
                'short_description' => 'Precise Dosing Calculator for Healthcare | Laravel & Vue.js',
                'is_featured' => false,
                'image' => 'projects/meddose.png',
                'category' => 'web',
                'link' => '/projects/dme',
                'client' => 'Healthcare Provider',
                'tags' => ['AI', 'Laravel', 'Vue.js', 'Healthcare', 'MySQL', 'Git'],
                'year' => '2022',
                'overview' => 'DosingMadeEasy is a precise medication dosing calculation platform designed for healthcare professionals. The platform helps reduce dosing errors by considering patient-specific factors such as renal and hepatic impairments, providing healthcare providers with an automated, user-friendly tool for accurate medication dosing.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-pills',
                        'title' => 'Comprehensive Drug Database',
                        'description' => 'Integrated over 300 drug profiles and dosing information for more than 25 infectious diseases.'
                    ],
                    [
                        'icon' => 'fas fa-calculator',
                        'title' => 'Patient-Specific Dosing',
                        'description' => 'Advanced calculator that factors in Renal and Hepatic Function, Age, Weight, Creatinine Clearance (CrCl), and Estimated Glomerular Filtration Rate (eGFR).'
                    ],
                    [
                        'icon' => 'fas fa-language',
                        'title' => 'Multilingual Support',
                        'description' => 'Platform available in multiple languages to support healthcare professionals worldwide in their preferred language.'
                    ],
                    [
                        'icon' => 'fas fa-user-shield',
                        'title' => 'Role-Based Dashboards',
                        'description' => 'Separate dashboards for individual users and facility administrators with comprehensive user management capabilities.'
                    ],
                    [
                        'icon' => 'fas fa-history',
                        'title' => 'Calculation Storage',
                        'description' => 'Secure storage of dosing calculations for easy retrieval and record-keeping to support patient follow-up.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Data Integration Complexity',
                        'description' => 'Managing the integration of over 300 drug profiles and dosing information for more than 25 infectious diseases required meticulous attention to detail.'
                    ],
                    [
                        'title' => 'Accuracy Requirements',
                        'description' => 'Ensuring precise calculations for medication dosing was critical for patient safety, requiring extensive testing and validation.'
                    ],
                    [
                        'title' => 'User Experience for Healthcare Professionals',
                        'description' => 'Designing an intuitive interface for busy healthcare professionals that maintained clinical accuracy while being easy to use.'
                    ]
                ],
                'results' => [
                    'Reduced manual errors, enhancing dosing accuracy and patient safety',
                    'Improved scalability for larger healthcare organizations through efficient user management',
                    'Consistent tracking and retrieval of dosing data, supporting patient follow-up',
                    'Increased accessibility with multilingual support, aiding healthcare professionals worldwide',
                    'Higher user satisfaction with easy account management and subscription handling'
                ],
                'technologies' => ['AI', 'Laravel', 'Vue.js', 'MySQL', 'Git', 'Figma', 'AWS' ,'Docker'],
                'attribution_link' => 'https://brainxtech.com/portfolio/dosingmadeeasy/'
            ],
            [
                'id' => 'glist',
                'title' => 'Glist',
                'short_description' => 'On-Demand Beauty Service Booking App | Flutter & Laravel',
                'is_featured' => false,
                'image' => 'projects/glist.png',
                'category' => 'web',
                'link' => '/projects/glist',
                'client' => 'US-based Beauty Service Provider',
                'tags' => ['Laravel', 'Flutter', 'Mobile App', 'Firebase', 'REST API'],
                'overview' => 'Glist is an on-demand beauty service booking platform that connects clients with beauty professionals. The project involved transforming an underperforming beauty services app into a seamless service booking platform with enhanced user experience, reliable booking processes, and streamlined communication.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-calendar-check',
                        'title' => 'User-Friendly Booking System',
                        'description' => 'Developed an intuitive interface for clients to easily schedule and pay for beauty services, with real-time availability updates.'
                    ],
                    [
                        'icon' => 'fas fa-user-circle',
                        'title' => 'Enhanced Artist Profiles',
                        'description' => 'Created comprehensive profile management for beauty professionals to showcase their work, manage schedules, and set pricing.'
                    ],
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Admin Panel Enhancements',
                        'description' => 'Implemented robust admin tools for user management, booking insights, and detailed reporting capabilities.'
                    ],
                    [
                        'icon' => 'fas fa-comments',
                        'title' => 'Real-Time Communication',
                        'description' => 'Integrated Firebase-powered chat and push notifications for seamless communication between clients and beauty professionals.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Legacy Code Integration',
                        'description' => 'Thoroughly examined the existing mobile app and backend to identify areas for improvement while preserving valuable functionality.'
                    ],
                    [
                        'title' => 'User Experience Enhancement',
                        'description' => 'Addressed critical gaps in the user experience to ensure reliability and ease of use for both clients and beauty professionals.'
                    ],
                    [
                        'title' => 'Payment Processing',
                        'description' => 'Implemented secure payment solutions with Stripe for streamlined transactions between clients and service providers.'
                    ]
                ],
                'results' => [
                    'More user-friendly interface with streamlined navigation',
                    'Efficient communication through real-time chat and notifications',
                    'Simplified payment processing for clients and beauty professionals',
                    'Enhanced app ratings and user retention on both iOS and Android platforms'
                ],
                'technologies' => ['Flutter', 'Laravel', 'Firebase', 'CSS', 'HTML', 'Git', 'Stripe'],
                'attribution_link' => 'https://brainxtech.com/portfolio/on-demand-beauty-service-booking-app/'
            ],
            [
                'id' => 'voice-assistant',
                'title' => 'AI Voice Assistant Platform',
                'short_description' => 'OpenAI & Bland AI Integration | Laravel & Vue.js',
                'is_featured' => false,
                'image' => 'projects/default.png',
                'category' => 'ai',
                'link' => '/projects/voice-assistant',
                'tags' => ['Laravel', 'Vue.js', 'AI', 'Voice Recognition'],
                'year' => '2023',
            ],
            [
                'id' => 'cord',
                'title' => 'CORD Pathway Planner',
                'short_description' => 'Career Pathway Mapping Platform | Laravel & Vue.js',
                'is_featured' => true,
                'image' => 'projects/cord.png',
                'category' => 'web',
                'link' => '/projects/cord',
                'client' => 'Coalition on Rural Development (CORD)',
                'tags' => ['Laravel', 'Vue.js', 'MySQL', 'D3.js', 'Education', 'Career Development'],
                'year' => '2022',
                'overview' => 'CORD Pathway Planner is an innovative digital platform designed to help students and job seekers map their educational and career pathways. This comprehensive tool bridges the gap between education and employment, providing clear visualization of how educational choices connect to career opportunities. The platform serves educators, career counselors, and students by transforming complex career information into intuitive, interactive pathway maps that illustrate the skills, education, and experience needed for various career paths.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-route',
                        'title' => 'Interactive Pathway Maps',
                        'description' => 'Dynamic, visual pathway maps that illustrate the connections between education, skills, certifications, and career opportunities, allowing users to explore different routes to their career goals.'
                    ],
                    [
                        'icon' => 'fas fa-search',
                        'title' => 'Career Exploration Tools',
                        'description' => 'Comprehensive career exploration features with detailed information on hundreds of occupations, including descriptions, required skills, salary ranges, and job outlook data.'
                    ],
                    [
                        'icon' => 'fas fa-tasks',
                        'title' => 'Skills Assessment',
                        'description' => 'Personalized skills assessment tools that help users identify their strengths, interests, and abilities, then match them to suitable career paths and educational requirements.'
                    ],
                    [
                        'icon' => 'fas fa-user-graduate',
                        'title' => 'Education Planning',
                        'description' => 'Educational planning features that connect career goals to specific educational programs, courses, and certifications, helping users create actionable learning plans.'
                    ],
                    [
                        'icon' => 'fas fa-database',
                        'title' => 'Labor Market Integration',
                        'description' => 'Integration with real-time labor market data to provide up-to-date information on job demand, growth sectors, and emerging opportunities in different regions and industries.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Complex Data Visualization',
                        'description' => 'Creating intuitive visualizations of complex career pathways with multiple branching options and interconnections required sophisticated frontend development with Vue.js and D3.js.'
                    ],
                    [
                        'title' => 'Data Integration',
                        'description' => 'Integrating data from multiple sources including educational institutions, labor market databases, and skills frameworks required a flexible ETL pipeline.'
                    ],
                    [
                        'title' => 'Personalization Engine',
                        'description' => 'Delivering personalized pathway recommendations based on user preferences, skills, and goals required a sophisticated matching algorithm.'
                    ],
                    [
                        'title' => 'Multi-tenant Architecture',
                        'description' => 'Implementing a secure multi-tenant architecture with isolated data and configurations, while maintaining a shared codebase for efficient maintenance and updates.'
                    ]
                ],
                'results' => [
                    'Increased student engagement with career planning by 68%, helping more learners set clear educational and professional goals',
                    'Improved alignment between educational programs and workforce needs',
                    'Enhanced career counseling effectiveness, with counselors reporting a 47% reduction in time spent researching career options',
                    'Expanded access to career exploration tools for rural and underserved communities',
                    'Facilitated stronger connections between educational institutions and employers',
                    'Successfully deployed across multiple educational institutions, serving over 75,000 students in its first year'
                ],
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'D3.js', 'RESTful API', 'ETL Pipeline', 'AWS', 'Chart.js'],
                'attribution_link' => 'https://brainxtech.com/portfolio/cord/'
            ],
            [
                'id' => 'baritastic',
                'title' => 'Baritastic',
                'short_description' => 'Bariatric Surgery Support App | Laravel & Vue.js',
                'is_featured' => true,
                'image' => 'projects/baritastic.png',
                'category' => 'web',
                'link' => '/projects/baritastic',
                'client' => 'Major US Healthcare Company',
                'tags' => ['Laravel', 'Vue.js', 'MySQL', 'Healthcare', 'Mobile App', 'Patient Engagement'],
                'year' => '2023',
                'overview' => 'Baritastic is a comprehensive patient support platform designed specifically for individuals undergoing bariatric surgery. This multi-platform solution helps patients prepare for surgery, track their progress, maintain their health post-surgery, and stay connected with their healthcare providers. The platform serves both patients and healthcare providers by offering specialized tools for tracking weight loss, nutrition, hydration, medication adherence, and physical activity, while facilitating communication between patients and their medical teams.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-weight',
                        'title' => 'Comprehensive Tracking',
                        'description' => 'Advanced tracking systems for weight, nutrition, hydration, medication, physical activity, and mood, with customizable goals and progress visualization to help patients monitor their bariatric journey.'
                    ],
                    [
                        'icon' => 'fas fa-utensils',
                        'title' => 'Nutrition Management',
                        'description' => 'Specialized nutrition tracking features tailored to bariatric patients\' needs, including meal planning tools, bariatric-specific food database, portion guidance, and nutritional analysis.'
                    ],
                    [
                        'icon' => 'fas fa-user-md',
                        'title' => 'Provider Integration',
                        'description' => 'Comprehensive provider portal allowing healthcare teams to monitor patient progress, set personalized goals, send reminders, and intervene when necessary to improve patient adherence and outcomes.'
                    ],
                    [
                        'icon' => 'fas fa-calendar-alt',
                        'title' => 'Surgery Journey Timeline',
                        'description' => 'Interactive timeline feature that guides patients through pre-surgery preparation, the procedure itself, and post-surgery recovery, with customized checklists and educational content.'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Community Support',
                        'description' => 'Community features including moderated forums, success stories, and peer connections to create a supportive environment where patients can share experiences and encouragement.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Cross-Platform Integration',
                        'description' => 'Developing a unified API architecture using Laravel that could serve both the web dashboard and mobile applications, ensuring data synchronization and feature parity across platforms.'
                    ],
                    [
                        'title' => 'Patient Data Security',
                        'description' => 'Implementing comprehensive encryption, secure authentication systems, access controls, and audit logging to protect patient data while maintaining usability for both patients and healthcare providers.'
                    ],
                    [
                        'title' => 'Personalized Patient Journeys',
                        'description' => 'Designing a flexible content and milestone system that could be customized for individual patient needs while maintaining a structured approach to the bariatric journey.'
                    ],
                    [
                        'title' => 'Offline Functionality',
                        'description' => 'Implementing sophisticated data caching and synchronization mechanisms that allowed users to record activities offline, with seamless syncing when connectivity was restored.'
                    ]
                ],
                'results' => [
                    'Improved patient adherence to post-surgery protocols by 63%, leading to better health outcomes and reduced complications',
                    'Increased patient satisfaction with the bariatric surgery experience by 78%, as measured by post-surgery surveys',
                    'Reduced post-operative readmission rates by 42% among patients actively using the platform compared to non-users',
                    'Enhanced communication efficiency between patients and providers, with a 56% reduction in unnecessary office visits',
                    'Provided clinicians with comprehensive patient data, enabling more personalized care and timely interventions',
                    'Successfully deployed across 215+ bariatric surgery centers nationwide, supporting over 120,000 patients'
                ],
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'RESTful API', 'Mobile Integration', 'D3.js', 'AWS', 'OAuth 2.0'],
                'attribution_link' => 'https://brainxtech.com/portfolio/baritastic/'
            ],
            [
                'id' => 'medesto',
                'title' => 'Medesto',
                'short_description' => 'Pharmacy Patient Management System | Laravel & Vue.js',
                'is_featured' => false,
                'image' => 'projects/medesto.png',
                'category' => 'web',
                'link' => '/projects/medesto',
                'client' => 'Perigon Pharmacy',
                'tags' => ['Laravel', 'Vue.js', 'MySQL', 'Healthcare', 'Pharmacy', 'Inventory Management'],
                'year' => '2021',
                'overview' => 'Medesto is an integrated pharmacy management system designed to streamline patient management, prescription processing, and inventory control. This comprehensive platform helps pharmacies optimize their operations, improve patient care, and ensure medication safety. The system serves as a central hub for all pharmacy activities, from patient onboarding and prescription management to inventory tracking and reporting, while incorporating advanced features to help pharmacies maintain regulatory compliance and enhance operational efficiency.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Patient Management',
                        'description' => 'Comprehensive patient management system with detailed profiles, medication histories, insurance information, and allergy tracking to provide personalized pharmaceutical care.'
                    ],
                    [
                        'icon' => 'fas fa-prescription',
                        'title' => 'Prescription Processing',
                        'description' => 'Advanced prescription management workflow with electronic prescription handling, refill processing, and drug interaction checks to ensure medication safety and efficiency.'
                    ],
                    [
                        'icon' => 'fas fa-boxes',
                        'title' => 'Inventory Management',
                        'description' => 'Real-time inventory tracking system with automated reordering, expiration date monitoring, and medication lot tracking to optimize stock levels and reduce waste.'
                    ],
                    [
                        'icon' => 'fas fa-comment-medical',
                        'title' => 'Patient Communication',
                        'description' => 'Automated notification systems for prescription refill reminders, pickup notifications, and medication adherence support through email, SMS, and app notifications.'
                    ],
                    [
                        'icon' => 'fas fa-file-invoice-dollar',
                        'title' => 'Billing & Insurance',
                        'description' => 'Integrated billing module with insurance claim processing, patient payment tracking, and financial reporting to streamline the pharmacy\'s revenue management.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Regulatory Compliance',
                        'description' => 'Implementing comprehensive validation systems, audit logging, and security protocols to ensure all operations met regulatory requirements while maintaining an efficient workflow.'
                    ],
                    [
                        'title' => 'Complex Medication Data',
                        'description' => 'Designing a flexible database schema that could accurately represent complex medication relationships while supporting fast search and retrieval.'
                    ],
                    [
                        'title' => 'Insurance Integration',
                        'description' => 'Developing a standardized integration layer that could adapt to different insurance systems while providing consistent functionality to the pharmacy staff.'
                    ],
                    [
                        'title' => 'High-Volume Data Processing',
                        'description' => 'Implementing database indexing strategies, query optimization, and caching mechanisms to ensure the system could handle peak loads without performance degradation.'
                    ]
                ],
                'results' => [
                    'Increased prescription processing capacity by 35% without requiring additional staff',
                    'Reduced medication errors by 92% through automated verification processes and drug interaction checks',
                    'Decreased inventory costs by 18% through optimized stock management and reduced waste',
                    'Improved patient medication adherence by 28% through automated reminders and enhanced communication',
                    'Streamlined billing processes, resulting in a 45% reduction in claim rejection rates',
                    'Provided pharmacy management with actionable business intelligence for strategic decision-making'
                ],
                'technologies' => ['Vue.js', 'Laravel', 'MySQL', 'RESTful API', 'Push Notifications', 'Twilio', 'AWS', 'OAuth 2.0'],
                'attribution_link' => 'https://brainxtech.com/portfolio/medesto/'
            ],
            [
                'id' => 'iyf',
                'title' => 'IYF Survey & Test Platform',
                'short_description' => 'Interactive Assessment Platform | Laravel & Vue.js SPA',
                'is_featured' => false,
                'image' => 'projects/default.png',
                'category' => 'web',
                'link' => '/projects/iyf',
                'client' => 'Educational Assessment Organization',
                'tags' => ['Laravel', 'Vue.js', 'SPA', 'Education', 'Assessment', 'Multi-lingual'],
                'year' => '2020',
                'overview' => 'IYF is a comprehensive survey and test platform developed as a Single Page Application (SPA) using Laravel and Vue.js. This was my first project at Brainx Technologies, where I built an interactive assessment system featuring workbooks with various question types including multiple-choice, single-select, multi-select, image-based questions, and short/long answer formats. The platform supports educational institutions in creating, administering, and analyzing assessments across multiple languages.',
                'key_features' => [
                    [
                        'icon' => 'fas fa-book',
                        'title' => 'Workbook Structure',
                        'description' => 'Designed a flexible workbook structure allowing administrators to organize assessments into modular sections with various question types and difficulty levels.'
                    ],
                    [
                        'icon' => 'fas fa-tasks',
                        'title' => 'Diverse Question Types',
                        'description' => 'Implemented multiple question formats including MCQs, single/multi-select options, image-based questions, and text responses to accommodate different assessment needs.'
                    ],
                    [
                        'icon' => 'fas fa-language',
                        'title' => 'Multi-lingual Support',
                        'description' => 'Built comprehensive multi-language support enabling assessments to be created and taken in multiple languages, increasing accessibility for diverse user populations.'
                    ],
                    [
                        'icon' => 'fas fa-mobile-alt',
                        'title' => 'Responsive Design',
                        'description' => 'Developed fully responsive interfaces ensuring seamless assessment experiences across devices from desktops to smartphones, allowing users to complete assessments anywhere.'
                    ],
                    [
                        'icon' => 'fas fa-chart-bar',
                        'title' => 'Results Analytics',
                        'description' => 'Created detailed analytics dashboards for administrators to evaluate assessment performance, identify knowledge gaps, and generate comprehensive reports.'
                    ]
                ],
                'challenges' => [
                    [
                        'title' => 'Complex Question Logic',
                        'description' => 'Implementing diverse question types with different validation rules, scoring mechanisms, and display logic required sophisticated frontend and backend development.'
                    ],
                    [
                        'title' => 'SPA Architecture',
                        'description' => 'Building a seamless single-page application experience that maintained state across the assessment process while ensuring data integrity and performance optimization.'
                    ],
                    [
                        'title' => 'Multi-language Implementation',
                        'description' => 'Developing a robust localization system that could handle dynamic content creation and display across multiple languages, including right-to-left language support.'
                    ],
                    [
                        'title' => 'Mobile Responsiveness',
                        'description' => 'Ensuring complex question types and interactive elements remained functional and user-friendly across various screen sizes and device capabilities.'
                    ]
                ],
                'results' => [
                    'Successfully implemented as my first major project at Brainx Technologies',
                    'Reduced assessment creation time by 65% compared to previous manual methods',
                    'Improved completion rates by 40% through the mobile-responsive design',
                    'Enabled educational institutions to offer assessments in multiple languages',
                    'Streamlined the assessment process from creation to reporting',
                    'Enhanced data collection quality through structured question formats'
                ],
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'SPA', 'API', 'JavaScript', 'CSS3', 'HTML5', 'Bootstrap']
            ],
        ];
    }

    /**
     * Get all projects
     *
     * @return array
     */
    public function getAllProjects()
    {
        return $this->projects;
    }

    /**
     * Get featured project
     *
     * @return array
     */
    public function getFeaturedProject()
    {
        foreach ($this->projects as $project) {
            if (isset($project['is_featured']) && $project['is_featured']) {
                return $project;
            }
        }
        
        // If no featured project is found, return the first one
        return $this->projects[0] ?? null;
    }

    /**
     * Get filtered projects by category
     *
     * @param string $category
     * @return array
     */
    public function getProjectsByCategory($category)
    {
        if ($category === 'all') {
            return $this->projects;
        }

        return array_filter($this->projects, function ($project) use ($category) {
            return isset($project['category']) && $project['category'] === $category;
        });
    }

    /**
     * Get project by ID
     *
     * @param string $id
     * @return array|null
     */
    public function getProjectById($id)
    {
        foreach ($this->projects as $project) {
            if ($project['id'] === $id) {
                return $project;
            }
        }
        
        return null;
    }

    /**
     * Display the projects listing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = $this->getAllProjects();
        return view('portfolio.projects.index', compact('projects'));
    }

    /**
     * Display the specified project details.
     *
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $project = $this->getProjectById($id);
        
        if (!$project) {
            abort(404);
        }
        
        return view('portfolio.projects.show', compact('project'));
    }
} 