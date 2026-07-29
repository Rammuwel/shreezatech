<?php

namespace App\Data;

class Projects
{

    static function all(): array
    {

        return [
            [
                'id' => 1,

                'title' => 'Investo',

                'slug' => 'investo',

                'category' => 'web',

                'type' => 'Web Application',

                'client' => 'Investo Capital',

                'industry' => 'Finance',

                'duration' => '5 Months',

                'team' => '7 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/project3.jpg',

                'gallery' => [
                    'images/projects/investo/gallery-1.jpg',
                    'images/projects/investo/gallery-2.jpg',
                    'images/projects/investo/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'Investo',

                    'subtitle' => 'Smart Investment & Trading Platform',

                    'description' =>
                    'Investo is a modern fintech platform that enables investors to monitor portfolios, analyze market trends, execute secure transactions, and gain real-time financial insights through an intuitive analytics dashboard.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'Investo Capital required a secure web application for managing investments, tracking portfolios, analyzing market performance, and delivering real-time financial reports. We developed a scalable fintech platform with enterprise-grade security and an intuitive user experience.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Real-Time Market Data',
                        'description' => 'Displaying accurate market information with minimal latency.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Financial Security',
                        'description' => 'Protecting sensitive financial data and transactions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Complex Analytics',
                        'description' => 'Presenting investment insights in a simple and understandable way.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-wallet',
                        'title' => 'Portfolio Management',
                        'description' => 'Track investments, assets, and financial performance in real time.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-column',
                        'title' => 'Analytics Dashboard',
                        'description' => 'Interactive charts and reports for informed investment decisions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-arrow-right-arrow-left',
                        'title' => 'Secure Transactions',
                        'description' => 'Fast and secure money transfers with complete transaction history.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bell',
                        'title' => 'Market Alerts',
                        'description' => 'Instant notifications for market changes and portfolio updates.',
                    ],

                ],

                'features' => [

                    'Investment Portfolio',

                    'Real-Time Market Data',

                    'Advanced Analytics',

                    'Transaction History',

                    'Multi-Level Authentication',

                    'Interactive Dashboard',

                    'Responsive Design',

                    'Notification System',

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
                        'name' => 'AWS',
                        'icon' => 'fa-brands fa-aws',
                    ],

                ],

                'results' => [

                    [
                        'number' => '100K+',
                        'title' => 'Transactions Processed',
                    ],

                    [
                        'number' => '99.99%',
                        'title' => 'Platform Availability',
                    ],

                    [
                        'number' => '45%',
                        'title' => 'Faster Reporting',
                    ],

                    [
                        'number' => '96%',
                        'title' => 'Customer Satisfaction',
                    ],

                ],

                'testimonial' => [

                    'name' => 'Michael Thompson',

                    'designation' => 'CEO, Investo Capital',

                    'review' =>
                    'Shreeza delivered an exceptional fintech platform that exceeded our expectations. The dashboard is intuitive, secure, and has significantly improved how our clients manage their investments.',

                    'image' => 'images/testimonials/client3.jpeg',

                ],

                'faqs' => [

                    [
                        'question' => 'Can the platform integrate with financial APIs?',
                        'answer' => 'Yes. It supports integration with stock exchanges, banking APIs, payment gateways, and financial data providers.',
                    ],

                    [
                        'question' => 'Is customer financial data secure?',
                        'answer' => 'Absolutely. The platform uses encryption, secure authentication, role-based access, and follows industry-standard security practices.',
                    ],

                    [
                        'question' => 'Can new investment modules be added later?',
                        'answer' => 'Yes. The architecture is fully scalable and allows future feature expansion without affecting existing functionality.',
                    ],

                ],

            ],

