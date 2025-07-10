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
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
<section id="contact" class=" mt-10 overflow-hidden py-16 md:py-20 lg:py-28">
  <div class="container">
    <div class="-mx-4 flex flex-wrap">
     
      <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
        <div class="mb-12 rounded-sm bg-white px-8 py-11 shadow-three dark:bg-gray-800 sm:p-[55px] lg:mb-5 lg:px-8 xl:p-[55px]">
          <h2 class="mb-3 text-2xl font-bold text-black dark:text-white sm:text-3xl">
            Besoin d'aide ? Ouvrir un billet
          </h2>
          <p class="mb-12 text-base font-medium text-body-color">
            Notre équipe d'assistance vous répondra dès que possible par e-mail.
          </p>

          <form method="POST" action="#">
            @csrf
            <div class="-mx-4 flex flex-wrap">
              <div class="w-full px-4 md:w-1/2">
                <div class="mb-8">
                  <label class="mb-3 block text-sm font-medium text-dark dark:text-white">
                    Nom et prénom
                  </label>
                  <input type="text" name="name" placeholder="Entrez votre nom et prénom"
                    class="w-full rounded-sm border bg-[#f8f8f8] px-6 py-3 text-base text-body-color border-stroke outline-none focus:border-primary dark:border-transparent dark:bg-[#2C303B] dark:text-body-color-dark" />
                </div>
              </div>
              <div class="w-full px-4 md:w-1/2">
                <div class="mb-8">
                  <label class="mb-3 block text-sm font-medium text-dark dark:text-white">
                    Votre Email
                  </label>
                  <input type="email" name="email" placeholder="Entrez votre email"
                    class="w-full rounded-sm border bg-[#f8f8f8] px-6 py-3 text-base text-body-color border-stroke outline-none focus:border-primary dark:border-transparent dark:bg-[#2C303B] dark:text-body-color-dark" />
                </div>
              </div>
              <div class="w-full px-4">
                <div class="mb-8">
                  <label class="mb-3 block text-sm font-medium text-dark dark:text-white">
                    Votre Message
                  </label>
                  <textarea name="message" rows="5" placeholder="Entrez votre message"
                    class="w-full resize-none rounded-sm border bg-[#f8f8f8] px-6 py-3 text-base text-body-color border-stroke outline-none focus:border-primary dark:border-transparent dark:bg-[#2C303B] dark:text-body-color-dark"></textarea>
                </div>
              </div>
              <div class="w-full px-4">
                <button type="submit"
                  class="rounded-sm bg-primary px-9 py-4 text-base font-medium text-white shadow-submit duration-300 hover:bg-primary/90">
                  Soumettre
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      {{-- Newsletter --}}
      <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
        <div class="relative z-10 rounded-sm bg-white p-8 shadow-three dark:bg-gray-800 sm:p-11 lg:p-8 xl:p-11">
          <h3 class="mb-4 text-2xl font-bold leading-tight text-black dark:text-white">
            Abonnez-vous pour recevoir les futures mises à jour
          </h3>
          <p class="mb-11 border-b border-body-color border-opacity-25 pb-11 text-base leading-relaxed text-body-color dark:border-white dark:border-opacity-25">
            Restez informé des dernières nouvelles et mises à jour. Abonnez-vous pour ne rien manquer et profiter des nouveautés en avant-première.
          </p>

          <form method="POST" action="#">
            @csrf
            <input type="text" name="newsletter_name" placeholder="Entrez votre nom"
              class="mb-4 w-full rounded-sm border bg-[#f8f8f8] px-6 py-3 text-base text-body-color border-stroke outline-none focus:border-primary dark:border-transparent dark:bg-[#2C303B] dark:text-body-color-dark"
              required />

            <input type="email" name="newsletter_email" placeholder="Entrez votre email"
              class="mb-4 w-full rounded-sm border bg-[#f8f8f8] px-6 py-3 text-base text-body-color border-stroke outline-none focus:border-primary dark:border-transparent dark:bg-[#2C303B] dark:text-body-color-dark"
              required />

            <button type="submit"
              class="mb-5 w-full rounded-sm bg-primary px-9 py-4 text-base font-medium text-white shadow-submit duration-300 hover:bg-primary/90">
              S'abonner
            </button>

            <p class="text-center text-base leading-relaxed text-body-color dark:text-body-color-dark">
              Aucun spam garanti, veuillez donc ne pas envoyer de spam.
            </p>
          </form>
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

</body>
</html>
