<?php

namespace App\Data;

class TechnologyCategories
{
    public static function all(): array
    {
        return [

            [
                'id' => 1,
                'name' => 'Frontend',
                'slug' => 'frontend',
                'icon' => 'fa-solid fa-code',
                'short_description' => 'Modern frontend technologies including React, Vue, Next.js, and Tailwind CSS for beautiful, responsive interfaces.',
                'hero' => [
                    'badge' => 'Frontend Technologies',
                    'title' => 'Modern Frontend Development',
                    'subtitle' => 'Beautiful, Fast & Responsive User Interfaces',
                    'description' => 'We build pixel-perfect, high-performance frontends using the latest frameworks and tools — delivering exceptional user experiences across every device.',
                ],
                'overview' => [
                    'title' => 'Expert Frontend Engineering',
                    'description' => 'Our frontend team specializes in building reactive, accessible, and performant user interfaces. From component libraries to full SPA architectures, we craft frontends that users love.',
                ],
                'features' => [
                    [
                        'icon' => 'fa-brands fa-react',
                        'title' => 'React & Next.js',
                        'description' => 'Component-based UIs with server-side rendering and optimal performance.',
                    ],
                    [
                        'icon' => 'fa-brands fa-vuejs',
                        'title' => 'Vue.js & Nuxt',
                        'description' => 'Progressive frameworks for building interactive, scalable web applications.',
                    ],
                    [
                        'icon' => 'fa-solid fa-wind',
                        'title' => 'Tailwind CSS',
                        'description' => 'Utility-first CSS framework for rapid, consistent, and responsive designs.',
                    ],
                    [
                        'icon' => 'fa-solid fa-bolt',
                        'title' => 'Livewire & Alpine.js',
                        'description' => 'Dynamic, reactive UIs without leaving the comfort of server-rendered PHP.',
                    ],
                    [
                        'icon' => 'fa-solid fa-mobile-screen-button',
                        'title' => 'Responsive Design',
                        'description' => 'Pixel-perfect experiences across desktop, tablet, and mobile breakpoints.',
                    ],
                    [
                        'icon' => 'fa-solid fa-gauge-high',
                        'title' => 'Performance Optimized',
                        'description' => 'Lighthouse scores above 90 with lazy loading, code splitting, and caching.',
                    ],
                ],
                'technologies' => ['React', 'Next.js', 'Vue.js', 'Nuxt', 'Tailwind CSS', 'Alpine.js', 'TypeScript', 'Vite'],
                'process' => ['Requirements & Wireframing', 'Component Architecture', 'UI Development', 'Integration & API Binding', 'Testing & QA', 'Performance Optimization', 'Deployment & Monitoring'],
                'benefits' => ['Blazing Fast Load Times', 'SEO-Optimized Output', 'Accessible by Default', 'Reusable Component Libraries', 'Responsive on All Devices', 'Future-Proof Code'],
                'faqs' => [
                    ['question' => 'Which frontend framework is best for my project?', 'answer' => 'It depends on your project needs. React is great for complex SPAs, Vue.js offers simplicity and flexibility, and Next.js provides excellent SEO and performance out of the box.'],
                    ['question' => 'Do you build responsive designs?', 'answer' => 'Absolutely. Every frontend we build is fully responsive and tested across desktop, tablet, and mobile devices.'],
                    ['question' => 'Can you integrate with any backend?', 'answer' => 'Yes. Our frontends are API-agnostic and can integrate with Laravel, Node.js, Python, or any REST/GraphQL backend.'],
                    ['question' => 'Do you provide component libraries?', 'answer' => 'Yes. We build reusable component libraries that ensure design consistency and speed up future development.'],
                ],
            ],

            [
                'id' => 2,
                'name' => 'Backend',
                'slug' => 'backend',
                'icon' => 'fa-solid fa-server',
                'short_description' => 'Robust backend technologies like Laravel, Node.js, Python, and Java for scalable, secure server-side applications.',
                'hero' => [
                    'badge' => 'Backend Technologies',
                    'title' => 'Powerful Backend Engineering',
                    'subtitle' => 'Scalable, Secure & High-Performance Server-Side Solutions',
                    'description' => 'We engineer robust backends that handle millions of requests, protect sensitive data, and scale effortlessly as your business grows.',
                ],
                'overview' => [
                    'title' => 'Enterprise-Grade Backend Development',
                    'description' => 'Our backend engineers build secure, scalable APIs, microservices, and server-side applications using proven frameworks and cloud-native architectures.',
                ],
                'features' => [
                    [
                        'icon' => 'fa-brands fa-laravel',
                        'title' => 'Laravel',
                        'description' => 'Elegant PHP framework with powerful ORM, queues, and ecosystem tools.',
                    ],
                    [
                        'icon' => 'fa-brands fa-node-js',
                        'title' => 'Node.js & Express',
                        'description' => 'Event-driven, non-blocking architecture for real-time applications and APIs.',
                    ],
                    [
                        'icon' => 'fa-brands fa-python',
                        'title' => 'Python & Django',
                        'description' => 'Versatile language with robust frameworks for AI, automation, and web services.',
                    ],
                    [
                        'icon' => 'fa-solid fa-leaf',
                        'title' => 'API Development',
                        'description' => 'RESTful and GraphQL APIs designed for performance, security, and developer experience.',
                    ],
                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Security First',
                        'description' => 'Authentication, authorization, encryption, and protection against OWASP top 10 threats.',
                    ],
                    [
                        'icon' => 'fa-solid fa-database',
                        'title' => 'Database Optimization',
                        'description' => 'Efficient queries, indexing strategies, and caching for lightning-fast data access.',
                    ],
                ],
                'technologies' => ['Laravel', 'Livewire', 'Node.js', 'Express', 'Python', 'Django', 'PHP', 'Java', '.NET', 'Spring Boot', 'Go', 'NestJS'],
                'process' => ['System Architecture Design', 'API Contract Definition', 'Core Development', 'Database Design & Optimization', 'Security Audit', 'Performance Testing', 'Deployment & Scaling'],
                'benefits' => ['Highly Scalable Architecture', 'Enterprise-Grade Security', 'Optimized Database Performance', 'Comprehensive API Documentation', 'Robust Error Handling', 'Cloud-Native Deployment'],
                'faqs' => [
                    ['question' => 'Which backend technology do you recommend?', 'answer' => 'Laravel is our top choice for most web applications due to its elegant syntax, rich ecosystem, and excellent performance. Node.js is ideal for real-time apps, and Python excels in AI/ML integrations.'],
                    ['question' => 'How do you ensure API security?', 'answer' => 'We implement JWT/OAuth authentication, rate limiting, input validation, SQL injection prevention, CORS policies, and regular security audits.'],
                    ['question' => 'Can you build microservices architectures?', 'answer' => 'Yes. We design and implement microservices using Docker, Kubernetes, message queues, and API gateways for maximum scalability.'],
                    ['question' => 'Do you provide API documentation?', 'answer' => 'Absolutely. We document all APIs using Swagger/OpenAPI standards, making integration easy for frontend and third-party developers.'],
                ],
            ],

            [
                'id' => 3,
                'name' => 'Mobile',
                'slug' => 'mobile',
                'icon' => 'fa-solid fa-mobile-screen-button',
                'short_description' => 'Cross-platform and native mobile development with Flutter, React Native, Kotlin, and Swift.',
                'hero' => [
                    'badge' => 'Mobile Technologies',
                    'title' => 'Exceptional Mobile Applications',
                    'subtitle' => 'Native Performance. Cross-Platform Efficiency.',
                    'description' => 'We build beautiful, high-performance mobile apps for iOS and Android using modern frameworks — delivering native-quality experiences with faster development cycles.',
                ],
                'overview' => [
                    'title' => 'Professional Mobile App Development',
                    'description' => 'From MVP to enterprise-grade applications, our mobile team delivers polished, performant apps that engage users and drive business growth on both major platforms.',
                ],
                'features' => [
                    [
                        'icon' => 'fa-brands fa-flutter',
                        'title' => 'Flutter',
                        'description' => 'Google\'s UI toolkit for natively compiled applications across mobile, web, and desktop.',
                    ],
                    [
                        'icon' => 'fa-brands fa-react',
                        'title' => 'React Native',
                        'description' => 'Build native mobile apps using React with hot-reload and a rich component ecosystem.',
                    ],
                    [
                        'icon' => 'fa-brands fa-android',
                        'title' => 'Android (Kotlin)',
                        'description' => 'Native Android development with Kotlin for maximum performance and platform integration.',
                    ],
                    [
                        'icon' => 'fa-brands fa-apple',
                        'title' => 'iOS (Swift)',
                        'description' => 'Premium iOS applications built with Swift, SwiftUI, and native Apple frameworks.',
                    ],
                    [
                        'icon' => 'fa-solid fa-bell',
                        'title' => 'Push Notifications',
                        'description' => 'Engage users with targeted push notifications via Firebase, APNs, and OneSignal.',
                    ],
                    [
                        'icon' => 'fa-solid fa-cloud-arrow-up',
                        'title' => 'Cloud Sync',
                        'description' => 'Real-time data synchronization, offline support, and secure cloud storage integration.',
                    ],
                ],
                'technologies' => ['Flutter', 'React Native', 'Kotlin', 'Swift', 'Firebase', 'Dart', 'TypeScript', 'SQLite'],
                'process' => ['Idea Validation & Planning', 'UI/UX Design', 'Prototype & MVP', 'App Development', 'Testing & QA', 'App Store Deployment', 'Ongoing Maintenance'],
                'benefits' => ['Native-Quality Performance', 'Single Codebase for Both Platforms', 'Faster Time to Market', 'Offline Capabilities', 'Push Notification Support', 'App Store Optimization'],
                'faqs' => [
                    ['question' => 'Should I choose Flutter or React Native?', 'answer' => 'Both are excellent. Flutter offers superior performance and UI consistency, while React Native has a larger ecosystem and easier web-to-mobile transition. We recommend based on your specific project needs.'],
                    ['question' => 'Can you publish the app on both stores?', 'answer' => 'Yes. We handle the entire deployment process including App Store and Google Play submission, store listing optimization, and ongoing updates.'],
                    ['question' => 'Do you develop native apps too?', 'answer' => 'Absolutely. For projects requiring maximum platform-specific performance or hardware access, we build native apps using Kotlin (Android) and Swift (iOS).'],
                    ['question' => 'Can the app work offline?', 'answer' => 'Yes. We implement local data storage, offline-first architectures, and background sync to ensure your app works seamlessly without an internet connection.'],
                ],
            ],

            [
                'id' => 4,
                'name' => 'Database',
                'slug' => 'database',
                'icon' => 'fa-solid fa-database',
                'short_description' => 'Relational and NoSQL database solutions including MySQL, PostgreSQL, MongoDB, and cloud databases.',
                'hero' => [
                    'badge' => 'Database Technologies',
                    'title' => 'Reliable Database Engineering',
                    'subtitle' => 'Optimized Data Architecture for Every Workload',
                    'description' => 'We design, optimize, and manage database systems that ensure data integrity, blazing-fast queries, and seamless scalability for applications of any size.',
                ],
                'overview' => [
                    'title' => 'Expert Database Design & Management',
                    'description' => 'Our database engineers architect efficient data models, write optimized queries, implement caching strategies, and ensure high availability for your most critical business data.',
                ],
                'features' => [
                    [
                        'icon' => 'fa-solid fa-database',
                        'title' => 'MySQL & MariaDB',
                        'description' => 'Reliable relational databases with proven performance, replication, and ecosystem support.',
                    ],
                    [
                        'icon' => 'fa-solid fa-database',
                        'title' => 'PostgreSQL',
                        'description' => 'Advanced open-source database with JSON support, full-text search, and ACID compliance.',
                    ],
                    [
                        'icon' => 'fa-solid fa-leaf',
                        'title' => 'MongoDB',
                        'description' => 'Flexible NoSQL document database for rapid development and scalable data storage.',
                    ],
                    [
                        'icon' => 'fa-solid fa-fire',
                        'title' => 'Firebase & Supabase',
                        'description' => 'Real-time databases with authentication, storage, and serverless backend capabilities.',
                    ],
                    [
                        'icon' => 'fa-solid fa-gauge-high',
                        'title' => 'Query Optimization',
                        'description' => 'Index tuning, query profiling, and execution plan analysis for maximum performance.',
                    ],
                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Data Security',
                        'description' => 'Encryption at rest and in transit, backup strategies, and disaster recovery planning.',
                    ],
                ],
                'technologies' => ['MySQL', 'PostgreSQL', 'MongoDB', 'MariaDB', 'SQLite', 'Redis', 'SQL Server', 'Firebase', 'Supabase'],
                'process' => ['Requirement Analysis', 'Data Modeling', 'Schema Design', 'Implementation & Migration', 'Query Optimization', 'Backup & Security Setup', 'Monitoring & Tuning'],
                'benefits' => ['Optimized Query Performance', 'High Availability & Replication', 'Automated Backups', 'Disaster Recovery Planning', 'Scalable Data Architecture', 'Cost-Effective Storage'],
                'faqs' => [
                    ['question' => 'Which database should I use for my application?', 'answer' => 'MySQL is ideal for structured data and web applications. PostgreSQL offers advanced features like JSON and full-text search. MongoDB works best for flexible, document-based data models.'],
                    ['question' => 'How do you ensure database performance?', 'answer' => 'We use indexing strategies, query optimization, connection pooling, caching layers (Redis/Memcached), and regular performance monitoring to ensure fast data access.'],
                    ['question' => 'Can you migrate my existing database?', 'answer' => 'Yes. We safely migrate databases between systems with minimal downtime, data validation, and rollback planning.'],
                    ['question' => 'Do you provide database maintenance?', 'answer' => 'Yes. We offer ongoing monitoring, backup management, performance tuning, security patching, and disaster recovery support.'],
                ],
            ],

