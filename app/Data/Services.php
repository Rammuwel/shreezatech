<?php

namespace App\Data;

class Services
{
    public static function all(): array
    {
        return [

            [
                'id' => 1,

                'name' => 'Web Development',

                'slug' => 'web-development',

                'icon' => 'fa-solid fa-code',

                'short_description' =>
                'High-performance websites and web applications built with modern technologies.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'Custom Web Development Services',

                    'subtitle' => 'Building Fast, Secure & Scalable Web Applications',

                    'description' =>
                    'We design and develop high-performance websites, business portals, enterprise systems, and custom web applications tailored to your business goals.',

                    'image' => 'images/services/web-development.png',

                ],

                'overview' => [

                    'title' => 'Professional Web Development',

                    'description' =>
                    'Our experienced developers build secure, scalable, and SEO-friendly web applications using modern technologies like Laravel, Livewire, React, Vue, and cloud infrastructure.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-mobile-screen',

                        'title' => 'Responsive Design',

                        'description' => 'Optimized for every device.'
                    ],

                    [
                        'icon' => 'fa-solid fa-gauge-high',

                        'title' => 'High Performance',

                        'description' => 'Lightning-fast loading speed.'
                    ],

                    [
                        'icon' => 'fa-solid fa-lock',

                        'title' => 'Secure',

                        'description' => 'Enterprise-level security.'
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',

                        'title' => 'SEO Friendly',

                        'description' => 'Built for better rankings.'
                    ],

                    [
                        'icon' => 'fa-solid fa-code-branch',

                        'title' => 'Scalable',

                        'description' => 'Easy to scale as your business grows.'
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',

                        'title' => 'Cloud Ready',

                        'description' => 'Deploy anywhere.'
                    ],

                ],

                'technologies' => [

                    'Laravel',

                    'Livewire',

                    'React',

                    'Vue',

                    'MySQL',

                    'Redis',

                    'Docker',

                    'AWS',

                ],

                'process' => [

                    'Discovery',

                    'Planning',

                    'UI/UX',

                    'Development',

                    'Testing',

                    'Deployment',

                    'Support',

                ],

                'benefits' => [

                    'SEO Optimized',

                    'Fast Performance',

                    'Scalable Architecture',

                    'Modern UI',

                    'Enterprise Security',

                    'Long-Term Support',

                ],

                'faqs' => [

                    [
                        'question' => 'How long does web development take?',

                        'answer' =>
                        'Usually between 2 and 12 weeks depending on project complexity.'
                    ],

                    [
                        'question' => 'Do you provide maintenance?',

                        'answer' =>
                        'Yes. We provide ongoing maintenance, updates, and support.'
                    ],

                ],

            ],

            [
                'id' => 2,

                'name' => 'Mobile App Development',

                'slug' => 'mobile-app-development',

                'icon' => 'fa-solid fa-mobile-screen-button',

                'short_description' =>
                'Custom Android, iOS, and cross-platform mobile applications designed for performance, security, and exceptional user experiences.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'Custom Mobile App Development Services',

                    'subtitle' => 'Building High-Performance Android & iOS Applications',

                    'description' =>
                    'We develop feature-rich mobile applications for startups, enterprises, and growing businesses using modern technologies. Our apps deliver seamless performance, intuitive user experiences, and scalable architecture.',

                    'image' => 'images/services/mobile-app-development.png',

                ],

                'overview' => [

                    'title' => 'Professional Mobile App Development',

                    'description' =>
                    'From idea validation to App Store and Google Play deployment, we build secure, scalable, and user-friendly mobile applications that help businesses engage customers and accelerate digital growth.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-brands fa-android',

                        'title' => 'Android Development',

                        'description' => 'Native Android applications built for speed and reliability.',
                    ],

                    [
                        'icon' => 'fa-brands fa-apple',

                        'title' => 'iOS Development',

                        'description' => 'Premium iPhone and iPad applications with native performance.',
                    ],

