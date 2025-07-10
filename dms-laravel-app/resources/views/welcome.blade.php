<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMS - Dervox Monitoring Server</title>
    <meta name="description" content="home pour DMS">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                container: {
                    center: true,
                    padding: "1rem",
                },
                screens: {
                    xs: "450px",
                    sm: "575px",
                    md: "768px",
                    lg: "992px",
                    xl: "1200px",
                    "2xl": "1400px",
                },
                extend: {
                    colors: {
                        current: "currentColor",
                        transparent: "transparent",
                        white: "#FFFFFF",
                        black: "#121723",
                        dark: "#1D2430",
                        primary: "#4A6CF7",
                        yellow: "#FBB040",
                        "bg-color-dark": "#171C28",
                        "body-color": {
                            DEFAULT: "#788293",
                            dark: "#959CB1",
                        },
                        stroke: {
                            stroke: "#E3E8EF",
                            dark: "#353943",
                        },
                        gray: {
                            dark: "#1E232E",
                            light: "#F0F2F9",
                        },
                    },
                    boxShadow: {
                        signUp: "0px 5px 10px rgba(4, 10, 34, 0.2)",
                        one: "0px 2px 3px rgba(7, 7, 77, 0.05)",
                        two: "0px 5px 10px rgba(6, 8, 15, 0.1)",
                        three: "0px 5px 15px rgba(6, 8, 15, 0.05)",
                        sticky: "inset 0 -1px 0 0 rgba(0, 0, 0, 0.1)",
                        "sticky-dark": "inset 0 -1px 0 0 rgba(255, 255, 255, 0.1)",
                        "feature-2": "0px 10px 40px rgba(48, 86, 211, 0.12)",
                        submit: "0px 5px 20px rgba(4, 10, 34, 0.1)",
                        "submit-dark": "0px 5px 20px rgba(4, 10, 34, 0.1)",
                        btn: "0px 1px 2px rgba(4, 10, 34, 0.15)",
                        "btn-hover": "0px 1px 2px rgba(0, 0, 0, 0.15)",
                        "btn-light": "0px 1px 2px rgba(0, 0, 0, 0.1)",
                    },
                },
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
        .sticky .header-logo {
            @apply py-5 lg:py-2;
        }
        .sticky .menu-scroll.active {
            @apply opacity-70;
        }
        .theme-toggler {
            @apply relative inline-flex h-10 w-10 items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary hover:bg-opacity-20;
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-dark">
    <!-- Header -->
    <header class="header left-0 top-0 z-40 flex w-full items-center absolute bg-transparent">
        <div class="container">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4 xl:mr-12">
                    <a href="/telecharger" class="header-logo block w-full py-8">
                        <img src="/logodms-removebg-preview.png" alt="logo" class="w-full dark:hidden" width="140" height="30">
                        <img src="/logodms-removebg-preview.png" alt="logo" class="hidden w-full dark:block" width="100" height="90">
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div>
                        <!-- Mobile Menu Button -->
                        <button id="navbarToggler" aria-label="Mobile Menu" class="absolute right-4 top-1/2 block translate-y-[-50%] rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-1.5 block h-0.5 w-[30px] bg-black transition-all duration-300 dark:bg-white"></span>
                            <span class="relative my-1.5 block h-0.5 w-[30px] bg-black transition-all duration-300 dark:bg-white"></span>
                            <span class="relative my-1.5 block h-0.5 w-[30px] bg-black transition-all duration-300 dark:bg-white"></span>
                        </button>
                        
                        <!-- Navigation Menu -->
                        <nav id="navbarCollapse" class="navbar absolute right-0 z-30 w-[250px] rounded border-[.5px] border-body-color/50 bg-white px-6 py-4 duration-300 dark:border-body-color/20 dark:bg-dark lg:visible lg:static lg:w-auto lg:border-none lg:!bg-transparent lg:p-0 lg:opacity-100 invisible top-[120%] opacity-0">
                            <ul class="block lg:flex lg:space-x-12">
                                <li class="group relative">
                                    <a href="/welcome" class="flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 text-primary dark:text-white">
                                        Home
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="/apropos" class="flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 text-dark hover:text-primary dark:text-white/70 dark:hover:text-white">
                                        A propos
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="/prix" class="flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 text-dark hover:text-primary dark:text-white/70 dark:hover:text-white">
                                        prix
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="/contact" class="flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 text-dark hover:text-primary dark:text-white/70 dark:hover:text-white">
                                        Support
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="flex items-center justify-end pr-16 lg:pr-0">
                       
                        <a href="/telecharger" class="ease-in-up shadow-btn hover:shadow-btn-hover hidden rounded-sm bg-primary px-8 py-3 text-base font-medium text-white transition duration-300 hover:bg-opacity-90 md:block md:px-9 lg:px-6 xl:px-9">
                            Telecharger
                        </a>
                        <!-- Theme Toggler -->
                        <button id="themeToggler" class="theme-toggler ml-4">
                            <i id="sunIcon" class="fas fa-sun text-xl"></i>
                            <i id="moonIcon" class="fas fa-moon text-xl hidden"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative z-10 overflow-hidden bg-white pb-16 pt-[120px] dark:bg-gray-dark md:pb-[120px] md:pt-[150px] xl:pb-[160px] xl:pt-[180px] 2xl:pb-[200px] 2xl:pt-[210px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto max-w-[800px] text-center">
                        <h1 class="mb-5 text-3xl font-bold leading-tight text-black dark:text-white sm:text-4xl sm:leading-tight md:text-5xl md:leading-tight">
                            Modèle DMS-Dervox Monitoring Server-pour startup & SaaS
                        </h1>
                        <p class="mb-12 text-base !leading-relaxed text-body-color dark:text-body-color-dark sm:text-lg md:text-xl">
                            Notre solution DMS, de surveillance serveur et de sécurité VPN garantit performance,
                            confidentialité et protection optimale. Elle intègre un monitoring en temps réel et
                            des protocoles sécurisés. Moderne et fluide, elle répond aux besoins des entreprises
                        </p>
                        <div class="flex flex-col items-center justify-center space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0">
                            <a href="/telecharger" class="rounded-sm bg-primary px-8 py-4 text-base font-semibold text-white duration-300 ease-in-out hover:bg-primary/80">
                                🔥 Telecharger
                            </a>
                            <a href="/dashboard" class="inline-block rounded-sm bg-black px-8 py-4 text-base font-semibold text-white duration-300 ease-in-out hover:bg-black/90 dark:bg-white/10 dark:text-white dark:hover:bg-white/5">
                                DMS en ligne
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Background SVG -->
        <div class="absolute right-0 top-0 z-[-1] opacity-30 lg:opacity-100">
            <svg width="450" height="556" viewBox="0 0 450 556" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="277" cy="63" r="225" fill="url(#paint0_linear_25:217)"/>
                <circle cx="17.9997" cy="182" r="18" fill="url(#paint1_radial_25:217)"/>
                <circle cx="76.9997" cy="288" r="34" fill="url(#paint2_radial_25:217)"/>
                <circle cx="325.486" cy="302.87" r="180" transform="rotate(-37.6852 325.486 302.87)" fill="url(#paint3_linear_25:217)"/>
                <circle opacity="0.8" cx="184.521" cy="315.521" r="132.862" transform="rotate(114.874 184.521 315.521)" stroke="url(#paint4_linear_25:217)"/>
                <circle opacity="0.8" cx="356" cy="290" r="179.5" transform="rotate(-30 356 290)" stroke="url(#paint5_linear_25:217)"/>
                <circle opacity="0.8" cx="191.659" cy="302.659" r="133.362" transform="rotate(133.319 191.659 302.659)" fill="url(#paint6_linear_25:217)"/>
                <defs>
                    <linearGradient id="paint0_linear_25:217" x1="-54.5003" y1="-178" x2="222" y2="288" gradientUnits="userSpaceOnUse">
                        <stop stopColor="#4A6CF7"/>
                        <stop offset="1" stopColor="#4A6CF7" stopOpacity="0"/>
                    </linearGradient>
                    <radialGradient id="paint1_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(17.9997 182) rotate(90) scale(18)">
                        <stop offset="0.145833" stopColor="#4A6CF7" stopOpacity="0"/>
                        <stop offset="1" stopColor="#4A6CF7" stopOpacity="0.08"/>
                    </radialGradient>
                    <radialGradient id="paint2_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(76.9997 288) rotate(90) scale(34)">
                        <stop offset="0.145833" stopColor="#4A6CF7" stopOpacity="0"/>
                        <stop offset="1" stopColor="#4A6CF7" stopOpacity="0.08"/>
                    </radialGradient>
                    <linearGradient id="paint3_linear_25:217" x1="226.775" y1="-66.1548" x2="292.157" y2="351.421" gradientUnits="userSpaceOnUse">
                        <stop stopColor="#4A6CF7"/>
                        <stop offset="1" stopColor="#4A6CF7" stopOpacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint4_linear_25:217" x1="184.521" y1="182.159" x2="184.521" y2="448.882" gradientUnits="userSpaceOnUse">
                        <stop stopColor="#4A6CF7"/>
                        <stop offset="1" stopColor="white" stopOpacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint5_linear_25:217" x1="356" y1="110" x2="356" y2="470" gradientUnits="userSpaceOnUse">
                        <stop stopColor="#4A6CF7"/>
                        <stop offset="1" stopColor="white" stopOpacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint6_linear_25:217" x1="118.524" y1="29.2497" x2="166.965" y2="338.63" gradientUnits="userSpaceOnUse">
                        <stop stopColor="#4A6CF7"/>
                        <stop offset="1" stopColor="#4A6CF7" stopOpacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 lg:py-[120px]">
        <div class="container mx-auto px-4">
            <div class="mb-16 flex w-full max-w-[570px] flex-col items-center text-center lg:mb-[90px]">
                <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white lg:text-[40px] xl:text-[36px]">
                    Fonctionnalités Principales
                </h2>
                <p class="text-base text-body-color dark:text-body-color-dark">
                    Découvrez les fonctionnalités avancées de notre solution DMS
                </p>
            </div>
            
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div class="w-full">
                    <div class="group mb-8 flex w-full max-w-[360px] cursor-pointer items-center text-center">
                        <div class="mr-6 flex h-[90px] w-full max-w-[90px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary">
                            <i class="fas fa-server text-3xl"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-3 text-xl font-semibold text-dark dark:text-white">
                                Monitoring Serveur
                            </h4>
                            <p class="text-base text-body-color dark:text-body-color-dark">
                                Surveillance en temps réel de vos serveurs avec alertes automatiques
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="w-full">
                    <div class="group mb-8 flex w-full max-w-[360px] cursor-pointer items-center text-center">
                        <div class="mr-6 flex h-[90px] w-full max-w-[90px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary">
                            <i class="fas fa-shield-alt text-3xl"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-3 text-xl font-semibold text-dark dark:text-white">
                                Sécurité VPN
                            </h4>
                            <p class="text-base text-body-color dark:text-body-color-dark">
                                Protocoles de sécurité avancés pour une protection optimale
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="w-full">
                    <div class="group mb-8 flex w-full max-w-[360px] cursor-pointer items-center text-center">
                        <div class="mr-6 flex h-[90px] w-full max-w-[90px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary">
                            <i class="fas fa-chart-line text-3xl"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-3 text-xl font-semibold text-dark dark:text-white">
                                Analytics Avancés
                            </h4>
                            <p class="text-base text-body-color dark:text-body-color-dark">
                                Rapports détaillés et analyses de performance
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 lg:py-[120px] bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="mb-6 text-3xl font-bold text-dark dark:text-white lg:text-[40px] xl:text-[36px]">
                        À propos de DMS
                    </h2>
                    <p class="mb-8 text-base text-body-color dark:text-body-color-dark">
                        DMS (Dervox Monitoring Server) est une solution complète de surveillance et de sécurité 
                        conçue pour les entreprises modernes. Notre plateforme combine monitoring serveur avancé 
                        et sécurité VPN pour offrir une protection complète de votre infrastructure.
                    </p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0">
                        <a href="/telecharger" class="rounded-sm bg-primary px-8 py-4 text-base font-semibold text-white duration-300 ease-in-out hover:bg-primary/80">
                            En savoir plus
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <img src="/images/hero/shape-01.svg" alt="About DMS" class="mx-auto max-w-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 lg:py-[120px]">
        <div class="container mx-auto px-4">
            <div class="mb-16 flex w-full max-w-[570px] flex-col items-center text-center lg:mb-[90px]">
                <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white lg:text-[40px] xl:text-[36px]">
                    Contactez-nous
                </h2>
                <p class="text-base text-body-color dark:text-body-color-dark">
                    Besoin d'aide ? Notre équipe est là pour vous accompagner
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="mb-6 flex h-[90px] w-full max-w-[90px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary mx-auto">
                        <i class="fas fa-envelope text-3xl"></i>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark dark:text-white">
                        Email
                    </h4>
                    <p class="text-base text-body-color dark:text-body-color-dark">
                        contact@dms.com
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="mb-6 flex h-[90px] w-full max-w-[90px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary mx-auto">
                        <i class="fas fa-phone text-3xl"></i>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark dark:text-white">
                        Téléphone
                    </h4>
                    <p class="text-base text-body-color dark:text-body-color-dark">
                        +212 6 12 46 31 72
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="mb-6 flex h-[90px] w-full max-w-[90px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary mx-auto">
                        <i class="fas fa-map-marker-alt text-3xl"></i>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark dark:text-white">
                        Adresse
                    </h4>
                    <p class="text-base text-body-color dark:text-body-color-dark">
                        Sidi slimane
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <img src="/logodms-removebg-preview.png" alt="DMS Logo" class="h-12 mx-auto mb-4">
                <p>&copy; 2025 DMS - Dervox Monitoring Server. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Theme toggler
        const themeToggler = document.getElementById('themeToggler');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const html = document.documentElement;

        // Check for saved theme preference or default to dark
        const currentTheme = localStorage.getItem('theme') || 'dark';
        html.classList.toggle('dark', currentTheme === 'dark');
        updateThemeIcon();

        themeToggler.addEventListener('click', function() {
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateThemeIcon();
        });

        function updateThemeIcon() {
            const isDark = html.classList.contains('dark');
            if (isDark) {
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            } else {
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            }
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mobile menu toggle
        const navbarToggler = document.getElementById('navbarToggler');
        const navbarCollapse = document.getElementById('navbarCollapse');
        
        navbarToggler.addEventListener('click', function() {
            navbarCollapse.classList.toggle('invisible');
            navbarCollapse.classList.toggle('top-full');
            navbarCollapse.classList.toggle('opacity-100');
            navbarCollapse.classList.toggle('top-[120%]');
            navbarCollapse.classList.toggle('opacity-0');
        });

        // Sticky header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY >= 80) {
                header.classList.add('dark:bg-gray-dark', 'dark:shadow-sticky-dark', 'fixed', 'z-[9999]', 'bg-white', '!bg-opacity-80', 'shadow-sticky', 'backdrop-blur-sm', 'transition');
            } else {
                header.classList.remove('dark:bg-gray-dark', 'dark:shadow-sticky-dark', 'fixed', 'z-[9999]', 'bg-white', '!bg-opacity-80', 'shadow-sticky', 'backdrop-blur-sm', 'transition');
            }
        });
      


    </script>
    <!-- Komunicate Chat Widget -->
<script type="text/javascript">
  (function(d, m){
    var kommunicateSettings = {
      "appId": "160803ae09d033737ec1758e734c8077c",
      "popupWidget": true,
      "automaticChatOpenOnNavigation": true
    };
    var s = document.createElement("script"); 
    s.type = "text/javascript"; 
    s.async = true;
    s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
    var h = document.getElementsByTagName("head")[0]; 
    h.appendChild(s);
    window.kommunicate = m; 
    m._globals = kommunicateSettings;
  })(document, window.kommunicate || {});
</script>

</body>
</html>
