<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>À propos - DMS</title>

  <!-- Tailwind CSS -->
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
    };
  </script>

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  />

  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>
</head>

<body class="bg-white dark:bg-gray-dark"> <!-- ici on corrige en bas -->

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
                                    <a href="/" class="flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 text-primary dark:text-white">
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
                        <a href="/dashboard" class="hidden px-7 py-3 text-base font-medium text-dark hover:opacity-70 dark:text-white md:block">
                            
                        </a>
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


  <!-- About Section 1 -->
  <section
    id="about"
    class="pt-20 md:pt-24 lg:pt-32 bg-white dark:bg-gray-dark"
  >
    <div class="container">
      <div
        class="border-b border-body-color/[.15] pb-16 dark:border-white/[.15] md:pb-20 lg:pb-28"
      >
        <div class="-mx-4 flex flex-wrap items-center">
          <!-- Left Column -->
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 lg:mb-0">
              <h2
                class="mt-6 mb-6 text-3xl font-bold text-black dark:text-white sm:text-4xl lg:text-3xl xl:text-4xl"
              >
                Conçu pour les sites de démarrage, SaaS et professionnels.
              </h2>
              <p class="mb-10 text-base leading-relaxed text-body-color">
                Notre objectif principal est de vous fournir des solutions
                sécurisées et performantes, adaptées aux entreprises de toutes
                tailles. Grâce à une interface simple et intuitive, nous vous
                permettons de surveiller vos serveurs et de protéger vos données
                efficacement.
              </p>

              <div class="mx-[-12px] flex flex-wrap max-w-[570px]">
                <!-- Première liste -->
                <div class="w-full px-3 sm:w-1/2 lg:w-full xl:w-1/2">
                  <p
                    class="mb-5 flex items-center text-lg font-medium text-body-color"
                  >
                    <span
                      class="mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary"
                      >✓</span
                    >
                    Qualité premium
                  </p>
                  <p
                    class="mb-5 flex items-center text-lg font-medium text-body-color"
                  >
                    <span
                      class="mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary"
                      >✓</span
                    >
                    Surveillance en temps réel
                  </p>
                  <p
                    class="mb-5 flex items-center text-lg font-medium text-body-color"
                  >
                    <span
                      class="mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary"
                      >✓</span
                    >
                    Utilisation à vie
                  </p>
                </div>

                <!-- Deuxième liste -->
                <div class="w-full px-3 sm:w-1/2 lg:w-full xl:w-1/2">
                  <p
                    class="mb-5 flex items-center text-lg font-medium text-body-color"
                  >
                    <span
                      class="mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary"
                      >✓</span
                    >
                    Surveillance illimitée
                  </p>
                  <p
                    class="mb-5 flex items-center text-lg font-medium text-body-color"
                  >
                    <span
                      class="mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary"
                      >✓</span
                    >
                    Alertes en temps réel
                  </p>
                  <p
                    class="mb-5 flex items-center text-lg font-medium text-body-color"
                  >
                    <span
                      class="mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-primary bg-opacity-10 text-primary"
                      >✓</span
                    >
                    Interface utilisateur intuitive
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column -->
          <div class="w-full px-4 lg:w-1/2">
            <div
              class="relative mx-auto aspect-[25/24] max-w-[500px] lg:mr-0"
            >
              <img
                src="/images/about/about-image.svg"
                alt="about"
                class="mx-auto max-w-full drop-shadow-three dark:hidden dark:drop-shadow-none lg:mr-0"
              />
              <img
                src="/images/about/about-image-dark.svg"
                alt="about dark"
                class="hidden dark:block mx-auto max-w-full drop-shadow-three dark:drop-shadow-none lg:mr-0"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section 2 -->
  <section class="py-16 md:py-20 lg:py-28">
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <!-- Left Column -->
        <div class="w-full px-4 lg:w-1/2">
          <div
            class="relative mx-auto mb-12 aspect-[25/24] max-w-[500px] text-center lg:m-0"
          >
            <img
              src="/images/about/about-image-2.svg"
              alt="about image"
              class="drop-shadow-three dark:hidden dark:drop-shadow-none"
            />
            <img
              src="/images/about/about-image-2-dark.svg"
              alt="about dark"
              class="hidden drop-shadow-three dark:block dark:drop-shadow-none"
            />
          </div>
        </div>

        <!-- Right Column -->
        <div class="w-full px-4 lg:w-1/2">
          <div class="max-w-[470px]">
            <div class="mb-9">
              <h3
                class="mb-4 text-xl font-bold text-black dark:text-white sm:text-2xl"
              >
                Code sans bugs
              </h3>
              <p
                class="text-base font-medium leading-relaxed text-body-color"
              >
                Notre code est optimisé pour garantir une surveillance sans
                faille de vos serveurs, avec une fiabilité maximale et des
                performances exceptionnelles.
              </p>
            </div>
            <div class="mb-9">
              <h3
                class="mb-4 text-xl font-bold text-black dark:text-white sm:text-2xl"
              >
                Support prioritaire
              </h3>
              <p
                class="text-base font-medium leading-relaxed text-body-color"
              >
                Profitez d'un support réactif et dédié, prêt à résoudre
                rapidement toute question ou problème que vous pourriez
                rencontrer.
              </p>
            </div>
            <div>
              <h3
                class="mb-4 text-xl font-bold text-black dark:text-white sm:text-2xl"
              >
                Surveillance en temps réel
              </h3>
              <p
                class="text-base font-medium leading-relaxed text-body-color"
              >
                Bénéficiez d'une surveillance continue et des alertes en temps
                réel pour garantir que vos serveurs sont toujours opérationnels.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
      <div class="text-center">
        <img
          src="/logodms-removebg-preview.png"
          alt="DMS Logo"
          class="h-12 mx-auto mb-4"
        />
        <p>&copy; 2025 DMS - Dervox Monitoring Server. Tous droits réservés.</p>
      </div>
    </div>
  </footer>

  <!-- FontAwesome CDN for icons -->
  <script
    src="https://kit.fontawesome.com/a076d05399.js"
    crossorigin="anonymous"
  ></script>

  <!-- Toggle dark mode script -->
  <script>
    const themeToggler = document.getElementById("themeToggler");
    const sunIcon = document.getElementById("sunIcon");
    const moonIcon = document.getElementById("moonIcon");

    // Initialize theme based on localStorage or system preference
    const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
    const currentTheme = localStorage.getItem("theme");

    if (currentTheme === "dark" || (!currentTheme && prefersDark)) {
      document.documentElement.classList.add("dark");
      sunIcon.classList.add("hidden");
      moonIcon.classList.remove("hidden");
    } else {
      document.documentElement.classList.remove("dark");
      sunIcon.classList.remove("hidden");
      moonIcon.classList.add("hidden");
    }

    themeToggler.addEventListener("click", () => {
      document.documentElement.classList.toggle("dark");
      const isDark = document.documentElement.classList.contains("dark");
      if (isDark) {
        localStorage.setItem("theme", "dark");
        sunIcon.classList.add("hidden");
        moonIcon.classList.remove("hidden");
      } else {
        localStorage.setItem("theme", "light");
        sunIcon.classList.remove("hidden");
        moonIcon.classList.add("hidden");
      }
    });
  </script>
</body>
</html>