                    [
                        'icon' => 'fa-solid fa-layer-group',

                        'title' => 'Cross-Platform Apps',

                        'description' => 'Build once and deploy seamlessly across Android and iOS.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bell',

                        'title' => 'Push Notifications',

                        'description' => 'Keep users engaged with real-time notifications.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',

                        'title' => 'Secure Applications',

                        'description' => 'Advanced security practices to protect user data.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud-arrow-up',

                        'title' => 'Cloud Integration',

                        'description' => 'Connect apps with cloud services and scalable backends.',
                    ],

                ],

                'technologies' => [

                    'Flutter',

                    'React Native',

                    'Kotlin',

                    'Swift',

                    'Firebase',

                    'Laravel API',

                    'Node.js',

                    'SQLite',

                ],

                'process' => [

                    'Requirement Analysis',

                    'UI/UX Design',

                    'Prototype Development',

                    'App Development',

                    'Testing & QA',

                    'App Store Deployment',

                    'Maintenance & Updates',

                ],

                'benefits' => [

                    'Native Performance',

                    'Cross-Platform Compatibility',

                    'Modern UI/UX',

                    'Scalable Architecture',

                    'Secure Development',

                    'Ongoing Maintenance',

                ],

                'faqs' => [

                    [
                        'question' => 'Which platforms do you develop mobile apps for?',

                        'answer' =>
                        'We develop native Android, native iOS, and cross-platform mobile applications using Flutter and React Native.',
                    ],

                    [
                        'question' => 'How long does mobile app development take?',

                        'answer' =>
                        'Most mobile applications take between 6 and 16 weeks depending on features and complexity.',
                    ],

                    [
                        'question' => 'Will you publish the app on the App Store and Google Play?',

                        'answer' =>
                        'Yes. We handle deployment, store optimization, and publishing for both platforms.',
                    ],

                    [
                        'question' => 'Can you integrate payment gateways and APIs?',

                        'answer' =>
                        'Absolutely. We integrate payment gateways, maps, chat, authentication, analytics, and third-party APIs.',
                    ],

                    [
                        'question' => 'Do you provide post-launch support?',

                        'answer' =>
                        'Yes. We provide maintenance, bug fixes, feature enhancements, and long-term technical support.',
                    ],

                ],

            ],

            [
                'id' => 3,

                'name' => 'Custom Software Development',

                'slug' => 'custom-software-development',

                'icon' => 'fa-solid fa-laptop-code',

                'short_description' =>
                'Tailor-made software solutions designed to streamline operations, improve productivity, and accelerate business growth.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'Custom Software Development Services',

                    'subtitle' => 'Tailored Software Solutions for Your Business',

                    'description' =>
                    'We build secure, scalable, and fully customized software applications that automate business processes, improve efficiency, and provide a competitive advantage for organizations of every size.',

                    'image' => 'images/services/custom-software-development.png',

                ],

                'overview' => [

                    'title' => 'Professional Custom Software Development',

                    'description' =>
                    'Our experienced development team creates enterprise-grade software solutions specifically designed around your business requirements. From CRM and ERP systems to internal business tools and SaaS platforms, we deliver software that grows with your business.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-gears',

                        'title' => 'Business Automation',

                        'description' => 'Automate repetitive business tasks and improve operational efficiency.',
                    ],

                    [
                        'icon' => 'fa-solid fa-building',

                        'title' => 'Enterprise Solutions',

                        'description' => 'Robust enterprise software built for large-scale business operations.',
                    ],

                    [
                        'icon' => 'fa-solid fa-database',

                        'title' => 'Database Design',

                        'description' => 'Optimized database architecture for performance and scalability.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',

                        'title' => 'Multi-User Systems',

                        'description' => 'Role-based applications with secure user management.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',

                        'title' => 'Advanced Security',

                        'description' => 'Enterprise-grade security practices and data protection.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-simple',

                        'title' => 'Analytics & Reporting',

                        'description' => 'Comprehensive dashboards and business intelligence reports.',
                    ],

                ],

                'technologies' => [

                    'Laravel',

                    'PHP',

                    'Livewire',

                    'React',

                    'Vue.js',

                    'MySQL',

                    'Docker',

                    'AWS',

                ],

                'process' => [

                    'Business Analysis',

                    'System Planning',

                    'UI/UX Design',

                    'Software Development',

                    'Quality Assurance',

                    'Deployment',

                    'Maintenance & Support',

                ],

                'benefits' => [

                    'Business Process Automation',

                    'Increased Productivity',

                    'Highly Scalable Architecture',

                    'Enhanced Security',

                    'Reduced Operational Costs',

                    'Long-Term Technical Support',

                ],

                'faqs' => [

                    [
                        'question' => 'What is custom software development?',

                        'answer' =>
                        'Custom software development involves building software specifically designed to meet your unique business requirements instead of using generic off-the-shelf solutions.',
                    ],

                    [
                        'question' => 'How long does custom software development take?',

                        'answer' =>
                        'Depending on project complexity, development typically takes between 8 and 24 weeks.',
                    ],

                    [
                        'question' => 'Can you integrate with our existing systems?',

                        'answer' =>
                        'Yes. We integrate custom software with CRMs, ERPs, payment gateways, APIs, and third-party business applications.',
                    ],

                    [
                        'question' => 'Will the software be scalable?',

                        'answer' =>
                        'Absolutely. We design scalable architectures that support future business growth and feature expansion.',
                    ],

                    [
                        'question' => 'Do you provide ongoing maintenance?',

                        'answer' =>
                        'Yes. We offer continuous maintenance, monitoring, updates, security patches, and technical support after deployment.',
                    ],

                ],

            ],


            [
                'id' => 4,

                'name' => 'UI/UX Design',

                'slug' => 'ui-ux-design',

                'icon' => 'fa-solid fa-palette',

                'short_description' =>
                'Creative UI/UX design solutions that deliver intuitive, engaging, and user-centric digital experiences.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'Professional UI/UX Design Services',

                    'subtitle' => 'Creating Beautiful & User-Centered Digital Experiences',

                    'description' =>
                    'We design modern, responsive, and intuitive user interfaces that enhance user satisfaction, improve engagement, and strengthen your brand identity across web and mobile applications.',

                    'image' => 'images/services/ui-ux-design.png',

                ],

                'overview' => [

                    'title' => 'Creative UI/UX Design Solutions',

                    'description' =>
                    'Our design team combines creativity, usability, and business strategy to create digital experiences that users love. From wireframes to high-fidelity prototypes, we focus on usability, accessibility, and conversion optimization.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-pencil-ruler',

                        'title' => 'Wireframing',

                        'description' => 'Create structured layouts that define the user journey.',
                    ],

                    [
                        'icon' => 'fa-solid fa-object-group',

                        'title' => 'UI Design',

                        'description' => 'Modern and visually appealing user interface designs.',
                    ],

                    [
                        'icon' => 'fa-solid fa-mobile-screen-button',

                        'title' => 'Responsive Design',

                        'description' => 'Pixel-perfect experiences across desktop, tablet, and mobile.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users',

                        'title' => 'User Research',

                        'description' => 'Understand user behavior through research and analysis.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',

                        'title' => 'UX Optimization',

                        'description' => 'Improve usability and increase user engagement.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bezier-curve',

                        'title' => 'Interactive Prototypes',

                        'description' => 'Clickable prototypes for testing and stakeholder feedback.',
                    ],

                ],

                'technologies' => [

                    'Figma',

                    'Adobe XD',

                    'Sketch',

                    'Photoshop',

                    'Illustrator',

                    'Framer',

                    'HTML5',

                    'Tailwind CSS',

                ],

                'process' => [

                    'Requirement Gathering',

                    'User Research',

                    'Wireframing',

                    'UI Design',

                    'Prototype Testing',

                    'Design Handoff',

                    'Design Support',

                ],

                'benefits' => [

                    'Improved User Experience',

                    'Higher Conversion Rates',

                    'Consistent Brand Identity',

                    'Mobile-Friendly Designs',

                    'Better Customer Engagement',

                    'Developer-Ready Design Files',

                ],

                'faqs' => [

                    [
                        'question' => 'Why is UI/UX design important?',

                        'answer' =>
                        'A great UI/UX improves customer satisfaction, increases conversions, and creates a memorable user experience.',
                    ],

                    [
                        'question' => 'Which design tools do you use?',

                        'answer' =>
                        'We primarily use Figma, Adobe XD, Photoshop, Illustrator, and other industry-standard design tools.',
                    ],

                    [
                        'question' => 'Will I receive editable design files?',

                        'answer' =>
                        'Yes. We provide fully editable Figma or Adobe XD files upon project completion.',
                    ],

                    [
                        'question' => 'Do you create responsive designs?',

                        'answer' =>
                        'Absolutely. Every design is optimized for desktop, tablet, and mobile devices.',
                    ],

                    [
                        'question' => 'Can you redesign an existing application?',

                        'answer' =>
                        'Yes. We modernize existing websites and applications while improving usability and user experience.',
                    ],

                ],



            ],

            [
                'id' => 5,

                'name' => 'E-Commerce Development',

                'slug' => 'e-commerce-development',

                'icon' => 'fa-solid fa-cart-shopping',

                'short_description' =>
                'Scalable and secure e-commerce solutions that help businesses sell online with exceptional shopping experiences.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'Professional E-Commerce Development Services',

                    'subtitle' => 'Build Powerful Online Stores That Drive Sales',

                    'description' =>
                    'We develop feature-rich e-commerce platforms that provide seamless shopping experiences, secure payment processing, inventory management, and scalable architecture to help your business grow online.',

                    'image' => 'images/services/e-commerce-development.png',

                ],

                'overview' => [

                    'title' => 'Complete E-Commerce Solutions',

                    'description' =>
                    'Whether you are launching a new online store or upgrading an existing platform, we create fast, secure, and conversion-focused e-commerce websites tailored to your business goals.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-cart-plus',

                        'title' => 'Shopping Cart',

                        'description' => 'Smooth shopping cart experience with real-time updates.',
                    ],

                    [
                        'icon' => 'fa-solid fa-credit-card',

                        'title' => 'Secure Payments',

                        'description' => 'Integration with trusted payment gateways for secure transactions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-box-open',

                        'title' => 'Product Management',

                        'description' => 'Manage products, categories, pricing, and inventory with ease.',
                    ],

                    [
                        'icon' => 'fa-solid fa-truck-fast',

                        'title' => 'Order Management',

                        'description' => 'Track, process, and fulfill customer orders efficiently.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-column',

                        'title' => 'Sales Analytics',

                        'description' => 'Detailed reports and analytics to monitor business growth.',
                    ],

                    [
                        'icon' => 'fa-solid fa-mobile-screen-button',

                        'title' => 'Mobile Commerce',

                        'description' => 'Responsive shopping experience across all devices.',
                    ],

                ],

                'technologies' => [

                    'Laravel',

                    'Livewire',

                    'React',

                    'MySQL',

                    'Stripe',

                    'Razorpay',

                    'PayPal',

                    'Docker',

                ],

                'process' => [

                    'Business Analysis',

                    'Store Planning',

                    'UI/UX Design',

                    'Store Development',

                    'Payment Integration',

                    'Testing & Launch',

                    'Maintenance & Support',

                ],

                'benefits' => [

                    'Higher Conversion Rates',

                    'Secure Online Payments',

                    'Easy Product Management',

                    'Scalable Architecture',

                    'SEO Friendly',

                    'Continuous Technical Support',

                ],

                'faqs' => [

                    [
                        'question' => 'Can you build custom e-commerce websites?',

                        'answer' =>
                        'Yes. We build fully customized e-commerce platforms tailored to your business requirements.',
                    ],

                    [
                        'question' => 'Which payment gateways do you support?',

                        'answer' =>
                        'We integrate Stripe, Razorpay, PayPal, and other popular payment gateways.',
                    ],

                    [
                        'question' => 'Can I manage products myself?',

                        'answer' =>
                        'Absolutely. You\'ll receive an admin dashboard to manage products, inventory, orders, and customers.',
                    ],

                    [
                        'question' => 'Will my store be mobile-friendly?',

                        'answer' =>
                        'Yes. Every online store we build is fully responsive and optimized for all devices.',
                    ],

                    [
                        'question' => 'Do you provide maintenance after launch?',

                        'answer' =>
                        'Yes. We offer ongoing maintenance, feature enhancements, and technical support.',
                    ],

                ],

            ],

            [
                'id' => 6,

                'name' => 'AI & Automation',

                'slug' => 'ai-automation',

                'icon' => 'fa-solid fa-robot',

                'short_description' =>
                'Intelligent AI-powered solutions and workflow automation to increase productivity, reduce costs, and accelerate business growth.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'AI & Automation Services',

                    'subtitle' => 'Transform Your Business with Artificial Intelligence',

                    'description' =>
                    'We build AI-powered applications, intelligent chatbots, automation workflows, predictive analytics, and machine learning solutions that help businesses work smarter and deliver exceptional customer experiences.',

                    'image' => 'images/services/ai-automation.png',

                ],

                'overview' => [

                    'title' => 'Intelligent AI Solutions',

                    'description' =>
                    'Our AI experts develop smart solutions that automate repetitive tasks, analyze business data, improve customer interactions, and increase operational efficiency using the latest Artificial Intelligence technologies.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-comments',

                        'title' => 'AI Chatbots',

                        'description' => 'Intelligent chatbots for customer support and lead generation.',
                    ],

                    [
                        'icon' => 'fa-solid fa-gears',

                        'title' => 'Workflow Automation',

                        'description' => 'Automate repetitive business processes and increase efficiency.',
                    ],

                    [
                        'icon' => 'fa-solid fa-brain',

                        'title' => 'Machine Learning',

                        'description' => 'Custom ML models for business intelligence and predictions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',

                        'title' => 'Predictive Analytics',

                        'description' => 'Analyze business data to make smarter decisions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-microchip',

                        'title' => 'AI Integration',

                        'description' => 'Integrate OpenAI and other AI platforms into your applications.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bolt',

                        'title' => 'Process Optimization',

                        'description' => 'Reduce manual work and improve operational performance.',
                    ],

                ],

                'technologies' => [

                    'OpenAI',

                    'Python',

                    'TensorFlow',

                    'LangChain',

                    'Laravel',

                    'Node.js',

                    'Docker',

                    'AWS',

                ],

                'process' => [

                    'Business Analysis',

                    'AI Strategy',

                    'Model Development',

                    'Application Integration',

                    'Testing',

                    'Deployment',

                    'Continuous Improvement',

                ],

                'benefits' => [

                    'Reduced Operational Costs',

                    'Improved Productivity',

                    'Intelligent Decision Making',

                    'Enhanced Customer Experience',

                    'Business Automation',

                    'Scalable AI Solutions',

                ],

                'faqs' => [

                    [
                        'question' => 'Can AI automate my business processes?',

                        'answer' =>
                        'Yes. AI can automate repetitive tasks, customer support, document processing, and workflow management.',
                    ],

                    [
                        'question' => 'Can you build ChatGPT-powered applications?',

                        'answer' =>
                        'Absolutely. We integrate OpenAI and other AI models into web and mobile applications.',
                    ],

                    [
                        'question' => 'Do AI solutions require large datasets?',

                        'answer' =>
                        'Not always. Depending on the project, existing AI models can deliver excellent results with minimal training data.',
                    ],

                    [
                        'question' => 'Can AI integrate with existing software?',

                        'answer' =>
                        'Yes. We integrate AI features into existing ERP, CRM, websites, and business applications.',
                    ],

                    [
                        'question' => 'Do you provide AI maintenance?',

                        'answer' =>
                        'Yes. We continuously optimize, monitor, and improve AI systems after deployment.',
                    ],

                ],

            ],


            [
                'id' => 7,

                'name' => 'Cloud Solutions',

                'slug' => 'cloud-solutions',

                'icon' => 'fa-solid fa-cloud',

                'short_description' =>
                'Modern cloud infrastructure, migration, deployment, and managed services for scalable business applications.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'Cloud Solutions & DevOps Services',

                    'subtitle' => 'Build, Deploy & Scale with Confidence',

                    'description' =>
                    'We help businesses migrate to the cloud, optimize infrastructure, improve security, and implement scalable cloud-native architectures using modern DevOps practices.',

                    'image' => 'images/services/cloud-solutions.png',

                ],

                'overview' => [

                    'title' => 'Reliable Cloud Infrastructure',

                    'description' =>
                    'Our cloud experts design secure, scalable, and cost-effective cloud environments that ensure high availability, improved performance, and simplified infrastructure management.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-cloud-arrow-up',

                        'title' => 'Cloud Migration',

                        'description' => 'Seamlessly migrate applications and databases to the cloud.',
                    ],

                    [
                        'icon' => 'fa-solid fa-server',

                        'title' => 'Infrastructure Management',

                        'description' => 'Reliable cloud server provisioning and monitoring.',
                    ],

                    [
                        'icon' => 'fa-solid fa-docker',

                        'title' => 'Containerization',

                        'description' => 'Deploy applications using Docker containers.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',

                        'title' => 'Cloud Security',

                        'description' => 'Protect infrastructure with enterprise-grade security practices.',
                    ],

                    [
                        'icon' => 'fa-solid fa-arrows-rotate',

                        'title' => 'CI/CD Pipeline',

                        'description' => 'Automate build, testing, and deployment workflows.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-simple',

                        'title' => 'Monitoring & Scaling',

                        'description' => 'Monitor system health and scale resources automatically.',
                    ],

                ],

                'technologies' => [

                    'AWS',

                    'Azure',

                    'Google Cloud',

                    'Docker',

                    'Kubernetes',

                    'GitHub Actions',

                    'Linux',

                    'Nginx',

                ],

                'process' => [

                    'Infrastructure Assessment',

                    'Cloud Planning',

                    'Migration',

                    'Deployment',

                    'Security Configuration',

                    'Monitoring',

                    'Maintenance',

                ],

                'benefits' => [

                    'High Availability',

                    'Automatic Scaling',

                    'Lower Infrastructure Costs',

                    'Enterprise Security',

                    'Fast Deployment',

                    '24/7 Monitoring',

                ],

                'faqs' => [

                    [
                        'question' => 'Which cloud providers do you support?',

                        'answer' =>
                        'We work with AWS, Microsoft Azure, Google Cloud Platform, and DigitalOcean.',
                    ],

                    [
                        'question' => 'Can you migrate my existing application?',

                        'answer' =>
                        'Yes. We safely migrate applications, databases, and infrastructure with minimal downtime.',
                    ],

                    [
                        'question' => 'Do you configure CI/CD pipelines?',

                        'answer' =>
                        'Yes. We automate software delivery using GitHub Actions, GitLab CI, Jenkins, and similar tools.',
                    ],

                    [
                        'question' => 'Will my cloud infrastructure be secure?',

                        'answer' =>
                        'Absolutely. We implement best practices for authentication, encryption, backups, and monitoring.',
                    ],

                    [
                        'question' => 'Do you provide cloud maintenance?',

                        'answer' =>
                        'Yes. We provide continuous monitoring, optimization, updates, and technical support.',
                    ],

                ],

            ],

            [
                'id' => 8,

                'name' => 'IoT Development',

                'slug' => 'iot-development',

                'icon' => 'fa-solid fa-microchip',

                'short_description' =>
                'Smart IoT solutions that connect devices, automate processes, and deliver real-time insights for businesses.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'IoT Development Services',

                    'subtitle' => 'Connecting Devices. Empowering Businesses.',

                    'description' =>
                    'We build secure and scalable Internet of Things (IoT) solutions that connect smart devices, collect real-time data, automate workflows, and enable intelligent decision-making across industries.',

                    'image' => 'images/services/iot-development.png',

                ],

                'overview' => [

                    'title' => 'Smart IoT Solutions',

                    'description' =>
                    'Our IoT development services help businesses leverage connected devices, cloud computing, and real-time analytics to improve operational efficiency, reduce costs, and create innovative digital experiences.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-wifi',

                        'title' => 'Connected Devices',

                        'description' => 'Secure communication between sensors, devices, and cloud platforms.',
                    ],

                    [
                        'icon' => 'fa-solid fa-microchip',

                        'title' => 'Embedded Systems',

                        'description' => 'Custom firmware and embedded software for smart devices.',
                    ],

                    [
                        'icon' => 'fa-solid fa-cloud',

                        'title' => 'Cloud Integration',

                        'description' => 'Connect IoT devices with scalable cloud infrastructure.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',

                        'title' => 'Real-Time Monitoring',

                        'description' => 'Monitor devices, sensors, and performance in real time.',
                    ],

                    [
                        'icon' => 'fa-solid fa-gears',

                        'title' => 'Automation',

                        'description' => 'Automate industrial and business processes using smart devices.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',

                        'title' => 'IoT Security',

                        'description' => 'Protect connected devices with enterprise-grade security practices.',
                    ],

                ],

                'technologies' => [

                    'Arduino',

                    'ESP32',

                    'Raspberry Pi',

                    'MQTT',

                    'python',

                    'C/C++',

                    'AWS IoT',

                    'Azure IoT',

                    'MIT App Inventor',

                ],

                'process' => [

                    'Requirement Analysis',

                    'Device Architecture',

                    'Prototype Development',

                    'Cloud Integration',

                    'Application Development',

                    'Testing & Deployment',

                    'Maintenance & Monitoring',

                ],

                'benefits' => [

                    'Real-Time Data Collection',

                    'Business Process Automation',

                    'Improved Operational Efficiency',

                    'Scalable IoT Infrastructure',

                    'Enhanced Security',

                    'Reduced Operational Costs',

                ],

                'faqs' => [

                    [
                        'question' => 'What industries can benefit from IoT solutions?',

                        'answer' =>
                        'IoT solutions are widely used in manufacturing, healthcare, agriculture, logistics, retail, smart homes, and industrial automation.',
                    ],

                    [
                        'question' => 'Can you develop custom IoT applications?',

                        'answer' =>
                        'Yes. We build end-to-end IoT solutions including hardware integration, cloud platforms, dashboards, and mobile applications.',
                    ],

                    [
                        'question' => 'Which IoT devices do you support?',

                        'answer' =>
                        'We work with Arduino, ESP32, Raspberry Pi, industrial sensors, gateways, and other embedded platforms.',
                    ],

                    [
                        'question' => 'Is IoT communication secure?',

                        'answer' =>
                        'Absolutely. We implement secure authentication, encrypted communication, and cloud security best practices.',
                    ],

                    [
                        'question' => 'Do you provide maintenance after deployment?',

                        'answer' =>
                        'Yes. We offer continuous monitoring, firmware updates, cloud maintenance, and technical support for IoT solutions.',
                    ],

                ],

            ],

            [
                'id' => 12,

                'name' => 'Enterprise Application Development',

                'slug' => 'enterprise-application-development',

                'icon' => 'fa-solid fa-building',

                'short_description' =>
                'Custom enterprise applications that streamline business operations, automate workflows, and accelerate digital transformation.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'Enterprise Application Development',

                    'subtitle' => 'Powerful Business Applications Built for Growth',

                    'description' =>
                    'We design and develop secure, scalable, and high-performance enterprise applications that integrate departments, automate workflows, improve collaboration, and support business growth.',

                    'image' => 'images/services/enterprise-app-development.png',

                ],

                'overview' => [

                    'title' => 'Custom Enterprise Software Solutions',

                    'description' =>
                    'Our enterprise applications help organizations digitize operations, centralize business data, automate manual tasks, and improve decision-making. We build ERP systems, CRM platforms, HRMS, inventory solutions, workflow automation tools, and other enterprise-grade applications tailored to your business.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-building',
                        'title' => 'Business Automation',
                        'description' => 'Automate repetitive workflows and business processes.',
                    ],

                    [
                        'icon' => 'fa-solid fa-users-gear',
                        'title' => 'Role-Based Access',
                        'description' => 'Secure permission management for every department.',
                    ],

                    [
                        'icon' => 'fa-solid fa-database',
                        'title' => 'Centralized Data',
                        'description' => 'Store and manage all business information in one place.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-line',
                        'title' => 'Real-Time Analytics',
                        'description' => 'Generate reports and dashboards for informed decisions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-plug',
                        'title' => 'Third-Party Integration',
                        'description' => 'Integrate ERP, CRM, payment gateways, APIs, and cloud services.',
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Enterprise Security',
                        'description' => 'Advanced authentication, encryption, and secure data protection.',
                    ],

                ],

                'technologies' => [

                    'Laravel',

                    'Livewire',

                    'React',

                    'Node.js',

                    'MySQL',

                    'PostgreSQL',

                    'Docker',

                    'AWS',

                ],

                'process' => [

                    'Business Analysis',

                    'Requirement Gathering',

                    'Architecture Design',

                    'UI/UX Design',

                    'Development',

                    'Testing',

                    'Deployment',

                    'Maintenance',

                ],

                'benefits' => [

                    'Improved Productivity',

                    'Business Process Automation',

                    'Centralized Data Management',

                    'Real-Time Reporting',

                    'Scalable Architecture',

                    'Enterprise-Level Security',

                ],

                'faqs' => [

                    [
                        'question' => 'What types of enterprise applications do you develop?',

                        'answer' =>
                        'We build ERP, CRM, HRMS, Inventory Management, Hospital Management, School Management, Finance, Workflow Automation, and custom enterprise applications.',
                    ],

                    [
                        'question' => 'Can you integrate with our existing software?',

                        'answer' =>
                        'Yes. We integrate enterprise applications with CRMs, ERPs, payment gateways, accounting software, cloud services, and third-party APIs.',
                    ],

                    [
                        'question' => 'Is the application scalable?',

                        'answer' =>
                        'Absolutely. Every enterprise application is designed with scalability, performance, and future business growth in mind.',
                    ],

                    [
                        'question' => 'Do you provide post-launch support?',

                        'answer' =>
                        'Yes. We provide maintenance, security updates, performance optimization, and ongoing technical support.',
                    ],

                ],

            ],

            [
                'id' => 13,

                'name' => 'Digital Marketing',

                'slug' => 'digital-marketing',

                'icon' => 'fa-solid fa-bullhorn',

                'short_description' =>
                'Result-driven digital marketing services that boost visibility, generate leads, and accelerate business growth online.',

                'hero' => [

                    'badge' => 'Our Services',

                    'title' => 'Digital Marketing Services',

                    'subtitle' => 'Growing Your Brand. Generating Real Leads.',

                    'description' =>
                    'We plan and execute data-driven digital marketing strategies — SEO, paid ads, social media, and content marketing — that put your brand in front of the right audience and turn clicks into customers.',

                    'image' => 'images/services/digital-marketing.png',

                ],

                'overview' => [

                    'title' => 'Growth-Driven Digital Marketing',

                    'description' =>
                    'From search engine optimization to performance advertising, our digital marketing services help businesses build brand awareness, capture qualified leads, and maximize return on every marketing dollar invested.',

                ],

                'features' => [

                    [
                        'icon' => 'fa-solid fa-magnifying-glass-chart',

                        'title' => 'SEO Optimization',

                        'description' => 'Improve search rankings and drive organic traffic with technical and content SEO.',
                    ],

                    [
                        'icon' => 'fa-solid fa-bullseye',

                        'title' => 'PPC Advertising',

                        'description' => 'Google, Meta, and LinkedIn ad campaigns engineered for maximum conversions.',
                    ],

                    [
                        'icon' => 'fa-solid fa-share-nodes',

                        'title' => 'Social Media Marketing',

                        'description' => 'Engaging content and campaigns that build communities and brand loyalty.',
                    ],

                    [
                        'icon' => 'fa-solid fa-pen-nib',

                        'title' => 'Content Marketing',

                        'description' => 'High-value blogs, videos, and copy that attract, inform, and convert.',
                    ],

                    [
                        'icon' => 'fa-solid fa-envelope-open-text',

                        'title' => 'Email Marketing',

                        'description' => 'Personalized email funnels that nurture leads and drive repeat business.',
                    ],

                    [
                        'icon' => 'fa-solid fa-chart-column',

                        'title' => 'Analytics & Reporting',

                        'description' => 'Transparent dashboards and insights to track performance and ROI.',
                    ],

                ],

                'technologies' => [

                    'Google Analytics',

                    'Google Ads',

                    'Meta Ads',

                    'Ahrefs',

                    'SEMrush',

                    'Mailchimp',

                    'HubSpot',

                    'WordPress',

                    'Canva',

                ],

                'process' => [

                    'Market Research',

                    'Strategy Development',

                    'Campaign Planning',

                    'Content Creation',

                    'Campaign Execution',

                    'Monitoring & Optimization',

                    'Reporting & Insights',

                ],

                'benefits' => [

                    'Increased Brand Visibility',

                    'Qualified Lead Generation',

                    'Higher Conversion Rates',

                    'Better Search Rankings',

                    'Measurable ROI',

                    'Long-Term Growth',

                ],

                'faqs' => [

                    [
                        'question' => 'How long does it take to see results from digital marketing?',

                        'answer' =>
                        'Timelines vary by channel — paid ads can generate leads within weeks, while SEO typically shows meaningful results within 3 to 6 months.',
                    ],

                    [
                        'question' => 'Which digital marketing channels do you manage?',

                        'answer' =>
                        'We manage SEO, Google and Meta advertising, social media, content, and email marketing as part of integrated campaigns.',
                    ],

                    [
                        'question' => 'Do you provide regular performance reports?',

                        'answer' =>
                        'Yes. We share transparent analytics dashboards and monthly reports covering traffic, conversions, and return on ad spend.',
                    ],

                    [
                        'question' => 'Can you work with our existing marketing tools?',

                        'answer' =>
                        'Absolutely. We integrate with CRMs, analytics platforms, and marketing automation tools already used by your business.',
                    ],

                ],

            ],

        ];
    }

    public static function find(string $slug): ?array
    {
        foreach (self::all() as $service) {

            if ($service['slug'] === $slug) {
                return $service;
            }
        }

        return null;
    }
}
