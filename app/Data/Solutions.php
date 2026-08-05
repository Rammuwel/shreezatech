<?php

namespace App\Data;

class Solutions
{
    public static function all(): array
    {
        return [

            [
                'id' => 1,

                'name' => 'Healthcare',

                'slug' => 'healthcare',

                'icon' => 'fa-solid fa-heart-pulse',

                'short_description' => '',

                'hero' => [

                    'badge' => 'Healthcare Industry',

                    'title' => 'Healthcare Software Solutions',

                    'subtitle' => 'Transforming Patient Care Through Smart Technology',

                    'description' =>
                    'We build secure, scalable, and innovative healthcare software solutions that streamline hospital operations, improve patient experiences, automate clinical workflows, and ensure compliance with modern healthcare standards.',

                    'image' => 'images/solutions/shreeza-tech-healthcare-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Digital Healthcare Transformation',

                    'description' =>
                    'Healthcare organizations are embracing digital transformation to improve patient care, automate clinical workflows, optimize hospital operations, and ensure regulatory compliance. Our healthcare software solutions help hospitals, clinics, laboratories, and healthcare providers deliver exceptional patient experiences while increasing operational efficiency.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-file-waveform',
                        'title' => 'Manual Record Management',
                        'description' => 'Paper-based processes lead to delays, errors, and inefficient operations.',
                    ],

                    [
                        'icon' => 'fa-solid fa-clock',
                        'title' => 'Long Waiting Times',
                        'description' => 'Inefficient scheduling and workflows reduce patient satisfaction.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Data Security & Compliance',
                        'description' => 'Healthcare organizations must protect sensitive patient information.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Lack of Business Insights',
                        'description' => 'Disconnected systems make reporting and decision-making difficult.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-hospital',
                        'title' => 'Hospital Management System',
                        'description' => 'Manage patients, doctors, appointments, billing, pharmacy, and operations from one platform.',
                    ],

                    [
                        'icon' => 'fa-solid fa-calendar-check',
                        'title' => 'Appointment Management',
                        'description' => 'Online appointment scheduling with reminders and calendar integration.',
                    ],

                    [
                        'icon' => 'fa-solid fa-user-doctor',
                        'title' => 'Electronic Medical Records',
                        'description' => 'Secure digital patient records with quick access and compliance support.',
                    ],

                    [
                        'icon' => 'fa-solid fa-pills',
                        'title' => 'Pharmacy Management',
                        'description' => 'Inventory tracking, prescription management, and medicine billing.',
                    ],

                    [
                        'icon' => 'fa-solid fa-vial',
                        'title' => 'Laboratory Management',
                        'description' => 'Manage lab tests, reports, sample tracking, and diagnostics efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-video',
                        'title' => 'Telemedicine Platform',
                        'description' => 'Enable secure online consultations and virtual healthcare services.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Enterprise Security',
                        'description' => 'Advanced authentication, authorization, encryption, and secure data management.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Analytics Dashboard',
                        'description' => 'Gain valuable business insights through real-time reports and analytics.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud Ready',
                        'description' => 'Deploy on AWS, Azure, or any cloud platform with high availability.',
                    ],

                    [
                        'icon' => 'fa-solid fa-gears',
                        'title' => 'Workflow Automation',
                        'description' => 'Automate repetitive business processes and increase productivity.',
                    ],

                    [
                        'icon' => 'fa-solid fa-plug',
                        'title' => 'Third-Party Integration',
                        'description' => 'Connect seamlessly with payment gateways, CRMs, APIs, and external services.',
                    ],

                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Responsive Design',
                        'description' => 'Fully optimized for desktop, tablet, and mobile devices.',

                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'Node.js',
                        'icon' => 'fa-brands fa-node-js',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Discovery & Consultation',
                        'description' => 'We understand your business goals, challenges, and project requirements.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Planning & Strategy',
                        'description' => 'Our experts prepare a roadmap, technology stack, and project timeline.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'UI/UX Design',
                        'description' => 'We design intuitive, modern, and user-friendly interfaces.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Our developers build secure, scalable, and high-performance applications.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Testing & QA',
                        'description' => 'Every feature is thoroughly tested for quality, security, and performance.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Deployment & Support',
                        'description' => 'We deploy your solution and provide continuous maintenance and support.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you build a custom solution for our business?',
                        'answer' => 'Yes. Every solution we develop is tailored to your business requirements, workflows, and long-term goals.',
                    ],

                    [
                        'question' => 'Can the software integrate with our existing systems?',
                        'answer' => 'Absolutely. We can integrate with CRMs, ERPs, payment gateways, APIs, cloud services, and third-party applications.',
                    ],

                    [
                        'question' => 'Is the solution secure?',
                        'answer' => 'Yes. We follow industry best practices including authentication, authorization, encryption, secure APIs, and regular security updates.',
                    ],

                    [
                        'question' => 'Do you provide maintenance and support?',
                        'answer' => 'Yes. We offer ongoing maintenance, performance monitoring, feature enhancements, and technical support after deployment.',
                    ],

                    [
                        'question' => 'How long does development take?',
                        'answer' => 'Project timelines depend on complexity, but most solutions are delivered within a few weeks to a few months with agile milestones.',
                    ],

                ],
            ],