            [
                'id' => 5,
                'name' => 'Cloud & DevOps',
                'slug' => 'cloud-devops',
                'icon' => 'fa-solid fa-cloud',
                'short_description' => 'Cloud infrastructure, CI/CD, containerization, and DevOps automation with AWS, Azure, Docker, and Kubernetes.',
                'hero' => [
                    'badge' => 'Cloud & DevOps',
                    'title' => 'Cloud Infrastructure & DevOps',
                    'subtitle' => 'Automate, Deploy & Scale with Confidence',
                    'description' => 'We design and manage cloud infrastructure that ensures high availability, security, and cost efficiency — with automated CI/CD pipelines that accelerate delivery.',
                ],
                'overview' => [
                    'title' => 'Modern Cloud Operations',
                    'description' => 'Our DevOps engineers implement infrastructure-as-code, containerization, automated testing, and continuous deployment — enabling your team to ship faster with confidence.',
                ],
                'features' => [
                    [
                        'icon' => 'fa-brands fa-aws',
                        'title' => 'Amazon Web Services',
                        'description' => 'Full-stack cloud solutions including EC2, S3, RDS, Lambda, and managed services.',
                    ],
                    [
                        'icon' => 'fa-brands fa-microsoft',
                        'title' => 'Microsoft Azure',
                        'description' => 'Enterprise cloud platform with integrated DevOps, AI, and hybrid cloud capabilities.',
                    ],
                    [
                        'icon' => 'fa-solid fa-circle-nodes',
                        'title' => 'Docker & Kubernetes',
                        'description' => 'Containerization and orchestration for consistent, scalable application deployment.',
                    ],
                    [
                        'icon' => 'fa-solid fa-arrows-rotate',
                        'title' => 'CI/CD Pipelines',
                        'description' => 'Automated build, test, and deployment pipelines using GitHub Actions, GitLab CI, and Jenkins.',
                    ],
                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Cloud Security',
                        'description' => 'IAM policies, VPC configuration, encryption, and compliance monitoring.',
                    ],
                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Monitoring & Observability',
                        'description' => 'Real-time monitoring, logging, alerting, and performance dashboards.',
                    ],
                ],
                'technologies' => ['AWS', 'Azure', 'Google Cloud', 'Docker', 'Kubernetes', 'GitHub Actions', 'Terraform', 'Linux'],
                'process' => ['Infrastructure Assessment', 'Architecture Design', 'Infrastructure as Code', 'CI/CD Setup', 'Security Configuration', 'Monitoring Implementation', 'Ongoing Optimization'],
                'benefits' => ['99.9% Uptime Guarantee', 'Automated Deployments', 'Infrastructure as Code', 'Cost Optimization', 'Auto-Scaling', '24/7 Monitoring'],
                'faqs' => [
                    ['question' => 'Which cloud provider do you recommend?', 'answer' => 'AWS is our primary recommendation for most projects due to its mature ecosystem and comprehensive services. Azure is ideal for Microsoft-centric organizations, and GCP excels in data analytics and AI workloads.'],
                    ['question' => 'What is infrastructure as code?', 'answer' => 'Infrastructure as Code (IaC) means managing and provisioning cloud resources through configuration files rather than manual processes. We use Terraform and CloudFormation for reliable, repeatable infrastructure.'],
                    ['question' => 'Can you containerize existing applications?', 'answer' => 'Yes. We containerize legacy and modern applications using Docker, set up orchestration with Kubernetes, and create optimized CI/CD pipelines for continuous delivery.'],
                    ['question' => 'Do you provide ongoing cloud management?', 'answer' => 'Absolutely. We offer continuous monitoring, cost optimization, security patching, backup management, and 24/7 incident response for your cloud infrastructure.'],
                ],
            ],

        ];
    }

    public static function find(string $slug): ?array
    {
        foreach (self::all() as $category) {
            if ($category['slug'] === $slug) {
                return $category;
            }
        }

        return null;
    }
}
