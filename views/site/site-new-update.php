<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohammed Mejbil AlEnezi Group - Premier Legal Services in Kuwait</title>
    <meta name="description" content="Providing premier legal services across Kuwait with integrity, expertise, and unwavering commitment to justice since 1995.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
   <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        /* Auto-scroll banner animation */
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .scroll-banner {
            animation: scroll 30s linear infinite;
        }

        .scroll-banner:hover {
            animation-play-state: paused;
        }

        /* Islamic Pattern Background */
        .islamic-pattern {
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(217, 119, 6, 0.03) 35px, rgba(217, 119, 6, 0.03) 70px),
                repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(217, 119, 6, 0.03) 35px, rgba(217, 119, 6, 0.03) 70px);
        }

        html {
            scroll-behavior: smooth;
        }

        [dir="rtl"] {
            direction: rtl;
        }

        /* Carousel styles */
        .carousel-container {
            position: relative;
            overflow: hidden;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-slide {
            min-width: 100%;
            flex-shrink: 0;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background: rgba(217, 119, 6, 0.2);
            border: 1px solid rgba(217, 119, 6, 0.4);
            color: #fbbf24;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .carousel-btn:hover {
            background: rgba(217, 119, 6, 0.3);
        }

        .carousel-btn.prev { left: 16px; }
        .carousel-btn.next { right: 16px; }

        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 24px;
        }

        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(217, 119, 6, 0.3);
            cursor: pointer;
            transition: all 0.3s;
        }

        .carousel-dot.active {
            background: #fbbf24;
            transform: scale(1.2);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #0f172a;
        }

        ::-webkit-scrollbar-thumb {
            background: #d97706;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #b45309;
        }

        /* Fade in animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>

<body class="bg-slate-900 text-white">

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-900/95 backdrop-blur-sm border-b border-amber-600/20">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="w-16 h-16 flex items-center justify-center">
                        <img src="/image/logo.png" alt="Mohammed Mejbil AlEnezi Group Logo" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h1 class="text-amber-400 text-lg font-semibold" id="header-firm-name">Mohammed mejbil AlEnezi Group</h1>
                        <p class="text-xs text-slate-400">مجموعة المحامي محمد مجبل العنزي</p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#home" class="text-slate-200 hover:text-amber-400 transition-colors" data-translate="nav.home">Home</a>
                    <a href="#services" class="text-slate-200 hover:text-amber-400 transition-colors" data-translate="nav.services">Services</a>
                    <a href="#team" class="text-slate-200 hover:text-amber-400 transition-colors" data-translate="nav.team">Team</a>
                    <a href="#about" class="text-slate-200 hover:text-amber-400 transition-colors" data-translate="nav.about">About</a>
                    <a href="#contact" class="text-slate-200 hover:text-amber-400 transition-colors" data-translate="nav.contact">Contact</a>
                </nav>
                
                <!-- CTA -->
                <div class="flex items-center gap-3">
                    <button onclick="toggleLanguage()" class="flex items-center gap-2 px-3 py-2 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg text-amber-400 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                        </svg>
                        <span class="text-sm" id="lang-toggle">العربية</span>
                    </button>
                    
                    <a href="#contact" class="px-6 py-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-900 font-semibold rounded-lg transition-all" data-translate="header.consultation">
                        Consultation
                    </a>
                </div>
            </div>
        </div>
    </header>

     <!-- Hero Section with Carousel -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1672985485075-b9d3ff3b7784?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxrdXdhaXQlMjBjaXR5JTIwc2t5bGluZXxlbnwxfHx8fDE3NjI3MjU5OTV8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Kuwait City Skyline" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-slate-900/90 to-slate-900/80"></div>
        </div>
        
        <!-- Islamic Pattern Overlay -->
        <div class="absolute inset-0 islamic-pattern opacity-30"></div>
        
        <!-- Carousel -->
        <div class="relative z-10 container mx-auto px-4 py-20 w-full">
           <div class="carousel-container max-w-6xl mx-auto">
    <div class="carousel-track" id="carouselTrack">

        <?php foreach ($bannerModel as $banner): ?>
            <div class="carousel-slide">
                <div class="flex flex-col items-center text-center px-4">

                    <!-- IMAGE FIRST -->
                     <?php if(!empty( $banner['image_en'])):?>
                    <div class="mb-8 w-full max-w-3xl h-64 rounded-lg overflow-hidden">
                        <img src="<?= $banner['image_en'] ?>"
                             alt="<?= $banner['title_en'] ?>"
                             class="w-full h-full object-cover">
                    </div>
                    <?php endif; ?>

                    <!-- TITLE -->
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white">
                        <?= $banner['title_en'] ?>

                        <?php if (!empty($banner['highlight_en'])): ?>
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-600">
                                <?= $banner['highlight_en'] ?>
                            </span>
                        <?php endif; ?>
                    </h1>

                    <!-- ENGLISH DESCRIPTION -->
                    <?php if (!empty($banner['desc_en'])): ?>
                        <p class="text-xl md:text-2xl text-slate-300 mb-4 max-w-3xl mx-auto">
                            <?= $banner['desc_en'] ?>
                        </p>
                    <?php endif; ?>

                    <!-- ARABIC DESCRIPTION -->
                    <?php if (!empty($banner['desc_ar'])): ?>
                        <p class="text-lg text-amber-400/80 mb-8" dir="rtl">
                            <?= $banner['desc_ar'] ?>
                        </p>
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <!-- Navigation arrows -->
    <button class="carousel-btn prev" onclick="moveCarousel(-1)">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <button class="carousel-btn next" onclick="moveCarousel(1)">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Dynamic dots based on banner count -->
    <div class="carousel-dots">
        <?php foreach ($bannerModel as $i => $banner): ?>
            <span class="carousel-dot <?= $i === 0 ? 'active' : '' ?>" onclick="goToSlide(<?= $i ?>)"></span>
        <?php endforeach; ?>
    </div>
</div>

        </div>
        
        <!-- Decorative Bottom Border -->
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-amber-600 to-transparent"></div>
    </section>
    <!-- Services Section -->
    <section id="services" class="relative py-20 bg-slate-800">
        <div class="absolute inset-0 islamic-pattern opacity-5"></div>

        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-1 bg-amber-600/20 border border-amber-600/40 rounded-full mb-4">
                    <p class="text-amber-400 text-sm">Our Expertise</p>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Practice Areas</h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                    Comprehensive legal services tailored to meet your unique needs
                </p>
            </div>

           <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php foreach ($serviceModel as $service): ?>

                <div class="group relative bg-slate-900 border border-amber-600/20 rounded-lg p-8 hover:border-amber-600 transition-all duration-300 hover:shadow-xl hover:shadow-amber-600/20">
                    
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-amber-600/10 to-transparent rounded-bl-full"></div>

                    <div class="relative">
                        
                        <!-- Hard-coded ICON -->
                        <div class="w-14 h-14 bg-gradient-to-br from-amber-500 to-amber-600 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>

                        <!-- Dynamic Title EN -->
                        <h3 class="text-xl font-semibold text-white mb-2">
                            <?= $service->title_en ?>
                        </h3>

                        <!-- Dynamic Title AR -->
                        <p class="text-sm text-amber-400/70 mb-4">
                            <?= $service->title_ar ?>
                        </p>

                        <!-- Dynamic Description EN -->
                        <p class="text-slate-400">
                            <?= $service->desc_en ?>
                        </p>

                        <!-- Static Learn More -->
                        <div class="mt-6 text-amber-400 text-sm font-semibold group-hover:text-amber-300 transition-colors">
                            Learn More →
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>

            </div>

        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20 bg-slate-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-1 bg-amber-600/20 border border-amber-600/40 rounded-full mb-4">
                    <p class="text-amber-400 text-sm">Our Expertise</p>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Meet Our Legal Team
                </h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                    Experienced attorneys dedicated to your legal success
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <?php foreach ($teamModel as $team): ?>

                <div class="group relative bg-slate-800 border border-amber-600/20 rounded-lg overflow-hidden hover:border-amber-600 transition-all duration-300 hover:shadow-xl hover:shadow-amber-600/20">
                    
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?= $team->avatar ?>" 
                            alt="<?= $team->name_en ?>" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>

                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            
                            <h3 class="text-xl font-semibold text-white mb-1">
                                <?= $team->name_en ?>
                            </h3>

                            <p class="text-sm text-amber-400/70 mb-2">
                                <?= $team->name_ar ?>
                            </p>

                            <p class="text-sm text-amber-400 mb-1 font-semibold">
                                <?= $team->designation_en ?>
                            </p>

                            <p class="text-xs text-slate-400">
                                <?= $team->designation_ar ?>
                            </p>

                        </div>
                    </div>

                    <div class="p-6 border-t border-amber-600/20">
                        <div class="flex gap-3">
                            
                            <a href="mailto:<?= $team->caption_en ?>" 
                            class="flex-1 flex items-center justify-center gap-2 py-2 px-4 bg-amber-600/10 hover:bg-amber-600/20 border border-amber-600/30 rounded-lg text-amber-400 text-sm transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Email
                            </a>

                            <a href="<?= Yii::$app->urlManager->createUrl(['team/profile', 'id' => $team->team_id]) ?>"
                            class="flex-1 flex items-center justify-center gap-2 py-2 px-4 bg-amber-600/10 hover:bg-amber-600/20 border border-amber-600/30 rounded-lg text-amber-400 text-sm transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                Profile
                            </a>

                        </div>
                    </div>

                </div>

            <?php endforeach; ?>

            </div>

        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-slate-800">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="relative rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1645732713563-e880df12bde6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxpc2xhbWljJTIwYXJjaGl0ZWN0dXJlJTIwaW50ZXJpb3J8ZW58MXx8fHwxNzYyNzQ1NDczfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Islamic Architecture" class="w-full h-[600px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-800 via-slate-800/50 to-transparent"></div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-gradient-to-br from-amber-600 to-amber-800 rounded-lg opacity-20 blur-3xl"></div>
                </div>
                
                <div>
                    <div class="inline-block px-4 py-1 bg-amber-600/20 border border-amber-600/40 rounded-full mb-4">
                        <p class="text-amber-400 text-sm">About Our Firm</p>
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        Trusted Legal Partner in Kuwait
                    </h2>
                    
                    <p class="text-xl text-slate-400 mb-6">
                        Mohammed mejbil AlEnezi Group has been a cornerstone of legal excellence in Kuwait for over three decades, combining traditional values with modern legal expertise.
                    </p>
                    
                    <p class="text-slate-400 mb-8">
                        Our firm is built on a foundation of integrity, expertise, and unwavering commitment to our clients. We understand the unique legal landscape of Kuwait and the broader Gulf region, offering culturally sensitive and strategically sound legal solutions.
                    </p>
                    
                    <div class="space-y-6 mb-8">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-amber-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Excellence in Practice</h3>
                                <p class="text-slate-400">Recognized for outstanding legal service and client satisfaction across Kuwait.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-amber-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Client Protection</h3>
                                <p class="text-slate-400">Your interests are our priority, defended with vigor and strategic precision.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-amber-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-white mb-2">Results-Driven</h3>
                                <p class="text-slate-400">Focused on achieving the best possible outcomes for every client we serve.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative py-20 bg-slate-900">
        <div class="absolute inset-0 islamic-pattern opacity-5"></div>
        
        <div class="relative z-10 container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-1 bg-amber-600/20 border border-amber-600/40 rounded-full mb-4">
                    <p class="text-amber-400 text-sm">Get In Touch</p>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                    Schedule a consultation with our legal experts today
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div>
                    <div class="bg-slate-800 border border-amber-600/20 rounded-lg p-8 mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-6">Send Us a Message</h3>
                        
                         <!-- IMPORTANT: FORM ACTION + METHOD + ID -->
    <form id="contactForm" class="space-y-6">

    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>">

    <div class="grid md:grid-cols-2 gap-4">
        <div>
            <label class="block text-slate-400 mb-2 text-sm font-medium">Full Name</label>
            <input type="text" name="full_name" id="full_name" placeholder="Your name"
                class="w-full px-4 py-3 bg-slate-900 border border-amber-600/30 text-white rounded-lg">
        </div>

        <div>
            <label class="block text-slate-400 mb-2 text-sm font-medium">Email Address</label>
            <input type="email" name="email" id="email" placeholder="your.email@example.com"
                class="w-full px-4 py-3 bg-slate-900 border border-amber-600/30 text-white rounded-lg">
        </div>
    </div>

    <div>
        <label class="block text-slate-400 mb-2 text-sm font-medium">Phone Number</label>
        <input type="tel" name="phone" id="phone" placeholder="+965 XXXX XXXX"
            class="w-full px-4 py-3 bg-slate-900 border border-amber-600/30 text-white rounded-lg">
    </div>

    <div>
        <label class="block text-slate-400 mb-2 text-sm font-medium">Legal Matter</label>
        <input type="text" name="subject" id="subject" placeholder="Subject"
            class="w-full px-4 py-3 bg-slate-900 border border-amber-600/30 text-white rounded-lg">
    </div>

    <div>
        <label class="block text-slate-400 mb-2 text-sm font-medium">Message</label>
        <textarea name="message" id="message" rows="5"
            class="w-full px-4 py-3 bg-slate-900 border border-amber-600/30 text-white rounded-lg"></textarea>
    </div>

    <button type="submit"
        class="w-full py-4 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-900 font-semibold rounded-lg">
        Submit Inquiry
    </button>
</form>

<p id="successMsg" class="text-green-400 mt-4 hidden">Message sent successfully!</p>
<p id="errorMsg" class="text-red-400 mt-4 hidden">Something went wrong!</p>


<!-- Messages -->
<p id="successMsg" class="text-green-400 mt-4 hidden">Message sent successfully!</p>
<p id="errorMsg" class="text-red-400 mt-4 hidden">Something went wrong!</p>


<!-- Response Messages -->
<p id="successMsg" class="text-green-400 mt-4 hidden">Message sent successfully!</p>
<p id="errorMsg" class="text-red-400 mt-4 hidden">Something went wrong!</p>

<p id="successMsg" class="text-green-400 mt-4 hidden">Message sent successfully!</p>
<p id="errorMsg" class="text-red-400 mt-4 hidden">Something went wrong!</p>


<!-- Success Message -->
<p id="successMsg" class="text-green-400 mt-4 hidden">Message sent successfully!</p>
<p id="errorMsg" class="text-red-400 mt-4 hidden">Something went wrong!</p>
                    </div>
                </div>
                
                <div>
                    <div class="bg-slate-800 border border-amber-600/20 rounded-lg p-8 mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-6">Office Information</h3>
                        
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-amber-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Address</h4>
                                    <p class="text-slate-400">Al-Shuhada Street, Block 7<br>Kuwait City, Kuwait 13068</p>
                                    <p class="text-amber-400/70 text-sm mt-1">شارع الشهداء، قطعة 7، مدينة الكويت</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-amber-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Phone</h4>
                                    <p class="text-slate-400">+965 2222 3333</p>
                                    <p class="text-slate-400">+965 9999 8888 (Mobile)</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-amber-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Email</h4>
                                    <p class="text-slate-400">info@malenezi.com</p>
                                    <p class="text-slate-400">contact@malenezi.com</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-amber-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Office Hours</h4>
                                    <p class="text-slate-400">Sunday - Thursday: 8:00 AM - 5:00 PM</p>
                                    <p class="text-slate-400">Saturday: 9:00 AM - 2:00 PM</p>
                                    <p class="text-amber-400/70 text-sm mt-1">Friday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-amber-600/20 to-amber-800/20 border border-amber-600/40 rounded-lg p-8">
                        <h4 class="text-xl font-semibold text-white mb-3">Emergency Legal Assistance</h4>
                        <p class="text-slate-400 mb-4">
                            For urgent legal matters requiring immediate attention, our on-call attorneys are available 24/7.
                        </p>
                        <a href="tel:+96566667777" class="inline-flex items-center gap-2 w-full justify-center py-3 border-2 border-amber-600 text-amber-400 hover:bg-amber-600/10 font-semibold rounded-lg transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Emergency Hotline: +965 6666 7777
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-amber-600/20 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 flex items-center justify-center">
                            <img src="https://raw.githubusercontent.com/user-attachments/assets/ce24821c-f580-30ec-45ac-1ce88ee98556" alt="Logo" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Mohammed mejbil AlEnezi Group</h3>
                            <p class="text-xs text-slate-400">مجموعة المحامي محمد مجبل العنزي</p>
                        </div>
                    </div>
                    <p class="text-slate-400 mb-4 max-w-md">
                        Providing exceptional legal services in Kuwait since 1995. Our commitment to excellence and client satisfaction remains unwavering.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg flex items-center justify-center text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg flex items-center justify-center text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg flex items-center justify-center text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg flex items-center justify-center text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-slate-400 hover:text-amber-400 transition-colors">Home</a></li>
                        <li><a href="#services" class="text-slate-400 hover:text-amber-400 transition-colors">Services</a></li>
                        <li><a href="#team" class="text-slate-400 hover:text-amber-400 transition-colors">Team</a></li>
                        <li><a href="#about" class="text-slate-400 hover:text-amber-400 transition-colors">About Us</a></li>
                        <li><a href="#contact" class="text-slate-400 hover:text-amber-400 transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><button onclick="openPrivacyPolicy()" class="text-slate-400 hover:text-amber-400 transition-colors">Privacy Policy</button></li>
                        <li><a href="#" class="text-slate-400 hover:text-amber-400 transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-amber-400 transition-colors">Professional Ethics</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-amber-400 transition-colors">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-amber-600/20">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-slate-400 text-sm">
                        © 2025 Mohammed mejbil AlEnezi Group. All rights reserved.
                    </p>
                    <p class="text-slate-500 text-sm">
                        Regulated by the Kuwait Bar Association
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyPolicyModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-slate-900/95 backdrop-blur-sm">
        <div class="relative w-full max-w-4xl max-h-[90vh] bg-slate-800 border border-amber-600/20 rounded-lg overflow-hidden">
            <!-- Header -->
            <div class="sticky top-0 bg-slate-900 border-b border-amber-600/20 px-8 py-6 flex items-center justify-between">
                <h2 class="text-3xl font-bold text-white">Privacy Policy</h2>
                <button onclick="closePrivacyPolicy()" class="p-2 hover:bg-amber-600/10 rounded-lg transition-colors">
                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Content -->
            <div class="overflow-y-auto max-h-[calc(90vh-180px)] px-8 py-6">
                <div class="prose prose-invert prose-amber max-w-none">
                    <p class="text-slate-400 mb-6"><strong>Last Updated:</strong> January 2025</p>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">1. Introduction</h3>
                        <p class="text-slate-400 mb-4">
                            Mohammed mejbil AlEnezi Group ("we," "our," or "us") is committed to protecting your privacy. 
                            This Privacy Policy explains how we collect, use, disclose, and safeguard your information when 
                            you visit our website or use our legal services.
                        </p>
                        <p class="text-slate-400">
                            Please read this privacy policy carefully. If you do not agree with the terms of this privacy 
                            policy, please do not access the site or use our services.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">2. Information We Collect</h3>
                        
                        <h4 class="text-xl font-semibold text-amber-400 mb-3">2.1 Personal Information</h4>
                        <p class="text-slate-400 mb-4">We may collect personal information that you voluntarily provide to us when you:</p>
                        <ul class="list-disc list-inside text-slate-400 mb-4 space-y-2">
                            <li>Request a consultation or legal services</li>
                            <li>Contact us through our website forms</li>
                            <li>Subscribe to our newsletter or communications</li>
                            <li>Engage our legal services</li>
                        </ul>
                        <p class="text-slate-400 mb-4">This information may include:</p>
                        <ul class="list-disc list-inside text-slate-400 mb-4 space-y-2">
                            <li>Full name and contact information (email, phone, address)</li>
                            <li>Case-related information and legal matters</li>
                            <li>Financial information for billing purposes</li>
                            <li>Employment and business information</li>
                            <li>Any other information you choose to provide</li>
                        </ul>

                        <h4 class="text-xl font-semibold text-amber-400 mb-3">2.2 Automatically Collected Information</h4>
                        <p class="text-slate-400 mb-4">When you visit our website, we may automatically collect certain information about your device, including:</p>
                        <ul class="list-disc list-inside text-slate-400 mb-4 space-y-2">
                            <li>IP address and browser type</li>
                            <li>Operating system and device information</li>
                            <li>Pages visited and time spent on pages</li>
                            <li>Referring website addresses</li>
                            <li>Click and navigation patterns</li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">3. How We Use Your Information</h3>
                        <p class="text-slate-400 mb-4">We use the information we collect to:</p>
                        <ul class="list-disc list-inside text-slate-400 mb-4 space-y-2">
                            <li>Provide, operate, and maintain our legal services</li>
                            <li>Process and manage legal cases and consultations</li>
                            <li>Communicate with you about your legal matters</li>
                            <li>Send you updates, newsletters, and marketing communications (with your consent)</li>
                            <li>Improve our website and services</li>
                            <li>Comply with legal obligations and professional regulations</li>
                            <li>Prevent fraud and enhance security</li>
                            <li>Respond to legal requests and prevent harm</li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">4. Legal Professional Privilege</h3>
                        <p class="text-slate-400 mb-4">
                            As a law firm, we are bound by attorney-client privilege and professional confidentiality rules 
                            as governed by the Kuwait Bar Association. All communications and information shared with us in 
                            the course of legal representation are protected by these privileges and will be maintained in 
                            strict confidence, except as required by law or with your explicit consent.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">5. Information Sharing and Disclosure</h3>
                        <p class="text-slate-400 mb-4">We may share your information in the following circumstances:</p>
                        <ul class="list-disc list-inside text-slate-400 mb-4 space-y-2">
                            <li><strong>With Your Consent:</strong> We may share your information when you give us permission</li>
                            <li><strong>Legal Obligations:</strong> When required by law, court order, or governmental request</li>
                            <li><strong>Professional Service Providers:</strong> With experts, consultants, or service providers who assist in legal matters (under confidentiality agreements)</li>
                            <li><strong>Business Transfers:</strong> In connection with any merger, sale of assets, or acquisition</li>
                            <li><strong>Protection of Rights:</strong> To protect our rights, property, or safety, and that of our clients and others</li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">6. Data Security</h3>
                        <p class="text-slate-400 mb-4">
                            We implement appropriate technical and organizational security measures to protect your personal 
                            information against unauthorized access, alteration, disclosure, or destruction. These measures include:
                        </p>
                        <ul class="list-disc list-inside text-slate-400 mb-4 space-y-2">
                            <li>Encryption of sensitive data in transit and at rest</li>
                            <li>Secure servers and databases with restricted access</li>
                            <li>Regular security assessments and updates</li>
                            <li>Staff training on data protection and confidentiality</li>
                            <li>Physical security measures at our offices</li>
                        </ul>
                        <p class="text-slate-400">
                            However, no method of transmission over the Internet or electronic storage is 100% secure. 
                            While we strive to protect your personal information, we cannot guarantee absolute security.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">7. Data Retention</h3>
                        <p class="text-slate-400 mb-4">
                            We retain your personal information for as long as necessary to fulfill the purposes outlined in 
                            this Privacy Policy, unless a longer retention period is required or permitted by law. Legal and 
                            client files are retained in accordance with Kuwait Bar Association regulations and professional 
                            standards, typically for a minimum of 7-10 years after case completion.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">8. Your Rights</h3>
                        <p class="text-slate-400 mb-4">Under applicable data protection laws, you have the following rights:</p>
                        <ul class="list-disc list-inside text-slate-400 mb-4 space-y-2">
                            <li><strong>Right to Access:</strong> Request copies of your personal information</li>
                            <li><strong>Right to Correction:</strong> Request correction of inaccurate information</li>
                            <li><strong>Right to Deletion:</strong> Request deletion of your personal information (subject to legal and professional obligations)</li>
                            <li><strong>Right to Restrict Processing:</strong> Request limitation on how we use your information</li>
                            <li><strong>Right to Data Portability:</strong> Request transfer of your information to another party</li>
                            <li><strong>Right to Object:</strong> Object to our processing of your information</li>
                            <li><strong>Right to Withdraw Consent:</strong> Withdraw consent where processing is based on consent</li>
                        </ul>
                        <p class="text-slate-400">To exercise these rights, please contact us using the information provided below.</p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">9. Cookies and Tracking Technologies</h3>
                        <p class="text-slate-400 mb-4">
                            We use cookies and similar tracking technologies to enhance your browsing experience, analyze 
                            website traffic, and understand where our visitors are coming from. You can control cookie 
                            settings through your browser preferences.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">10. Children's Privacy</h3>
                        <p class="text-slate-400 mb-4">
                            Our services are not directed to individuals under the age of 18. We do not knowingly collect 
                            personal information from children. If you believe we have collected information from a child, 
                            please contact us immediately.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">11. International Data Transfers</h3>
                        <p class="text-slate-400 mb-4">
                            Your information may be transferred to and processed in countries other than Kuwait. We ensure 
                            that such transfers comply with applicable data protection laws and that appropriate safeguards 
                            are in place.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">12. Changes to This Privacy Policy</h3>
                        <p class="text-slate-400 mb-4">
                            We may update this Privacy Policy from time to time to reflect changes in our practices or for 
                            legal, operational, or regulatory reasons. We will notify you of any material changes by posting 
                            the new Privacy Policy on our website with an updated "Last Updated" date.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">13. Governing Law</h3>
                        <p class="text-slate-400 mb-4">
                            This Privacy Policy is governed by and construed in accordance with the laws of the State of Kuwait. 
                            Any disputes relating to this Privacy Policy shall be subject to the exclusive jurisdiction of the 
                            courts of Kuwait.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h3 class="text-2xl font-semibold text-white mb-4">14. Contact Us</h3>
                        <p class="text-slate-400 mb-4">
                            If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, 
                            please contact us:
                        </p>
                        <div class="bg-amber-600/10 border border-amber-600/30 rounded-lg p-6">
                            <p class="text-white font-semibold mb-2">Mohammed mejbil AlEnezi Group</p>
                            <p class="text-slate-400 mb-1">Al-Shuhada Street, Block 7</p>
                            <p class="text-slate-400 mb-1">Kuwait City, Kuwait 13068</p>
                            <p class="text-slate-400 mb-1">Email: privacy@malenezi.com</p>
                            <p class="text-slate-400 mb-1">Phone: +965 2222 3333</p>
                            <p class="text-amber-400/70 text-sm mt-2">شارع الشهداء، قطعة 7، مدينة الكويت</p>
                        </div>
                    </section>

                    <div class="mt-8 pt-6 border-t border-amber-600/20">
                        <p class="text-slate-500 text-sm">
                            By using our website or services, you acknowledge that you have read, understood, and agree 
                            to be bound by this Privacy Policy.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="sticky bottom-0 bg-slate-900 border-t border-amber-600/20 px-8 py-4">
                <button onclick="closePrivacyPolicy()" class="w-full px-6 py-3 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-900 font-semibold rounded-lg transition-all">
                    Close
                </button>
            </div>
        </div>
    </div>

    <script>
        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');
        const track = document.getElementById('carouselTrack');

        function goToSlide(n) {
            currentSlide = n;
            updateCarousel();
        }

        function moveCarousel(direction) {
            currentSlide += direction;
            if (currentSlide >= slides.length) currentSlide = 0;
            if (currentSlide < 0) currentSlide = slides.length - 1;
            updateCarousel();
        }

        function updateCarousel() {
            track.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        // Auto-advance carousel every 8 seconds
        setInterval(() => {
            moveCarousel(1);
        }, 8000);

        // Language Toggle
        function toggleLanguage() {
            const html = document.documentElement;
            const currentLang = html.getAttribute('lang');
            const langToggle = document.getElementById('lang-toggle');
            
            if (currentLang === 'en') {
                html.setAttribute('lang', 'ar');
                html.setAttribute('dir', 'rtl');
                langToggle.textContent = 'EN';
            } else {
                html.setAttribute('lang', 'en');
                html.setAttribute('dir', 'ltr');
                langToggle.textContent = 'العربية';
            }
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add fade-in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        // Privacy Policy Modal Functions
        function openPrivacyPolicy() {
            const modal = document.getElementById('privacyPolicyModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closePrivacyPolicy() {
            const modal = document.getElementById('privacyPolicyModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('privacyPolicyModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePrivacyPolicy();
            }
        });

        // Close modal on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePrivacyPolicy();
            }
        });
    </script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$("#contactForm").on("submit", function(e) {
    e.preventDefault(); // stop refreshing page

    $.ajax({
        url: "<?= \yii\helpers\Url::to(['site/save-contact']) ?>",
        type: "POST",
        data: $(this).serialize(),
        beforeSend: function(xhr) {
            xhr.setRequestHeader('X-CSRF-Token', $('input[name="_csrf"]').val());
        },
        success: function(res) {
            if (res.status === 200) {
                $("#successMsg").removeClass("hidden");
                $("#errorMsg").addClass("hidden");
                $("#contactForm")[0].reset();
            } else {
                $("#errorMsg").removeClass("hidden");
                $("#successMsg").addClass("hidden");
            }
        },
        error: function() {
            $("#errorMsg").removeClass("hidden");
            $("#successMsg").addClass("hidden");
        }
    });
});
</script>






</body>
</html>