            [
                'id' => 2,

                'title' => 'MediCare',

                'slug' => 'medicare',

                'category' => 'mobile',

                'type' => 'Patient Management',

                'client' => 'CityCare Hospital',

                'industry' => 'Healthcare',

                'duration' => '6 Months',

                'team' => '8 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/project7.jpg',

                'gallery' => [
                    'images/projects/medicare/gallery-1.jpg',
                    'images/projects/medicare/gallery-2.jpg',
                    'images/projects/medicare/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'MediCare',

                    'subtitle' => 'Smart Hospital & Patient Management System',

                    'description' =>
                    'MediCare is a comprehensive healthcare management platform designed to simplify hospital operations, improve patient care, streamline appointments, manage medical records, and enhance operational efficiency.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'CityCare Hospital needed a centralized digital platform to manage patients, doctors, appointments, billing, pharmacy, and medical records. We developed a secure healthcare solution that improves patient experience while automating hospital workflows.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-file-waveform',
                        'title' => 'Paper-Based Records',
                        'description' => 'Managing patient information manually caused delays and errors.',
                    ],

                    [
                        'icon' => 'fa-solid fa-clock',
                        'title' => 'Appointment Scheduling',
                        'description' => 'Patients experienced long waiting times due to inefficient scheduling.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Data Security',
                        'description' => 'Sensitive medical records required enterprise-grade protection.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-hospital',
                        'title' => 'Hospital Management',
                        'description' => 'Manage departments, doctors, patients, billing, and operations from one platform.',
                    ],

                    [
                        'icon' => 'fa-solid fa-calendar-check',
                        'title' => 'Appointment Booking',
                        'description' => 'Online appointment scheduling with automated reminders.',
                    ],

                    [
                        'icon' => 'fa-solid fa-notes-medical',
                        'title' => 'Electronic Medical Records',
                        'description' => 'Secure digital records accessible by authorized healthcare professionals.',
                    ],

                    [
                        'icon' => 'fa-solid fa-pills',
                        'title' => 'Pharmacy & Billing',
                        'description' => 'Integrated pharmacy inventory and billing management system.',
                    ],

                ],