            [
                'id' => 2,

                'name' => 'Finance',

                'slug' => 'finance',

                'icon' => 'fa-solid fa-building-columns',

                'short_description' => 'Secure, scalable, and intelligent software solutions for banks, financial institutions, fintech startups, and accounting businesses.',

                'hero' => [

                    'badge' => 'Finance Industry',

                    'title' => 'Financial Software Solutions',

                    'subtitle' => 'Secure, Smart & Future-Ready Financial Applications',

                    'description' =>
                    'We build modern financial software solutions that simplify banking operations, automate financial workflows, strengthen security, and deliver exceptional digital experiences for customers and businesses.',

                    'image' => 'images/solutions/shreeza-tech-finance-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Digital Transformation for Financial Businesses',

                    'description' =>
                    'Financial organizations require secure, compliant, and scalable software to manage transactions, customer relationships, lending, reporting, and digital payments. Our finance solutions improve efficiency while maintaining the highest standards of security and compliance.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-lock',
                        'title' => 'Cybersecurity Risks',
                        'description' => 'Protecting financial data from cyber threats and unauthorized access.',
                    ],

                    [
                        'icon' => 'fa-solid fa-scale-balanced',
                        'title' => 'Regulatory Compliance',
                        'description' => 'Meeting industry regulations and maintaining compliance standards.',
                    ],

                    [
                        'icon' => 'fa-solid fa-money-bill-transfer',
                        'title' => 'Payment Processing',
                        'description' => 'Managing secure, fast, and reliable digital transactions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-column',
                        'title' => 'Financial Reporting',
                        'description' => 'Generating accurate reports and real-time business insights.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-building-columns',
                        'title' => 'Core Banking System',
                        'description' => 'Comprehensive banking software for customer accounts, deposits, and transactions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',
                        'title' => 'Payment Gateway',
                        'description' => 'Secure online payment processing with multiple payment methods.',
                    ],

                    [
                        'icon' => 'fa-solid fa-hand-holding-dollar',
                        'title' => 'Loan Management System',
                        'description' => 'Automate loan applications, approvals, repayments, and tracking.',
                    ],

                    [
                        'icon' => 'fa-solid fa-file-invoice-dollar',
                        'title' => 'Accounting Software',
                        'description' => 'Manage invoices, expenses, taxation, and financial reporting.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Customer Relationship Management',
                        'description' => 'Improve customer engagement with integrated CRM solutions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Financial Analytics Dashboard',
                        'description' => 'Visualize financial performance with interactive dashboards and reports.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Enterprise Security',
                        'description' => 'Advanced authentication, encryption, and secure financial data protection.',
                    ],

                    [
                        'icon' => 'fa-solid fa-fingerprint',
                        'title' => 'Role-Based Access',
                        'description' => 'Control user permissions with secure role management.',
                    ],

                    [
                        'icon' => 'fa-solid fa-money-check-dollar',
                        'title' => 'Transaction Monitoring',
                        'description' => 'Track transactions and identify suspicious activities in real time.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud Deployment',
                        'description' => 'Highly available and scalable cloud infrastructure.',
                    ],

                    [
                        'icon' => 'fa-solid fa-plug',
                        'title' => 'API Integration',
                        'description' => 'Integrate banking APIs, payment gateways, and third-party services.',
                    ],

                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Mobile Banking',
                        'description' => 'Responsive applications for banking anytime and anywhere.',
                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'Node.js',
                        'icon' => 'fa-brands fa-node-js',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Business Analysis',
                        'description' => 'Understand financial workflows, compliance requirements, and project objectives.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Solution Planning',
                        'description' => 'Define architecture, technology stack, and project roadmap.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'UI/UX Design',
                        'description' => 'Create secure and user-friendly financial interfaces.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Develop secure, scalable, and high-performance financial software.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Security Testing',
                        'description' => 'Perform extensive testing for security, performance, and compliance.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Deployment & Support',
                        'description' => 'Deploy the solution and provide ongoing maintenance and enhancements.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you develop custom fintech software?',
                        'answer' => 'Yes, we build custom fintech, banking, lending, and accounting solutions tailored to your business.',
                    ],

                    [
                        'question' => 'Is the software secure?',
                        'answer' => 'Yes. We implement enterprise-grade security including encryption, authentication, authorization, and secure APIs.',
                    ],

                    [
                        'question' => 'Can you integrate payment gateways?',
                        'answer' => 'Absolutely. We integrate popular payment gateways and banking APIs.',
                    ],

                    [
                        'question' => 'Do you support regulatory compliance?',
                        'answer' => 'Yes. Our solutions are designed with industry compliance and security best practices in mind.',
                    ],

