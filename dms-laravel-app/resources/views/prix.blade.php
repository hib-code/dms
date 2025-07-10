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
    <section id="pricing" class="relative z-10 py-16 md:py-20 lg:py-28" x-data="{ isMonthly: true }">
    <div class="container mx-auto px-4">
        <div class="text-center mx-auto max-w-2xl mb-12">
            <h2 class="text-3xl font-bold text-black dark:text-white">Tarif simple et abordable</h2>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
                Découvrez des tarifs simples et abordables qui s’adaptent à vos besoins. Choisissez l’option qui vous convient le mieux et commencez à profiter de nos services dès aujourd'hui, tout en respectant votre budget.
            </p>
        </div>

        <!-- Switch Mois / Année -->
        <div class="mb-12 flex justify-center items-center">
            <span @click="isMonthly = true" :class="isMonthly ? 'text-primary pointer-events-none' : 'text-dark dark:text-white'" class="mr-4 cursor-pointer text-base font-semibold">Mois</span>

            <div @click="isMonthly = !isMonthly" class="flex cursor-pointer items-center">
                <div class="relative">
                    <div class="h-5 w-14 rounded-full bg-[#1D2144] shadow-inner"></div>
                    <div :class="isMonthly ? '' : 'translate-x-full'" class="shadow-switch-1 absolute left-0 top-[-4px] flex h-7 w-7 items-center justify-center rounded-full bg-primary transition">
                        <span class="h-4 w-4 rounded-full bg-white"></span>
                    </div>
                </div>
            </div>

            <span @click="isMonthly = false" :class="!isMonthly ? 'text-primary pointer-events-none' : 'text-dark dark:text-white'" class="ml-4 cursor-pointer text-base font-semibold">Année</span>
        </div>

        <!-- Cartes de tarification -->
        <div class="grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
            <!-- Lite -->
            <div class="w-full">
                <div class="relative z-10 rounded-sm bg-white px-8 py-10 shadow-three hover:shadow-one dark:bg-gray-dark dark:shadow-two dark:hover:shadow-gray-dark">
                    <div class="flex items-center justify-between">
                        <h3 class="mb-2 text-[32px] font-bold text-black dark:text-white">
                            DH<span x-text="isMonthly ? '0' : '0'"></span><span class="text-lg font-medium text-body-color">/<span x-text="isMonthly ? 'mo' : 'yr'"></span></span>
                        </h3>
                        <h4 class="mb-2 text-xl font-bold text-dark dark:text-white">Lite</h4>
                    </div>
                    <p class="mb-7 text-base text-body-color">
                        Idéale pour les petites entreprises. Vous pouvez surveiller un serveur et utiliser un VPN limité.
                    </p>
                    <div class="mb-8 border-b border-body-color border-opacity-10 pb-8 dark:border-white dark:border-opacity-10">
                        <button class="flex w-full items-center justify-center rounded-sm bg-primary p-3 text-base font-semibold text-white transition duration-300 ease-in-out hover:bg-opacity-80 hover:shadow-signUp">
                            Télécharger Maintenant
                        </button>
                    </div>
                    @foreach ([
                        ['Surveiller 1 serveur', true],
                        ['Accès VPN limité', true],
                        ['Utilisation avec des projets limités', true],
                        ['Pas Support par email', true],
                        ['Accès limités', false],
                        ['Pas de Mises à jour', false]
                    ] as [$text, $active])
                        <div class="mb-3 flex items-center">
                            <span class="mr-3 flex h-[18px] w-[18px] items-center justify-center rounded-full bg-primary bg-opacity-10 text-primary">
                                {!! $active ? '<svg width="8" height="6" viewBox="0 0 8 6" class="fill-current"><path d="M2.90567 6.00024..."/></svg>' : '<svg width="7" height="7" viewBox="0 0 8 8" class="fill-current"><path d="..."/></svg>' !!}
                            </span>
                            <p class="m-0 text-base font-medium text-body-color">{{ $text }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Basic -->
            <div class="w-full">
                <div class="relative z-10 rounded-sm bg-white px-8 py-10 shadow-three hover:shadow-one dark:bg-gray-dark dark:shadow-two dark:hover:shadow-gray-dark">
                    <div class="flex items-center justify-between">
                        <h3 class="mb-2 text-[32px] font-bold text-black dark:text-white">
                            DH<span x-text="isMonthly ? '200' : '2400'"></span><span class="text-lg font-medium text-body-color">/<span x-text="isMonthly ? 'mo' : 'yr'"></span></span>
                        </h3>
                        <h4 class="mb-2 text-xl font-bold text-dark dark:text-white">Basic</h4>
                    </div>
                    <p class="mb-7 text-base text-body-color">Solution idéale pour les entreprises en pleine croissance avec des besoins plus avancés.</p>
                    <div class="mb-8 border-b border-body-color border-opacity-10 pb-8 dark:border-white dark:border-opacity-10">
                        <button class="flex w-full items-center justify-center rounded-sm bg-primary p-3 text-base font-semibold text-white transition duration-300 ease-in-out hover:bg-opacity-80 hover:shadow-signUp">
                            Télécharger Maintenant
                        </button>
                    </div>
                    @foreach ([
                        ['Surveiller 3 serveurs', true],
                        ['Accès VPN illimité', true],
                        ['Utilisation avec des projets limités (3 projets)', true],
                        ['Support par email', true],
                        ['Accès à vie', true],
                        ['Mises à jour gratuites à vie', false]
                    ] as [$text, $active])
                        <div class="mb-3 flex items-center">
                            <span class="mr-3 flex h-[18px] w-[18px] items-center justify-center rounded-full bg-primary bg-opacity-10 text-primary">
                                {!! $active ? '<svg width="8" height="6" viewBox="0 0 8 6" class="fill-current"><path d="M2.90567 6.00024..."/></svg>' : '<svg width="7" height="7" viewBox="0 0 8 8" class="fill-current"><path d="..."/></svg>' !!}
                            </span>
                            <p class="m-0 text-base font-medium text-body-color">{{ $text }}</p>
                        </div>
                    @endforeach
                    <p class="text-center text-sm text-gray-500 mt-4">Disponible prochainement.</p>
                </div>
            </div>

            <!-- Plus -->
            <div class="w-full">
                <div class="relative z-10 rounded-sm bg-white px-8 py-10 shadow-three hover:shadow-one dark:bg-gray-dark dark:shadow-two dark:hover:shadow-gray-dark">
                    <div class="flex items-center justify-between">
                        <h3 class="mb-2 text-[32px] font-bold text-black dark:text-white">
                            DH<span x-text="isMonthly ? '300' : '3600'"></span><span class="text-lg font-medium text-body-color">/<span x-text="isMonthly ? 'mo' : 'yr'"></span></span>
                        </h3>
                        <h4 class="mb-2 text-xl font-bold text-dark dark:text-white">Plus</h4>
                    </div>
                    <p class="mb-7 text-base text-body-color">Solution complète pour les entreprises ayant des besoins étendus et recherchant un accès privilégié.</p>
                    <div class="mb-8 border-b border-body-color border-opacity-10 pb-8 dark:border-white dark:border-opacity-10">
                        <button class="flex w-full items-center justify-center rounded-sm bg-primary p-3 text-base font-semibold text-white transition duration-300 ease-in-out hover:bg-opacity-80 hover:shadow-signUp">
                            Télécharger Maintenant
                        </button>
                    </div>
                    @foreach ([
                        ['Surveiller serveurs illimités', true],
                        ['Accès VPN illimité', true],
                        ['Utilisation avec des projets illimités', true],
                        ['Support par email', true],
                        ['Accès illimité', false],
                        ['Mises à jour gratuites illimitées', false]
                    ] as [$text, $active])
                        <div class="mb-3 flex items-center">
                            <span class="mr-3 flex h-[18px] w-[18px] items-center justify-center rounded-full bg-primary bg-opacity-10 text-primary">
                                {!! $active ? '<svg width="8" height="6" viewBox="0 0 8 6" class="fill-current"><path d="M2.90567 6.00024..."/></svg>' : '<svg width="7" height="7" viewBox="0 0 8 8" class="fill-current"><path d="..."/></svg>' !!}
                            </span>
                            <p class="m-0 text-base font-medium text-body-color">{{ $text }}</p>
                        </div>
                    @endforeach
                    <p class="text-center text-sm text-gray-500 mt-4">Disponible prochainement.</p>
                </div>
            </div>
        </div>
    </div>
</section>
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
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>