                'features' => [

                    'Patient Registration',

                    'Doctor Management',

                    'Appointment Scheduling',

                    'Electronic Medical Records',

                    'Billing & Invoicing',

                    'Pharmacy Management',

                    'Laboratory Reports',

                    'Analytics Dashboard',

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
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'AWS',
                        'icon' => 'fa-brands fa-aws',
                    ],

                ],

                'results' => [

                    [
                        'number' => '65%',
                        'title' => 'Reduced Waiting Time',
                    ],

                    [
                        'number' => '99.9%',
                        'title' => 'Data Availability',
                    ],

                    [
                        'number' => '30K+',
                        'title' => 'Patient Records Managed',
                    ],

                    [
                        'number' => '97%',
                        'title' => 'Patient Satisfaction',
                    ],

                ],

                'testimonial' => [

                    'name' => 'Dr. Emily Carter',

                    'designation' => 'Medical Director, CityCare Hospital',

                    'review' =>
                    'Shreeza delivered an outstanding healthcare management solution that streamlined our daily operations and significantly improved patient care. Their professionalism and technical expertise were exceptional.',

                    'image' => 'images/testimonials/client4.png',

                ],

                'faqs' => [

                    [
                        'question' => 'Can the system manage multiple hospital branches?',
                        'answer' => 'Yes. The platform supports multi-branch hospital management from a centralized dashboard.',
                    ],

                    [
                        'question' => 'Is patient information secure?',
                        'answer' => 'Absolutely. We implement role-based access, data encryption, secure authentication, and regular backups to protect sensitive healthcare data.',
                    ],

                    [
                        'question' => 'Can it integrate with laboratory and pharmacy systems?',
                        'answer' => 'Yes. The system integrates seamlessly with laboratories, pharmacies, payment gateways, and third-party healthcare APIs.',
                    ],

                ],

            ],
            [
                'id' => 3,

                'title' => 'ShopHub',

                'slug' => 'shophub',

                'category' => 'web',

                'type' => 'Online Store',

                'client' => 'ShopHub Pvt. Ltd.',

                'industry' => 'Retail & E-Commerce',

                'duration' => '5 Months',

                'team' => '7 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/project8.jpg',

                'gallery' => [
                    'images/projects/shophub/gallery-1.jpg',
                    'images/projects/shophub/gallery-2.jpg',
                    'images/projects/shophub/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'ShopHub',

                    'subtitle' => 'Complete Multi-Vendor E-Commerce Platform',

                    'description' =>
                    'ShopHub is a scalable e-commerce solution that enables businesses to sell products online with secure payments, inventory management, order tracking, customer analytics, and an exceptional shopping experience.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'ShopHub wanted to build a modern online marketplace capable of handling thousands of products, multiple vendors, secure payments, and high customer traffic. We developed a fast, scalable, and user-friendly platform that delivers an outstanding shopping experience.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-boxes-stacked',
                        'title' => 'Large Product Catalog',
                        'description' => 'Managing thousands of products efficiently across multiple categories.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',
                        'title' => 'Secure Payments',
                        'description' => 'Ensuring safe, reliable, and fast payment processing.',
                    ],

                    [
                        'icon' => 'fa-solid fa-truck-fast',
                        'title' => 'Order Fulfillment',
                        'description' => 'Providing customers with real-time order and shipping updates.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-store',
                        'title' => 'Multi-Vendor Marketplace',
                        'description' => 'Allow vendors to manage products, inventory, and orders independently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cart-shopping',
                        'title' => 'Shopping Experience',
                        'description' => 'Fast search, smart filters, wishlist, coupons, and responsive checkout.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',
                        'title' => 'Online Payments',
                        'description' => 'Integrated Razorpay, Stripe, and PayPal payment gateways.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-column',
                        'title' => 'Admin Dashboard',
                        'description' => 'Comprehensive sales reports, customer analytics, and inventory insights.',
                    ],

                ],

                'features' => [

                    'Product Management',

                    'Vendor Dashboard',

                    'Shopping Cart',

                    'Wishlist',

                    'Coupon Management',

                    'Order Tracking',

                    'Payment Gateway',

                    'Customer Reviews',

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
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'AWS',
                        'icon' => 'fa-brands fa-aws',
                    ],

                ],

                'results' => [

                    [
                        'number' => '150K+',
                        'title' => 'Products Listed',
                    ],

                    [
                        'number' => '99.9%',
                        'title' => 'Platform Uptime',
                    ],

                    [
                        'number' => '70%',
                        'title' => 'Faster Order Processing',
                    ],

                    [
                        'number' => '98%',
                        'title' => 'Customer Satisfaction',
                    ],

                ],

                'testimonial' => [

                    'name' => 'Sophia Martinez',

                    'designation' => 'Founder, ShopHub',

                    'review' =>
                    'Shreeza delivered an exceptional e-commerce platform that exceeded our expectations. The website is fast, secure, and incredibly easy to manage. Our online sales have grown significantly since launch.',

                    'image' => 'images/testimonials/client1.jpeg',

                ],

                'faqs' => [

                    [
                        'question' => 'Does the platform support multiple vendors?',
                        'answer' => 'Yes. Each vendor gets an independent dashboard to manage products, orders, and inventory.',
                    ],

                    [
                        'question' => 'Can payment gateways be customized?',
                        'answer' => 'Absolutely. We support Stripe, Razorpay, PayPal, and custom payment gateway integrations.',
                    ],

                    [
                        'question' => 'Is the platform SEO-friendly?',
                        'answer' => 'Yes. The platform is optimized for SEO with clean URLs, metadata management, and high performance.',
                    ],

                ],

            ],

            [
                'id' => 4,

                'title' => 'QuickPay',

                'slug' => 'quickpay',

                'category' => 'mobile',

                'type' => 'Mobile Application',

                'client' => 'QuickPay Solutions',

                'industry' => 'FinTech',

                'duration' => '4 Months',

                'team' => '6 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/project5.jpg',

                'gallery' => [
                    'images/projects/quickpay/gallery-1.jpg',
                    'images/projects/quickpay/gallery-2.jpg',
                    'images/projects/quickpay/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'QuickPay',

                    'subtitle' => 'Digital Wallet & Online Payment Platform',

                    'description' =>
                    'QuickPay is a secure digital wallet application that enables instant money transfers, online payments, QR code transactions, bill payments, and complete financial management from a single mobile app.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'QuickPay Solutions wanted to build a modern digital payment platform capable of processing secure transactions while providing users with a fast, reliable, and intuitive payment experience. We developed a scalable fintech application with enterprise-grade security and real-time payment processing.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-lock',
                        'title' => 'Transaction Security',
                        'description' => 'Protecting financial transactions against fraud and cyber threats.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bolt',
                        'title' => 'Real-Time Payments',
                        'description' => 'Processing thousands of transactions instantly with minimal latency.',
                    ],

                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'User Experience',
                        'description' => 'Creating a simple yet powerful interface for everyday financial operations.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-wallet',
                        'title' => 'Digital Wallet',
                        'description' => 'Store money securely and make instant online payments.',
                    ],

                    [
                        'icon' => 'fa-solid fa-qrcode',
                        'title' => 'QR Payments',
                        'description' => 'Fast QR code-based merchant and peer-to-peer payments.',
                    ],

                    [
                        'icon' => 'fa-solid fa-money-bill-transfer',
                        'title' => 'Money Transfer',
                        'description' => 'Instant bank-to-bank and wallet-to-wallet transactions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-file-invoice-dollar',
                        'title' => 'Bill Payments',
                        'description' => 'Pay utility bills, mobile recharges, and subscriptions from one place.',
                    ],

                ],

                'features' => [

                    'Digital Wallet',

                    'QR Code Payments',

                    'Money Transfer',

                    'Bank Integration',

                    'Bill Payments',

                    'Transaction History',

                    'Push Notifications',

                    'Biometric Authentication',

                ],

                'technologies' => [

                    [
                        'name' => 'Flutter',
                        'icon' => 'fa-solid fa-mobile-screen',
                    ],

                    [
                        'name' => 'Laravel API',
                        'icon' => 'fa-brands fa-laravel',
                    ],

                    [
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'Firebase',
                        'icon' => 'fa-solid fa-fire',
                    ],

                ],

                'results' => [

                    [
                        'number' => '500K+',
                        'title' => 'Transactions Processed',
                    ],

                    [
                        'number' => '99.98%',
                        'title' => 'Transaction Success Rate',
                    ],

                    [
                        'number' => '80K+',
                        'title' => 'Active Users',
                    ],

                    [
                        'number' => '99.9%',
                        'title' => 'System Availability',
                    ],

                ],

                'testimonial' => [

                    'name' => 'Daniel Roberts',

                    'designation' => 'CEO, QuickPay Solutions',

                    'review' =>
                    'Shreeza developed a highly secure and user-friendly payment platform that transformed our business. The application performs flawlessly even during peak transaction hours.',

                    'image' => 'images/testimonials/client6.jpg',

                ],

                'faqs' => [

                    [
                        'question' => 'Is QuickPay secure for financial transactions?',
                        'answer' => 'Yes. The platform implements encrypted communication, secure authentication, role-based access, and fraud prevention mechanisms.',
                    ],

                    [
                        'question' => 'Can multiple payment gateways be integrated?',
                        'answer' => 'Absolutely. We support Razorpay, Stripe, PayPal, banking APIs, and custom payment providers.',
                    ],

                    [
                        'question' => 'Does the application support Android and iOS?',
                        'answer' => 'Yes. The application is built using Flutter and runs seamlessly on both Android and iOS devices.',
                    ],

                ],

            ],

            [
                'id' => 5,

                'title' => 'Taskly',

                'slug' => 'taskly',

                'category' => 'web',

                'type' => 'Project Management',

                'client' => 'Taskly Inc.',

                'industry' => 'Software & SaaS',

                'duration' => '5 Months',

                'team' => '6 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/project6.jpg',

                'gallery' => [
                    'images/projects/taskly/gallery-1.jpg',
                    'images/projects/taskly/gallery-2.jpg',
                    'images/projects/taskly/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'Taskly',

                    'subtitle' => 'Smart Project & Team Collaboration Platform',

                    'description' =>
                    'Taskly is a cloud-based project management platform that helps teams collaborate efficiently, manage tasks, track project progress, and improve productivity through real-time communication and intelligent workflow automation.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'Taskly Inc. wanted a modern SaaS platform that enables organizations to manage projects, assign tasks, collaborate with teams, monitor deadlines, and generate productivity reports from a single dashboard.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-list-check',
                        'title' => 'Task Organization',
                        'description' => 'Managing hundreds of tasks across multiple projects efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Team Collaboration',
                        'description' => 'Providing seamless communication between distributed teams.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Project Tracking',
                        'description' => 'Monitoring deadlines, milestones, and project performance in real time.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-diagram-project',
                        'title' => 'Project Workspace',
                        'description' => 'Manage unlimited projects with dedicated workspaces and dashboards.',
                    ],

                    [
                        'icon' => 'fa-solid fa-list-check',
                        'title' => 'Task Management',
                        'description' => 'Create, assign, prioritize, and monitor tasks with deadlines.',
                    ],

                    [
                        'icon' => 'fa-solid fa-comments',
                        'title' => 'Team Collaboration',
                        'description' => 'Real-time discussions, comments, mentions, and file sharing.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-column',
                        'title' => 'Analytics & Reports',
                        'description' => 'Track team productivity and project progress with interactive reports.',
                    ],

                ],

                'features' => [

                    'Project Dashboard',

                    'Task Management',

                    'Kanban Board',

                    'Calendar View',

                    'File Sharing',

                    'Real-Time Notifications',

                    'Team Chat',

                    'Productivity Reports',

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

                'results' => [

                    [
                        'number' => '45%',
                        'title' => 'Productivity Increase',
                    ],

                    [
                        'number' => '10K+',
                        'title' => 'Projects Managed',
                    ],

                    [
                        'number' => '50K+',
                        'title' => 'Tasks Completed',
                    ],

                    [
                        'number' => '99.9%',
                        'title' => 'Platform Uptime',
                    ],

                ],

                'testimonial' => [

                    'name' => 'Jessica Morgan',

                    'designation' => 'Operations Director, Taskly Inc.',

                    'review' =>
                    'Shreeza delivered a modern SaaS platform that completely transformed how our teams collaborate. The intuitive interface, real-time updates, and reporting tools have significantly improved our productivity.',

                    'image' => 'images/testimonials/client5.jpg',

                ],

                'faqs' => [

                    [
                        'question' => 'Can Taskly support multiple teams and organizations?',
                        'answer' => 'Yes. The platform supports multiple organizations, departments, and unlimited team members with role-based access.',
                    ],

                    [
                        'question' => 'Does it provide real-time notifications?',
                        'answer' => 'Yes. Users receive instant notifications for task assignments, comments, deadlines, and project updates.',
                    ],

                    [
                        'question' => 'Can it integrate with third-party tools?',
                        'answer' => 'Absolutely. Taskly can integrate with Slack, Google Workspace, Microsoft Teams, GitHub, Jira, and many other business applications.',
                    ],

                ],

            ],
            [
                'id' => 6,

                'title' => 'EduNova',

                'slug' => 'Education',

                'category' => 'mobile',

                'type' => 'Learning Platform',

                'client' => 'EduNova Academy',

                'industry' => 'Education',

                'duration' => '6 Months',

                'team' => '8 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/project9.png',

                'gallery' => [
                    'images/projects/edunova/gallery-1.jpg',
                    'images/projects/edunova/gallery-2.jpg',
                    'images/projects/edunova/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'EduNova',

                    'subtitle' => 'AI-Powered Learning Management Platform',

                    'description' =>
                    'EduNova is an intelligent Learning Management System designed to deliver personalized education experiences through AI-powered recommendations, interactive courses, live classes, assessments, and student performance analytics.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'EduNova Academy required a modern LMS capable of managing students, instructors, online courses, live classes, assignments, quizzes, certifications, and AI-driven learning recommendations. We built a scalable platform that enhances digital education for institutions and learners worldwide.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-user-graduate',
                        'title' => 'Student Engagement',
                        'description' => 'Keeping students motivated and actively engaged during online learning.',
                    ],

                    [
                        'icon' => 'fa-solid fa-video',
                        'title' => 'Virtual Classrooms',
                        'description' => 'Providing a seamless experience for live classes and recorded lectures.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Learning Analytics',
                        'description' => 'Tracking student progress and measuring learning outcomes effectively.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-book-open',
                        'title' => 'Course Management',
                        'description' => 'Create, organize, and manage online courses with ease.',
                    ],

                    [
                        'icon' => 'fa-solid fa-brain',
                        'title' => 'AI Recommendations',
                        'description' => 'Suggest personalized learning paths based on student performance.',
                    ],

                    [
                        'icon' => 'fa-solid fa-video',
                        'title' => 'Live Classes',
                        'description' => 'Integrated virtual classrooms with recordings and attendance tracking.',
                    ],

                    [
                        'icon' => 'fa-solid fa-file-circle-check',
                        'title' => 'Assessments & Certifications',
                        'description' => 'Conduct quizzes, assignments, exams, and issue digital certificates.',
                    ],

                ],

                'features' => [

                    'Student Dashboard',

                    'Instructor Panel',

                    'Course Management',

                    'Live Video Classes',

                    'Assignments & Quizzes',

                    'AI Learning Recommendations',

                    'Progress Tracking',

                    'Digital Certificates',

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
                        'name' => 'AWS',
                        'icon' => 'fa-brands fa-aws',
                    ],

                ],

                'results' => [

                    [
                        'number' => '25K+',
                        'title' => 'Active Students',
                    ],

                    [
                        'number' => '1,200+',
                        'title' => 'Courses Published',
                    ],

                    [
                        'number' => '95%',
                        'title' => 'Course Completion Rate',
                    ],

                    [
                        'number' => '99.9%',
                        'title' => 'Platform Availability',
                    ],

                ],

                'testimonial' => [

                    'name' => 'Sarah Wilson',

                    'designation' => 'Director, EduNova Academy',

                    'review' =>
                    'Shreeza delivered an outstanding learning platform that transformed our online education system. The AI-powered recommendations and intuitive interface have significantly improved student engagement and learning outcomes.',

                    'image' => 'images/testimonials/client2.jpg',

                ],

                'faqs' => [

                    [
                        'question' => 'Can instructors create unlimited courses?',
                        'answer' => 'Yes. Instructors can create, update, and manage unlimited courses, lessons, quizzes, and assignments.',
                    ],

                    [
                        'question' => 'Does EduNova support live online classes?',
                        'answer' => 'Absolutely. The platform integrates with popular video conferencing services and supports live classes with recordings.',
                    ],

                    [
                        'question' => 'Can the platform generate certificates automatically?',
                        'answer' => 'Yes. Digital certificates are automatically generated after successful course completion and assessment.',
                    ],

                ],

            ],
            [
                'id' => 7,

                'title' => 'Tosty',

                'slug' => 'tosty',

                'category' => 'mobile',

                'type' => 'Restaurant Management Platform',

                'client' => 'Tosty Foods',

                'industry' => 'Hospitality',

                'duration' => '5 Months',

                'team' => '7 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/resto.png',

                'gallery' => [
                    'images/projects/tosty/gallery-1.jpg',
                    'images/projects/tosty/gallery-2.jpg',
                    'images/projects/tosty/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'Tosty',

                    'subtitle' => 'Restaurant Management & Online Food Ordering Platform',

                    'description' =>
                    'Tosty is an all-in-one restaurant management solution that streamlines online ordering, table reservations, kitchen operations, billing, inventory management, and customer engagement through a modern digital platform.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'Tosty Foods wanted a digital platform to simplify restaurant operations while providing customers with a seamless online ordering experience. We developed a scalable restaurant management system with integrated food delivery, POS, inventory, and analytics.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-utensils',
                        'title' => 'Order Management',
                        'description' => 'Handling dine-in, takeaway, and online orders from multiple channels efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-warehouse',
                        'title' => 'Inventory Tracking',
                        'description' => 'Managing ingredients and reducing food wastage through real-time inventory updates.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Customer Experience',
                        'description' => 'Delivering faster service while improving customer satisfaction and loyalty.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-cart-shopping',
                        'title' => 'Online Food Ordering',
                        'description' => 'Customers can browse menus, customize meals, and place orders online.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cash-register',
                        'title' => 'POS System',
                        'description' => 'Modern point-of-sale solution with integrated billing and payment processing.',
                    ],

                    [
                        'icon' => 'fa-solid fa-clipboard-list',
                        'title' => 'Kitchen Management',
                        'description' => 'Real-time order tracking and kitchen workflow optimization.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-pie',
                        'title' => 'Business Analytics',
                        'description' => 'Track sales, customer behavior, inventory, and restaurant performance.',
                    ],

                ],

                'features' => [

                    'Online Ordering',

                    'Table Reservation',

                    'POS Billing',

                    'Kitchen Dashboard',

                    'Inventory Management',

                    'Delivery Tracking',

                    'Customer Loyalty Program',

                    'Sales Analytics',

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

                'results' => [

                    [
                        'number' => '60%',
                        'title' => 'Faster Order Processing',
                    ],

                    [
                        'number' => '35%',
                        'title' => 'Increase in Online Orders',
                    ],

                    [
                        'number' => '25%',
                        'title' => 'Reduction in Food Waste',
                    ],

                    [
                        'number' => '98%',
                        'title' => 'Customer Satisfaction',
                    ],

                ],

                'testimonial' => [

                    'name' => 'Olivia Bennett',

                    'designation' => 'Owner, Tosty Foods',

                    'review' =>
                    'Shreeza built a fantastic restaurant management platform that completely modernized our operations. Online orders increased dramatically, and our staff can now manage everything from one dashboard.',

                    'image' => 'images/testimonials/client5.jpg',

                ],

                'faqs' => [

                    [
                        'question' => 'Can the platform manage multiple restaurant branches?',
                        'answer' => 'Yes. It supports centralized management of multiple restaurant locations with branch-specific dashboards.',
                    ],

                    [
                        'question' => 'Does it integrate with payment gateways?',
                        'answer' => 'Absolutely. The system supports Razorpay, Stripe, PayPal, UPI, and custom payment integrations.',
                    ],

                    [
                        'question' => 'Can customers track their orders in real time?',
                        'answer' => 'Yes. Customers receive live order status updates from preparation to delivery.',
                    ],

                ],

            ],
            [
                'id' => 8,

                'title' => 'EstatePro',

                'slug' => 'estatepro',

                'category' => 'web',

                'type' => 'Property Management Platform',

                'client' => 'EstatePro Realty',

                'industry' => 'Real Estate',

                'duration' => '6 Months',

                'team' => '8 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/property.png',

                'gallery' => [
                    'images/projects/estatepro/gallery-1.jpg',
                    'images/projects/estatepro/gallery-2.jpg',
                    'images/projects/estatepro/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'EstatePro',

                    'subtitle' => 'Modern Property Management & Real Estate Platform',

                    'description' =>
                    'EstatePro is a complete real estate solution that simplifies property listing, lead management, virtual property tours, agent collaboration, online bookings, and customer relationship management.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'EstatePro Realty wanted a digital platform that connects buyers, sellers, agents, and property managers while simplifying the entire property management lifecycle. We built a scalable solution with advanced search, virtual tours, CRM integration, and analytics.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-building',
                        'title' => 'Property Management',
                        'description' => 'Managing thousands of residential and commercial property listings efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Lead Tracking',
                        'description' => 'Tracking and nurturing property inquiries from multiple channels.',
                    ],

                    [
                        'icon' => 'fa-solid fa-map-location-dot',
                        'title' => 'Property Discovery',
                        'description' => 'Helping buyers quickly find relevant properties using intelligent search.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-house',
                        'title' => 'Property Listings',
                        'description' => 'Advanced listing management with images, videos, pricing, and property details.',
                    ],

                    [
                        'icon' => 'fa-solid fa-magnifying-glass-location',
                        'title' => 'Smart Search',
                        'description' => 'Search properties using location, budget, amenities, and property type.',
                    ],

                    [
                        'icon' => 'fa-solid fa-vr-cardboard',
                        'title' => 'Virtual Property Tours',
                        'description' => 'Allow customers to explore properties remotely through virtual tours.',
                    ],

                    [
                        'icon' => 'fa-solid fa-address-book',
                        'title' => 'Lead CRM',
                        'description' => 'Manage customer inquiries, appointments, and follow-ups from one dashboard.',
                    ],

                ],

                'features' => [

                    'Property Listings',

                    'Advanced Search',

                    'Interactive Maps',

                    'Virtual Tours',

                    'Agent Dashboard',

                    'Lead Management',

                    'Appointment Booking',

                    'Sales Analytics',

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
                        'name' => 'Google Maps API',
                        'icon' => 'fa-solid fa-map-location-dot',
                    ],

                ],

                'results' => [

                    [
                        'number' => '12K+',
                        'title' => 'Properties Listed',
                    ],

                    [
                        'number' => '50K+',
                        'title' => 'Qualified Leads',
                    ],

                    [
                        'number' => '99.9%',
                        'title' => 'Platform Availability',
                    ],

                    [
                        'number' => '40%',
                        'title' => 'Increase in Property Sales',
                    ],

                ],

                'testimonial' => [

                    'name' => 'William Harris',

                    'designation' => 'Managing Director, EstatePro Realty',

                    'review' =>
                    'Shreeza delivered a modern real estate platform that simplified our sales process and significantly improved customer engagement. The platform is fast, scalable, and incredibly easy to use.',

                    'image' => 'images/testimonials/client6.jpg',

                ],

                'faqs' => [

                    [
                        'question' => 'Can the platform manage multiple real estate branches?',
                        'answer' => 'Yes. EstatePro supports multiple offices, agents, and branch-specific property management.',
                    ],

                    [
                        'question' => 'Does it support Google Maps integration?',
                        'answer' => 'Absolutely. Properties can be displayed with interactive maps, nearby amenities, and location-based search.',
                    ],

                    [
                        'question' => 'Can customers schedule property visits online?',
                        'answer' => 'Yes. Buyers can book appointments directly with agents through the platform.',
                    ],

                ],

            ],

            [
                'id' => 9,

                'title' => 'E-Commerce Platform',

                'slug' => 'ecommerce-platform',

                'category' => 'web',

                'type' => 'Web Application',

                'client' => 'ShopHub',

                'industry' => 'Retail',

                'duration' => '5 Months',

                'team' => '7 Developers',

                'status' => 'Completed',

                'image' => 'images/projects/eccom.png',

                'gallery' => [
                    'images/projects/ecommerce/gallery-1.jpg',
                    'images/projects/ecommerce/gallery-2.jpg',
                    'images/projects/ecommerce/gallery-3.jpg',
                ],

                'hero' => [

                    'badge' => 'Featured Project',

                    'title' => 'E-Commerce Platform',

                    'subtitle' => 'Scalable Online Shopping Experience',

                    'description' =>
                    'A modern multi-vendor e-commerce platform featuring secure payments, inventory management, order tracking, customer analytics, and a seamless shopping experience across all devices.',

                ],

                'overview' => [

                    'title' => 'Project Overview',

                    'description' =>
                    'ShopHub needed a scalable online marketplace capable of handling thousands of products, vendors, and customers while providing a fast, secure, and user-friendly shopping experience.',

                ],

                'challenge' => [

                    [
                        'icon' => 'fa-solid fa-boxes-stacked',
                        'title' => 'Inventory Management',
                        'description' => 'Managing thousands of products across multiple vendors.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',
                        'title' => 'Secure Payments',
                        'description' => 'Ensuring safe online transactions and payment processing.',
                    ],

                    [
                        'icon' => 'fa-solid fa-truck-fast',
                        'title' => 'Order Tracking',
                        'description' => 'Providing customers with real-time shipment updates.',
                    ],

                ],

                'solution' => [

                    [
                        'icon' => 'fa-solid fa-store',
                        'title' => 'Multi-Vendor Marketplace',
                        'description' => 'Allow multiple sellers to manage their products independently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cart-shopping',
                        'title' => 'Shopping Cart',
                        'description' => 'Fast and intuitive cart with wishlist and coupon support.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',
                        'title' => 'Payment Gateway',
                        'description' => 'Integrated secure online payment systems.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Sales Dashboard',
                        'description' => 'Real-time sales reports and customer insights.',
                    ],

                ],

                'features' => [

                    'Product Management',

                    'Vendor Dashboard',

                    'Shopping Cart',

                    'Wishlist',

                    'Order Tracking',

                    'Online Payments',

                    'Inventory Management',

                    'Customer Reviews',

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
                        'name' => 'MySQL',
                        'icon' => 'fa-solid fa-database',
                    ],

                    [
                        'name' => 'AWS',
                        'icon' => 'fa-brands fa-aws',
                    ],

                ],

                'results' => [

                    [
                        'number' => '120K+',
                        'title' => 'Products Managed',
                    ],

                    [
                        'number' => '98%',
                        'title' => 'Customer Satisfaction',
                    ],

                    [
                        'number' => '60%',
                        'title' => 'Faster Order Processing',
                    ],

                    [
                        'number' => '99.9%',
                        'title' => 'Platform Uptime',
                    ],

                ],

                'testimonial' => [

                    'name' => 'Savannah Nguyen',

                    'designation' => 'Founder, ShopHub',

                    'review' =>
                    'Shreeza delivered an outstanding e-commerce platform that is fast, secure, and incredibly easy to manage. Our online sales have grown significantly since launch.',

                    'image' => 'images/testimonials/client1.jpeg',

                ],

                'faqs' => [

                    [
                        'question' => 'Can the platform support multiple vendors?',
                        'answer' => 'Yes. The marketplace supports unlimited vendors with individual dashboards.',
                    ],

                    [
                        'question' => 'Does it support online payments?',
                        'answer' => 'Yes. Stripe, Razorpay, PayPal, and other payment gateways can be integrated.',
                    ],

                    [
                        'question' => 'Is the platform mobile-friendly?',
                        'answer' => 'Absolutely. The platform is fully responsive across desktop, tablet, and mobile devices.',
                    ],

                ],

            ],
        ];
    }
}