                    [
                        'question' => 'Do you provide maintenance after deployment?',
                        'answer' => 'Yes. We provide continuous support, updates, monitoring, and feature enhancements.',
                    ],

                ],

            ],

            [
                'id' => 3,

                'name' => 'Education',

                'slug' => 'education',

                'icon' => 'fa-solid fa-graduation-cap',

                'short_description' => 'Modern digital solutions for schools, colleges, universities, coaching institutes, and e-learning platforms.',

                'hero' => [

                    'badge' => 'Education Industry',

                    'title' => 'Education Software Solutions',

                    'subtitle' => 'Empowering Learning Through Digital Innovation',

                    'description' =>
                    'We develop intelligent education software that simplifies academic management, enhances student engagement, automates administrative processes, and enables seamless online learning experiences.',

                    'image' => 'images/solutions/shreeza-tech-education-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Building the Future of Digital Education',

                    'description' =>
                    'Educational institutions are rapidly embracing technology to improve learning experiences, simplify administration, and enhance collaboration between students, teachers, and parents. Our solutions provide secure, scalable, and future-ready education platforms.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-book',
                        'title' => 'Manual Academic Management',
                        'description' => 'Traditional academic processes consume time and increase administrative workload.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Student Engagement',
                        'description' => 'Keeping students engaged through digital and interactive learning experiences.',
                    ],

                    [
                        'icon' => 'fa-solid fa-calendar-days',
                        'title' => 'Scheduling & Attendance',
                        'description' => 'Managing classes, attendance, examinations, and academic calendars efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Performance Tracking',
                        'description' => 'Monitoring student progress and generating actionable academic insights.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-school',
                        'title' => 'School Management System',
                        'description' => 'Manage admissions, attendance, examinations, fees, and academics from one platform.',
                    ],

                    [
                        'icon' => 'fa-solid fa-laptop',
                        'title' => 'Learning Management System',
                        'description' => 'Deliver online courses, assignments, quizzes, certifications, and progress tracking.',
                    ],

                    [
                        'icon' => 'fa-solid fa-user-graduate',
                        'title' => 'Student Information System',
                        'description' => 'Centralize student records, academic history, attendance, and performance.',
                    ],

                    [
                        'icon' => 'fa-solid fa-file-circle-check',
                        'title' => 'Online Examination System',
                        'description' => 'Conduct secure online exams with automated evaluation and reporting.',
                    ],

                    [
                        'icon' => 'fa-solid fa-money-check-dollar',
                        'title' => 'Fee Management',
                        'description' => 'Automate fee collection, online payments, receipts, and financial reporting.',
                    ],

                    [
                        'icon' => 'fa-solid fa-comments',
                        'title' => 'Parent & Teacher Portal',
                        'description' => 'Improve communication between schools, teachers, students, and parents.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-user-shield',
                        'title' => 'Role-Based Access',
                        'description' => 'Separate dashboards for administrators, teachers, students, and parents.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Academic Analytics',
                        'description' => 'Track student performance with interactive dashboards and reports.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud Based',
                        'description' => 'Access educational resources anytime from any device.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bell',
                        'title' => 'Notifications',
                        'description' => 'Instant notifications for assignments, exams, attendance, and announcements.',
                    ],

                    [
                        'icon' => 'fa-solid fa-video',
                        'title' => 'Virtual Learning',
                        'description' => 'Support online classes with integrated video conferencing and learning tools.',
                    ],

                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Mobile Friendly',
                        'description' => 'Responsive applications for students, teachers, and parents.',
                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'Livewire',
                        'icon' => 'fa-solid fa-bolt',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Requirement Analysis',
                        'description' => 'Understand academic workflows, institution needs, and project objectives.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Planning',
                        'description' => 'Create the implementation roadmap and define system architecture.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'UI/UX Design',
                        'description' => 'Design intuitive interfaces for students, teachers, and administrators.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Build secure, scalable, and feature-rich education software solutions.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Testing',
                        'description' => 'Ensure quality, performance, security, and compatibility before launch.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Deployment & Support',
                        'description' => 'Deploy the platform and provide continuous maintenance and technical support.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you develop custom school management software?',
                        'answer' => 'Yes. We build custom solutions for schools, colleges, universities, and coaching institutes.',
                    ],

                    [
                        'question' => 'Can students access the platform on mobile devices?',
                        'answer' => 'Yes. Our education platforms are fully responsive and mobile-friendly.',
                    ],

                    [
                        'question' => 'Do you support online examinations?',
                        'answer' => 'Yes. We develop secure online examination systems with automated evaluation and reporting.',
                    ],

                    [
                        'question' => 'Can the system integrate with existing ERP or LMS software?',
                        'answer' => 'Absolutely. We can integrate with third-party educational tools and existing platforms.',
                    ],

                    [
                        'question' => 'Do you provide post-launch support?',
                        'answer' => 'Yes. We offer ongoing maintenance, feature upgrades, monitoring, and technical support.',
                    ],

                ],

            ],

            [
                'id' => 4,

                'name' => 'Real Estate',

                'slug' => 'real-estate',

                'icon' => 'fa-solid fa-building',

                'short_description' => 'Modern software solutions for real estate agencies, property developers, brokers, and property management companies.',

                'hero' => [

                    'badge' => 'Real Estate Industry',

                    'title' => 'Real Estate Software Solutions',

                    'subtitle' => 'Smart Digital Solutions for Property Businesses',

                    'description' =>
                    'We develop powerful real estate software that simplifies property management, automates sales processes, improves customer engagement, and accelerates business growth.',

                    'image' => 'images/solutions/shreeza-tech-real-estate-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Transforming the Real Estate Industry',

                    'description' =>
                    'The real estate industry requires efficient property management, lead tracking, online booking, document management, and customer relationship tools. Our custom software solutions help agencies and developers streamline operations while providing exceptional customer experiences.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-house',
                        'title' => 'Property Management',
                        'description' => 'Managing multiple properties, tenants, and maintenance requests efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Lead Management',
                        'description' => 'Tracking buyers, sellers, and prospects across different sales channels.',
                    ],

                    [
                        'icon' => 'fa-solid fa-file-signature',
                        'title' => 'Documentation',
                        'description' => 'Handling contracts, agreements, and legal documents securely.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Sales Visibility',
                        'description' => 'Monitoring sales performance, property availability, and business growth.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-building',
                        'title' => 'Property Management System',
                        'description' => 'Manage residential and commercial properties from a centralized platform.',
                    ],

                    [
                        'icon' => 'fa-solid fa-address-book',
                        'title' => 'CRM for Real Estate',
                        'description' => 'Manage leads, customers, follow-ups, and sales pipelines effectively.',
                    ],

                    [
                        'icon' => 'fa-solid fa-house-user',
                        'title' => 'Property Listing Portal',
                        'description' => 'Create modern property listing websites with advanced search and filtering.',
                    ],

                    [
                        'icon' => 'fa-solid fa-calendar-check',
                        'title' => 'Site Visit Booking',
                        'description' => 'Allow customers to schedule property visits online with ease.',
                    ],

                    [
                        'icon' => 'fa-solid fa-money-check-dollar',
                        'title' => 'Sales & Payment Management',
                        'description' => 'Track bookings, payments, installments, and customer invoices.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Business Analytics',
                        'description' => 'Gain valuable insights through sales reports and performance dashboards.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-map-location-dot',
                        'title' => 'Interactive Property Maps',
                        'description' => 'Display property locations with integrated Google Maps support.',
                    ],

                    [
                        'icon' => 'fa-solid fa-images',
                        'title' => 'Property Gallery',
                        'description' => 'Showcase high-quality images, videos, and virtual tours.',
                    ],

                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Responsive Design',
                        'description' => 'Access property information seamlessly across all devices.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bell',
                        'title' => 'Instant Notifications',
                        'description' => 'Receive alerts for inquiries, bookings, and property updates.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud-Based Platform',
                        'description' => 'Access your property data securely from anywhere.',
                    ],

                    [
                        'icon' => 'fa-solid fa-lock',
                        'title' => 'Secure Data Management',
                        'description' => 'Protect sensitive customer and property information with enterprise-grade security.',
                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Requirement Discovery',
                        'description' => 'Understand your real estate business model and operational needs.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Project Planning',
                        'description' => 'Define project scope, technology stack, and implementation strategy.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'UI/UX Design',
                        'description' => 'Create engaging and intuitive interfaces for buyers, agents, and administrators.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Build secure, scalable, and feature-rich real estate software solutions.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Quality Assurance',
                        'description' => 'Test every module to ensure reliability, security, and performance.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Deployment & Maintenance',
                        'description' => 'Deploy the solution and provide ongoing technical support and updates.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you develop custom real estate portals?',
                        'answer' => 'Yes. We build fully customized property portals, agency websites, and management systems tailored to your business.',
                    ],

                    [
                        'question' => 'Can buyers schedule property visits online?',
                        'answer' => 'Absolutely. We can integrate online booking and appointment scheduling features.',
                    ],

                    [
                        'question' => 'Do you integrate payment gateways?',
                        'answer' => 'Yes. We support secure payment gateway integration for bookings, deposits, and installments.',
                    ],

                    [
                        'question' => 'Can the platform manage multiple projects and properties?',
                        'answer' => 'Yes. Our solutions are designed to manage unlimited properties, projects, agents, and customers.',
                    ],

                    [
                        'question' => 'Do you provide long-term support?',
                        'answer' => 'Yes. We offer maintenance, upgrades, monitoring, and technical support after deployment.',
                    ],

                ],

            ],

            [
                'id' => 5,

                'name' => 'Manufacturing',

                'slug' => 'manufacturing',

                'icon' => 'fa-solid fa-industry',

                'short_description' => 'Smart manufacturing software solutions to optimize production, inventory, quality control, and factory operations.',

                'hero' => [

                    'badge' => 'Manufacturing Industry',

                    'title' => 'Manufacturing Software Solutions',

                    'subtitle' => 'Digitizing Factory Operations for Maximum Efficiency',

                    'description' =>
                    'We build intelligent manufacturing software that streamlines production planning, inventory management, quality control, procurement, and factory operations while improving efficiency and reducing operational costs.',

                    'image' => 'images/solutions/shreeza-tech-manufacturing-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Smart Manufacturing Solutions',

                    'description' =>
                    'Modern manufacturers require real-time visibility into production, inventory, equipment, and supply chains. Our custom software solutions automate manufacturing processes, improve productivity, reduce downtime, and enable data-driven decision-making.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-gears',
                        'title' => 'Production Planning',
                        'description' => 'Managing production schedules efficiently while minimizing delays and bottlenecks.',
                    ],

                    [
                        'icon' => 'fa-solid fa-boxes-stacked',
                        'title' => 'Inventory Management',
                        'description' => 'Tracking raw materials and finished goods across multiple warehouses.',
                    ],

                    [
                        'icon' => 'fa-solid fa-screwdriver-wrench',
                        'title' => 'Equipment Maintenance',
                        'description' => 'Preventing unexpected machine failures through proactive maintenance.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Operational Visibility',
                        'description' => 'Lack of real-time production insights affects business performance.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-industry',
                        'title' => 'Manufacturing ERP',
                        'description' => 'Manage production, procurement, inventory, finance, and operations from one platform.',
                    ],

                    [
                        'icon' => 'fa-solid fa-boxes-stacked',
                        'title' => 'Inventory Management',
                        'description' => 'Track inventory levels, warehouse stock, suppliers, and material movement.',
                    ],

                    [
                        'icon' => 'fa-solid fa-clipboard-check',
                        'title' => 'Quality Control System',
                        'description' => 'Ensure consistent product quality through automated inspection workflows.',
                    ],

                    [
                        'icon' => 'fa-solid fa-screwdriver-wrench',
                        'title' => 'Maintenance Management',
                        'description' => 'Schedule preventive maintenance and monitor equipment health.',
                    ],

                    [
                        'icon' => 'fa-solid fa-truck',
                        'title' => 'Supply Chain Management',
                        'description' => 'Optimize procurement, supplier management, logistics, and deliveries.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Production Analytics',
                        'description' => 'Monitor production performance with real-time dashboards and reports.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Real-Time Dashboards',
                        'description' => 'Monitor production KPIs, machine status, and operational performance instantly.',
                    ],

                    [
                        'icon' => 'fa-solid fa-warehouse',
                        'title' => 'Warehouse Management',
                        'description' => 'Manage inventory, stock transfers, and warehouse operations efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-arrows-rotate',
                        'title' => 'Workflow Automation',
                        'description' => 'Automate repetitive manufacturing processes and approvals.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud Integration',
                        'description' => 'Access manufacturing data securely from anywhere in real time.',
                    ],

                    [
                        'icon' => 'fa-solid fa-plug',
                        'title' => 'ERP & API Integration',
                        'description' => 'Integrate with ERP systems, accounting software, and third-party services.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Enterprise Security',
                        'description' => 'Protect business-critical manufacturing data with advanced security measures.',
                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Business Analysis',
                        'description' => 'Analyze manufacturing workflows, production processes, and operational goals.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Planning & Architecture',
                        'description' => 'Design scalable system architecture and implementation roadmap.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'UI/UX Design',
                        'description' => 'Create intuitive dashboards for factory operators, managers, and administrators.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Build secure, scalable, and high-performance manufacturing software.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Testing & Deployment',
                        'description' => 'Perform extensive testing before deploying the solution into production.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Support & Optimization',
                        'description' => 'Provide continuous monitoring, maintenance, and feature enhancements.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you develop custom manufacturing ERP software?',
                        'answer' => 'Yes. We build ERP solutions tailored to your manufacturing workflows and operational requirements.',
                    ],

                    [
                        'question' => 'Can your software manage multiple factories?',
                        'answer' => 'Yes. Our solutions support multiple factories, warehouses, and production units from a centralized platform.',
                    ],

                    [
                        'question' => 'Can the software integrate with existing ERP systems?',
                        'answer' => 'Absolutely. We integrate with ERP, accounting software, IoT devices, and third-party APIs.',
                    ],

                    [
                        'question' => 'Does the system support inventory and warehouse management?',
                        'answer' => 'Yes. Inventory tracking, warehouse management, procurement, and stock monitoring are core features.',
                    ],

                    [
                        'question' => 'Do you provide maintenance after deployment?',
                        'answer' => 'Yes. We provide ongoing support, monitoring, upgrades, and technical assistance to ensure smooth operations.',
                    ],

                ],

            ],

            [
                'id' => 6,

                'name' => 'Retail',

                'slug' => 'retail',

                'icon' => 'fa-solid fa-cart-shopping',

                'short_description' => 'Smart retail software solutions for stores, supermarkets, franchises, wholesalers, and e-commerce businesses.',

                'hero' => [

                    'badge' => 'Retail Industry',

                    'title' => 'Retail Software Solutions',

                    'subtitle' => 'Modern Retail Technology That Drives Sales & Customer Experience',

                    'description' =>
                    'We build intelligent retail software solutions that simplify inventory management, automate sales processes, improve customer engagement, and provide real-time business insights for sustainable growth.',

                    'image' => 'images/solutions/shreeza-tech-retail-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Digital Transformation for Retail Businesses',

                    'description' =>
                    'Modern retailers need integrated systems to manage products, customers, inventory, billing, suppliers, and online sales. Our custom retail software helps businesses improve operational efficiency while delivering exceptional shopping experiences.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-boxes-stacked',
                        'title' => 'Inventory Management',
                        'description' => 'Maintaining accurate stock levels across multiple stores and warehouses.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Customer Retention',
                        'description' => 'Providing personalized shopping experiences and loyalty programs.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cash-register',
                        'title' => 'Sales Management',
                        'description' => 'Managing billing, returns, discounts, and multiple payment methods.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Business Analytics',
                        'description' => 'Tracking sales performance and customer buying behavior in real time.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-cart-shopping',
                        'title' => 'Retail Management System',
                        'description' => 'Manage products, inventory, billing, customers, and suppliers from one platform.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cash-register',
                        'title' => 'POS System',
                        'description' => 'Fast, secure, and efficient point-of-sale software for retail businesses.',
                    ],

                    [
                        'icon' => 'fa-solid fa-box-open',
                        'title' => 'Inventory Management',
                        'description' => 'Track stock levels, purchase orders, warehouses, and product movement.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Customer Loyalty System',
                        'description' => 'Reward loyal customers with memberships, offers, and reward points.',
                    ],

                    [
                        'icon' => 'fa-solid fa-store',
                        'title' => 'Multi-Store Management',
                        'description' => 'Manage multiple retail stores and franchises from a centralized dashboard.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Sales Analytics',
                        'description' => 'Visualize sales trends, revenue, inventory performance, and customer insights.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-barcode',
                        'title' => 'Barcode & QR Support',
                        'description' => 'Speed up inventory tracking and billing with barcode and QR code scanning.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',
                        'title' => 'Multiple Payment Methods',
                        'description' => 'Accept cash, cards, UPI, wallets, and online payments securely.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-column',
                        'title' => 'Sales Dashboard',
                        'description' => 'Monitor sales, inventory, profits, and business performance in real time.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud-Based Access',
                        'description' => 'Access your retail business from anywhere with secure cloud infrastructure.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bell',
                        'title' => 'Stock Alerts',
                        'description' => 'Receive automatic notifications for low stock and inventory shortages.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Secure Transactions',
                        'description' => 'Protect customer and financial data using enterprise-grade security practices.',
                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Business Consultation',
                        'description' => 'Understand your retail operations, sales process, and business objectives.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Planning & Strategy',
                        'description' => 'Design a scalable solution that aligns with your retail workflow.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'UI/UX Design',
                        'description' => 'Create intuitive interfaces for customers, cashiers, and administrators.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Develop secure and scalable retail management software tailored to your needs.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Testing & Deployment',
                        'description' => 'Perform comprehensive testing before deploying the solution into production.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Maintenance & Support',
                        'description' => 'Provide continuous monitoring, software updates, and technical support.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you build a custom POS system?',
                        'answer' => 'Yes. We develop fully customized POS software tailored to your retail business requirements.',
                    ],

                    [
                        'question' => 'Can the system manage multiple stores?',
                        'answer' => 'Yes. Our retail solutions support multiple branches, franchises, and warehouses from one centralized dashboard.',
                    ],

                    [
                        'question' => 'Can it integrate with payment gateways?',
                        'answer' => 'Absolutely. We integrate with payment gateways, accounting software, barcode systems, and third-party APIs.',
                    ],

                    [
                        'question' => 'Does the software support inventory management?',
                        'answer' => 'Yes. Inventory tracking, purchase management, supplier management, and stock alerts are built-in features.',
                    ],

                    [
                        'question' => 'Do you provide post-launch support?',
                        'answer' => 'Yes. We offer long-term maintenance, monitoring, upgrades, and dedicated technical support.',
                    ],

                ],

            ],

            [
                'id' => 7,

                'name' => 'Logistics & Transportation',

                'slug' => 'logistics-transportation',

                'icon' => 'fa-solid fa-truck-fast',

                'short_description' => 'Smart logistics software solutions for fleet management, warehouse operations, shipment tracking, and supply chain optimization.',

                'hero' => [

                    'badge' => 'Logistics Industry',

                    'title' => 'Logistics & Transportation Solutions',

                    'subtitle' => 'Optimize Supply Chains with Smart Logistics Technology',

                    'description' =>
                    'We build intelligent logistics software that streamlines fleet operations, shipment tracking, warehouse management, route optimization, and supply chain visibility.',

                    'image' => 'images/solutions/shreeza-tech-logistics-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Digitizing Logistics Operations',

                    'description' =>
                    'Modern logistics companies require real-time tracking, warehouse automation, fleet monitoring, and route optimization to reduce costs and improve customer satisfaction. Our solutions help logistics businesses operate faster and smarter.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-route',
                        'title' => 'Route Optimization',
                        'description' => 'Reducing delivery time while minimizing transportation costs.',
                    ],

                    [
                        'icon' => 'fa-solid fa-truck',
                        'title' => 'Fleet Monitoring',
                        'description' => 'Tracking vehicles, drivers, fuel usage, and maintenance schedules.',
                    ],

                    [
                        'icon' => 'fa-solid fa-boxes-stacked',
                        'title' => 'Warehouse Management',
                        'description' => 'Managing inventory, stock movement, and warehouse operations efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-location-dot',
                        'title' => 'Shipment Tracking',
                        'description' => 'Providing customers with accurate real-time shipment status.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-truck-fast',
                        'title' => 'Fleet Management',
                        'description' => 'Monitor vehicles, drivers, maintenance, and fuel consumption.',
                    ],

                    [
                        'icon' => 'fa-solid fa-boxes-stacked',
                        'title' => 'Warehouse Management System',
                        'description' => 'Automate warehouse operations, inventory, and order fulfillment.',
                    ],

                    [
                        'icon' => 'fa-solid fa-route',
                        'title' => 'Route Planning',
                        'description' => 'Optimize delivery routes to reduce time and operational costs.',
                    ],

                    [
                        'icon' => 'fa-solid fa-location-crosshairs',
                        'title' => 'GPS Tracking',
                        'description' => 'Track shipments and vehicles in real time using GPS technology.',
                    ],

                    [
                        'icon' => 'fa-solid fa-file-invoice',
                        'title' => 'Delivery Management',
                        'description' => 'Manage orders, invoices, deliveries, and proof of delivery digitally.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Analytics Dashboard',
                        'description' => 'Monitor logistics KPIs, fleet utilization, and operational performance.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-location-arrow',
                        'title' => 'Live Vehicle Tracking',
                        'description' => 'Monitor fleet locations in real time.',
                    ],

                    [
                        'icon' => 'fa-solid fa-gauge-high',
                        'title' => 'Performance Analytics',
                        'description' => 'Measure fleet efficiency and delivery performance.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud Platform',
                        'description' => 'Access logistics operations from anywhere.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bell',
                        'title' => 'Real-Time Alerts',
                        'description' => 'Receive instant alerts for delays, maintenance, and deliveries.',
                    ],

                    [
                        'icon' => 'fa-solid fa-plug',
                        'title' => 'Third-Party Integration',
                        'description' => 'Integrate with ERP, GPS devices, payment gateways, and APIs.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Enterprise Security',
                        'description' => 'Secure logistics and shipment data with enterprise-grade protection.',
                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'Node.js',
                        'icon' => 'fa-brands fa-node-js',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Business Analysis',
                        'description' => 'Understand logistics workflows and operational requirements.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Planning',
                        'description' => 'Define architecture, integrations, and implementation roadmap.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'Design',
                        'description' => 'Create intuitive dashboards for logistics teams.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Build scalable logistics software with real-time capabilities.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Testing',
                        'description' => 'Ensure performance, security, and operational reliability.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Deployment & Support',
                        'description' => 'Deploy the solution and provide continuous improvements.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you build custom fleet management software?',
                        'answer' => 'Yes. We develop custom logistics and fleet management platforms tailored to your business.',
                    ],

                    [
                        'question' => 'Does the system support GPS tracking?',
                        'answer' => 'Yes. We integrate GPS tracking for vehicles and shipments in real time.',
                    ],

                    [
                        'question' => 'Can multiple warehouses be managed?',
                        'answer' => 'Yes. Our solutions support multiple warehouses, inventory locations, and distribution centers.',
                    ],

                    [
                        'question' => 'Can the software integrate with ERP systems?',
                        'answer' => 'Absolutely. We integrate with ERP, accounting software, GPS providers, and third-party APIs.',
                    ],

                    [
                        'question' => 'Do you provide long-term maintenance?',
                        'answer' => 'Yes. We offer continuous support, upgrades, and monitoring after deployment.',
                    ],

                ],

            ],

            [
                'id' => 8,

                'name' => 'Hospitality & Hotels',

                'slug' => 'hospitality-hotels',

                'icon' => 'fa-solid fa-hotel',

                'short_description' => 'Smart hospitality software solutions for hotels, resorts, restaurants, and hospitality businesses.',

                'hero' => [

                    'badge' => 'Hospitality Industry',

                    'title' => 'Hospitality Software Solutions',

                    'subtitle' => 'Deliver Exceptional Guest Experiences with Smart Technology',

                    'description' =>
                    'We develop modern hospitality software that streamlines hotel operations, online bookings, guest management, billing, housekeeping, and customer engagement while enhancing operational efficiency.',

                    'image' => 'images/solutions/shreeza-tech-hospitality-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Digital Hospitality Management',

                    'description' =>
                    'Hotels and hospitality businesses require centralized systems to manage reservations, guests, housekeeping, restaurant operations, billing, and customer satisfaction. Our custom software improves efficiency while delivering outstanding guest experiences.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-calendar-check',
                        'title' => 'Booking Management',
                        'description' => 'Managing reservations across multiple channels without overbooking.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bed',
                        'title' => 'Room Availability',
                        'description' => 'Keeping room inventory updated in real time.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Guest Experience',
                        'description' => 'Providing personalized services and seamless customer interactions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Operational Efficiency',
                        'description' => 'Managing housekeeping, staff, billing, and reporting efficiently.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-hotel',
                        'title' => 'Hotel Management System',
                        'description' => 'Complete hotel operations including reservations, billing, and guest management.',
                    ],

                    [
                        'icon' => 'fa-solid fa-calendar-days',
                        'title' => 'Online Booking Platform',
                        'description' => 'Enable direct room bookings with secure online payments.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bed',
                        'title' => 'Room Management',
                        'description' => 'Track room availability, housekeeping, and maintenance schedules.',
                    ],

                    [
                        'icon' => 'fa-solid fa-utensils',
                        'title' => 'Restaurant Management',
                        'description' => 'Manage restaurant orders, billing, inventory, and kitchen operations.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',
                        'title' => 'Billing & Payments',
                        'description' => 'Automate invoices, taxes, and payment processing.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Business Analytics',
                        'description' => 'Monitor occupancy rates, revenue, and operational performance.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Mobile Booking',
                        'description' => 'Guests can book rooms from any device.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud-Based Platform',
                        'description' => 'Manage hotel operations from anywhere.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bell',
                        'title' => 'Instant Notifications',
                        'description' => 'Booking confirmations, reminders, and guest notifications.',
                    ],

                    [
                        'icon' => 'fa-solid fa-lock',
                        'title' => 'Secure Payments',
                        'description' => 'Enterprise-grade payment security and data protection.',
                    ],

                    [
                        'icon' => 'fa-solid fa-plug',
                        'title' => 'Third-Party Integrations',
                        'description' => 'Integrate with booking platforms, payment gateways, and CRMs.',
                    ],

                    [
                        'icon' => 'fa-solid fa-star',
                        'title' => 'Guest Experience',
                        'description' => 'Improve customer satisfaction with personalized hospitality services.',
                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Requirement Analysis',
                        'description' => 'Understand hotel operations and guest service requirements.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Planning',
                        'description' => 'Define workflows and software architecture.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'UI/UX Design',
                        'description' => 'Create intuitive dashboards for guests and hotel staff.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Develop secure and scalable hospitality software.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Testing',
                        'description' => 'Ensure quality, security, and smooth operations.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Deployment & Support',
                        'description' => 'Launch the solution with continuous maintenance and support.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you build a custom hotel management system?',
                        'answer' => 'Yes. We develop fully customized hospitality software tailored to your business.',
                    ],

                    [
                        'question' => 'Can guests book rooms online?',
                        'answer' => 'Yes. We integrate secure online booking and payment systems.',
                    ],

                    [
                        'question' => 'Does the software support multiple hotel branches?',
                        'answer' => 'Yes. Multi-property management is fully supported.',
                    ],

                    [
                        'question' => 'Can it integrate with OTAs and payment gateways?',
                        'answer' => 'Absolutely. We support integrations with major booking platforms and payment providers.',
                    ],

                    [
                        'question' => 'Do you provide ongoing maintenance?',
                        'answer' => 'Yes. We offer long-term maintenance, updates, and technical support.',
                    ],

                ],

            ],

            [
                'id' => 9,

                'name' => 'Travel & Tourism',

                'slug' => 'travel-tourism',

                'icon' => 'fa-solid fa-plane-departure',

                'short_description' => 'Modern travel software solutions for travel agencies, tour operators, hotels, airlines, and tourism businesses.',

                'hero' => [

                    'badge' => 'Travel Industry',

                    'title' => 'Travel & Tourism Software Solutions',

                    'subtitle' => 'Creating Seamless Travel Experiences Through Technology',

                    'description' =>
                    'We build intelligent travel software that simplifies tour bookings, hotel reservations, itinerary planning, customer management, online payments, and travel operations while delivering exceptional customer experiences.',

                    'image' => 'images/solutions/shreeza-tech-travel-tourism-software-solution.webp',

                ],

                'overview' => [

                    'title' => 'Digital Transformation for Travel Businesses',

                    'description' =>
                    'Travel businesses require integrated platforms to manage bookings, customers, payments, travel packages, and operations efficiently. Our custom travel solutions help agencies increase bookings, automate workflows, and improve customer satisfaction.',

                ],

                'challenges' => [

                    [
                        'icon' => 'fa-solid fa-calendar-check',
                        'title' => 'Booking Management',
                        'description' => 'Managing flight, hotel, and tour bookings across multiple channels.',
                    ],

                    [
                        'icon' => 'fa-solid fa-route',
                        'title' => 'Trip Planning',
                        'description' => 'Creating personalized itineraries while managing multiple travel services.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Customer Management',
                        'description' => 'Tracking travelers, inquiries, and repeat customers effectively.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',
                        'title' => 'Payment Processing',
                        'description' => 'Handling secure online payments, invoices, and refunds efficiently.',
                    ],

                ],

                'solutions' => [

                    [
                        'icon' => 'fa-solid fa-plane',
                        'title' => 'Travel Booking System',
                        'description' => 'Manage flights, hotels, tours, transportation, and travel packages.',
                    ],

                    [
                        'icon' => 'fa-solid fa-map-location-dot',
                        'title' => 'Tour Management',
                        'description' => 'Create customized tour packages with itinerary planning and scheduling.',
                    ],

                    [
                        'icon' => 'fa-solid fa-user-group',
                        'title' => 'Customer CRM',
                        'description' => 'Manage customer profiles, bookings, communications, and loyalty programs.',
                    ],

                    [
                        'icon' => 'fa-solid fa-globe',
                        'title' => 'Online Booking Portal',
                        'description' => 'Enable customers to search, compare, and book trips online.',
                    ],

                    [
                        'icon' => 'fa-solid fa-wallet',
                        'title' => 'Payment & Billing',
                        'description' => 'Automate invoices, secure payments, and financial reporting.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Business Analytics',
                        'description' => 'Track bookings, revenue, customer trends, and business growth.',
                    ],

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Mobile Booking',
                        'description' => 'Book trips anytime using mobile-friendly applications.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',
                        'title' => 'Cloud Platform',
                        'description' => 'Access travel operations securely from anywhere.',
                    ],

                    [
                        'icon' => 'fa-solid fa-language',
                        'title' => 'Multi-Language Support',
                        'description' => 'Serve international travelers with multilingual interfaces.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bell',
                        'title' => 'Instant Notifications',
                        'description' => 'Automatic booking confirmations and travel reminders.',
                    ],

                    [
                        'icon' => 'fa-solid fa-plug',
                        'title' => 'API Integrations',
                        'description' => 'Integrate with airlines, hotels, payment gateways, and travel APIs.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Secure Transactions',
                        'description' => 'Protect customer information and payment data with enterprise-grade security.',
                    ],

                ],

                'technologies' => [

                    [
                        'name' => 'Laravel',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'React',
                        'icon' => 'fa-brands fa-react',
                    ],

                    [
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'Docker',
                        'icon' => 'fa-brands fa-docker',
                    ],

                ],

                'process' => [

                    [
                        'step' => '01',
                        'title' => 'Business Consultation',
                        'description' => 'Understand your travel business model and operational requirements.',
                    ],

                    [
                        'step' => '02',
                        'title' => 'Planning & Strategy',
                        'description' => 'Design a scalable architecture and implementation roadmap.',
                    ],

                    [
                        'step' => '03',
                        'title' => 'UI/UX Design',
                        'description' => 'Create engaging experiences for travelers and administrators.',
                    ],

                    [
                        'step' => '04',
                        'title' => 'Development',
                        'description' => 'Build secure and scalable travel management software.',
                    ],

                    [
                        'step' => '05',
                        'title' => 'Testing',
                        'description' => 'Ensure quality, performance, and security before launch.',
                    ],

                    [
                        'step' => '06',
                        'title' => 'Deployment & Support',
                        'description' => 'Launch the platform with continuous maintenance and upgrades.',
                    ],

                ],

                'faqs' => [

                    [
                        'question' => 'Can you build a custom travel booking platform?',
                        'answer' => 'Yes. We develop fully customized travel portals for agencies and tour operators.',
                    ],

                    [
                        'question' => 'Can the software integrate with airlines and hotels?',
                        'answer' => 'Absolutely. We integrate with travel APIs, airlines, hotels, and booking engines.',
                    ],

                    [
                        'question' => 'Does it support online payments?',
                        'answer' => 'Yes. Secure payment gateway integration is included.',
                    ],

                    [
                        'question' => 'Can customers manage their bookings online?',
                        'answer' => 'Yes. Travelers can view, modify, and manage bookings through their dashboard.',
                    ],

                    [
                        'question' => 'Do you provide maintenance and future upgrades?',
                        'answer' => 'Yes. We provide continuous support, maintenance, monitoring, and feature enhancements.',
                    ],

                ],

            ],

        ];
    }

    public static function find(string $slug): ?array
    {
        foreach (self::all() as $solution) {

            if ($solution['slug'] === $slug) {
                return $solution;
            }
        }

        return null;
    }
}
