<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohammed Mejbil AlEnezi Group - Premier Legal Services in Kuwait</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        /* Auto-scroll banner animation */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
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

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* RTL Support */
        [dir="rtl"] {
            direction: rtl;
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
    </style>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .banner-swiper .swiper-wrapper {
            transition-timing-function: linear !important;
        }

        .banner-swiper .swiper-slide {
            width: auto !important;
            white-space: nowrap;
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
                    <div class="w-16 h-16 flex items-center justify-center p-1 bg-white rounded-lg">
                        <img src="/image/logo.png" alt="Mohammed Mejbil AlEnezi Group Logo" class="w-full h-full object-contain">
                    </div>
                    <div class="hidden xl:flex flex-col">
                        <h1 class="text-amber-400 text-lg font-semibold">Mohammed mejbil AlEnezi Group</h1>
                        <p class="text-xs text-slate-400">مجموعة المحامي محمد مجبل العنزي</p>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#home" class="text-slate-200 hover:text-amber-400 transition-colors">Home</a>
                    <a href="#services" class="text-slate-200 hover:text-amber-400 transition-colors">Services</a>
                    <a href="#about" class="text-slate-200 hover:text-amber-400 transition-colors">About</a>
                    <a href="#team" class="text-slate-200 hover:text-amber-400 transition-colors">Team</a>
                    <a href="#contact" class="text-slate-200 hover:text-amber-400 transition-colors">Contact</a>
                </nav>

                <!-- CTA -->
                <div class="flex items-center gap-3">
                    <button onclick="toggleLanguage()" class="flex items-center gap-2 px-3 py-2 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg text-amber-400 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                        </svg>
                        <span class="text-sm" id="lang-toggle">العربية</span>
                    </button>

                    <a href="#contact" class="px-6 py-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-900 font-semibold rounded-lg transition-all">
                        Consultation
                    </a>
                </div>
            </div>
        </div>
    </header>

   


    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1672985485075-b9d3ff3b7784?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxrdXdhaXQlMjBjaXR5JTIwc2t5bGluZXxlbnwxfHx8fDE3NjI3MjU5OTV8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Kuwait City Skyline" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-slate-900/90 to-slate-900/80"></div>
        </div>

        <!-- Islamic Pattern Overlay -->
        <div class="absolute inset-0 islamic-pattern opacity-30"></div>

        <!-- Content -->
        <div class="relative z-10 container mx-auto px-4 py-20 text-center">
            <div class="max-w-4xl mx-auto">
                <div class="mb-6 inline-block px-6 py-2 bg-amber-600/20 border border-amber-600/40 rounded-full">
                    <p class="text-amber-400 text-sm">Established in Kuwait Since 1995</p>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white">
                    Excellence in Legal
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-600">
                        Counsel & Representation
                    </span>
                </h1>

                <p class="text-xl md:text-2xl text-slate-300 mb-4 max-w-3xl mx-auto">
                    Providing premier legal services across Kuwait with integrity, expertise, and unwavering commitment to justice
                </p>

                <p class="text-lg text-amber-400/80 mb-12">
                    نقدم خدمات قانونية متميزة في جميع أنحاء الكويت بنزاهة وخبرة والتزام ثابت بالعدالة
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                    <a href="#contact" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-900 font-semibold rounded-lg transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Schedule Consultation
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 px-8 py-4 border-2 border-amber-600 text-amber-400 hover:bg-amber-600/10 font-semibold rounded-lg transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contact Us
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-8 max-w-2xl mx-auto mb-16">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-400 mb-2">30+</div>
                        <div class="text-slate-400">Years Experience</div>
                    </div>
                    <div class="text-center border-x border-amber-600/30">
                        <div class="text-4xl font-bold text-amber-400 mb-2">500+</div>
                        <div class="text-slate-400">Cases Won</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-400 mb-2">98%</div>
                        <div class="text-slate-400">Success Rate</div>
                    </div>
                </div>

                <!-- Auto-Scroll Banner -->
                <div class="relative overflow-hidden bg-amber-600/10 border-y border-amber-600/30 py-4">
                    <div class="flex scroll-banner whitespace-nowrap">
                        <div class="flex items-center gap-8 px-8">
                            <span class="text-amber-400 font-semibold">⚖️ Corporate Law</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">📋 Commercial Litigation</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">👨‍👩‍👧 Family Law</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">🏢 Real Estate Law</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">📝 Contract Law</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">🌍 International Law</span>
                            <span class="text-slate-400">•</span>
                        </div>
                        <!-- Duplicate for seamless loop -->
                        <div class="flex items-center gap-8 px-8">
                            <span class="text-amber-400 font-semibold">⚖️ Corporate Law</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">📋 Commercial Litigation</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">👨‍👩‍👧 Family Law</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">🏢 Real Estate Law</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">📝 Contract Law</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-amber-400 font-semibold">🌍 International Law</span>
                            <span class="text-slate-400">•</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Bottom Border -->
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-amber-600 to-transparent"></div>
    </section>


     <!-- Swiper Scroll Banner -->
    <div class="relative bg-amber-600/10 border-y border-amber-600/30 py-4">
        <div class="swiper banner-swiper">
            <div class="swiper-wrapper">
                <!-- Each item is a Swiper slide -->
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    ⚖️ <span>Corporate Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    📋 <span>Commercial Litigation</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    👨‍👩‍👧 <span>Family Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    🏢 <span>Real Estate Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    📝 <span>Contract Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    🌍 <span>International Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    ⚖️ <span>Corporate Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    📋 <span>Commercial Litigation</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    👨‍👩‍👧 <span>Family Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    🏢 <span>Real Estate Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    📝 <span>Contract Law</span>
                </div>
                <div class="swiper-slide text-amber-400 font-semibold flex items-center justify-center gap-2">
                    🌍 <span>International Law</span>
                </div>
            </div>
        </div>

        <!-- Optional gradient edges for a seamless look -->
        <div class="absolute top-0 left-0 h-full w-16 bg-gradient-to-r from-amber-600/10 via-amber-600/40 to-transparent pointer-events-none"></div>
        <div class="absolute top-0 right-0 h-full w-16 bg-gradient-to-l from-amber-600/10 via-amber-600/40 to-transparent pointer-events-none"></div>
    </div>
    <?= $this->render("site-services") ?>
    <?= $this->render("site-about") ?>
    <?= $this->render("site-contact") ?>
    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-amber-600/20 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-24 h-24 flex items-center justify-center bg-white p-1 rounded-lg">
                            <img src="/image/logo.png" alt="Logo" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h6 class="text-xl font-semibold text-slate-600">Mohammed mejbil AlEnezi Group</h6>
                            <p class="text-xs text-slate-400">مجموعة المحامي محمد مجبل العنزي</p>
                        </div>
                    </div>
                    <p class="text-slate-400 mb-4 max-w-md">
                        Providing exceptional legal services in Kuwait since 1995. Our commitment to excellence and client satisfaction remains unwavering.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg flex items-center justify-center text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg flex items-center justify-center text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg flex items-center justify-center text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-amber-600/20 hover:bg-amber-600/30 border border-amber-600/30 rounded-lg flex items-center justify-center text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-slate-400 hover:text-amber-400 transition-colors">Home</a></li>
                        <li><a href="#services" class="text-slate-400 hover:text-amber-400 transition-colors">Services</a></li>
                        <li><a href="#about" class="text-slate-400 hover:text-amber-400 transition-colors">About Us</a></li>
                        <li><a href="#contact" class="text-slate-400 hover:text-amber-400 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-slate-400 hover:text-amber-400 transition-colors">Privacy Policy</a></li>
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


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const bannerSwiper = new Swiper(".banner-swiper", {
            slidesPerView: "auto",
            spaceBetween: 40,
            loop: true,
            speed: 4000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            allowTouchMove: true,
            freeMode: {
                enabled: true,
                sticky: false,
                momentumBounce: false,
            },
            breakpoints: {
                640: {
                    spaceBetween: 60
                },
                1024: {
                    spaceBetween: 80
                },
            },
        });
    </script>


    <script>
        // Language Toggle (Basic implementation - can be enhanced with full translation)
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
    </script>
</body>

</html>