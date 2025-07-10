<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Télécharger DMS - Dervox Monitoring Server</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                container: {
                    center: true,
                    padding: "1rem",
                },
                extend: {
                    colors: {
                        primary: "#4A6CF7",
                        "body-color": "#788293",
                        dark: "#1D2430",
                        "gray-dark": "#1D2430",
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
                    <a href="/" class="header-logo block w-full py-8">
                        <img src="/logodms-removebg-preview.png" alt="logo" class="w-full dark:hidden" width="140" height="30">
                        <img src="/logodms-removebg-preview.png" alt="logo" class="hidden w-full dark:block" width="100" height="90">
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div>
                        <nav class="navbar lg:visible lg:static lg:w-auto lg:border-none lg:!bg-transparent lg:p-0 lg:opacity-100">
                            <ul class="block lg:flex lg:space-x-12">
                                <li class="group relative">
                                    <a href="/" class="flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 text-dark hover:text-primary dark:text-white/70 dark:hover:text-white">
                                        Home
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="/about" class="flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 text-dark hover:text-primary dark:text-white/70 dark:hover:text-white">
                                        About
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="/blog" class="flex py-2 text-base lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 text-dark hover:text-primary dark:text-white/70 dark:hover:text-white">
                                        Blog
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

    <!-- Download Section -->
    <body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-white">

    <!-- Bouton Thème -->
   
<main class="text-center py-16 max-w-6xl mx-auto px-4">

    <h1 class="text-3xl font-bold mt-10 mb-8">Script Dervox Monitor Server</h1>

    <!-- OS Selection Script -->
    <div class="flex items-center justify-center mt-4 border rounded-lg p-1 bg-gray-800 w-fit mx-auto space-x-2">
      <button onclick="setArch('linux')" id="btn-linux" class="px-4 py-1 text-sm rounded-lg bg-blue-500 text-white">Linux</button>
      <button onclick="setArch('windows')" id="btn-windows" class="px-4 py-1 text-sm rounded-lg text-gray-400">Windows</button>
      <button onclick="setArch('cloud')" id="btn-cloud" class="px-4 py-1 text-sm rounded-lg text-gray-400">Cloud</button>
    </div>

    <!-- Sections Script -->
    <div id="section-linux" class="mt-10 flex flex-wrap justify-center gap-6 px-4 max-w-6xl mx-auto">
      <!-- Arch Linux -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
        <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Recommandé</span>
        <img src="/images/system/arch-linux-seeklogo.png" class="w-16 my-4 mx-auto" />
        <h2 class="text-xl font-semibold text-purple-400">Arch Linux</h2>
        <p class="text-gray-400 mt-2">Script bash incluant Dervox + services d’analyse système.</p>
        <div class="mt-4 space-x-2">
          <a href="./mees.exe" download class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Télécharger</a>
         
        </div>
      </div>
      <!-- Debian Linux -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
        <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Recommandé</span>
        <img src="/images/system/debian-seeklogo.png" class="w-16 my-4 mx-auto" />
        <h2 class="text-xl font-semibold text-purple-400">Debian Linux</h2>
        <p class="text-gray-400 mt-2">Script auto déploiement Dervox + firewall et configuration réseau.</p>
        <div class="mt-4 space-x-2">
          <a href="./mees.exe" download class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Télécharger</a>
        
        </div>
      </div>
    </div>

    <div id="section-windows" class="hidden mt-10 flex flex-wrap justify-center gap-6 px-4 max-w-6xl mx-auto">
      <!-- Windows Server 2022 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
        <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Recommandé</span>
        <img src="/images/system/windows-11-icon-seeklogo.png" class="w-16 my-4 mx-auto" />
        <h2 class="text-xl font-semibold text-purple-400">Windows Server 2022</h2>
        <p class="text-gray-400 mt-2">Le script configure automatiquement les services essentiels.</p>
        <div class="mt-4 space-x-2">
          <a href="./mees.exe" download class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Télécharger</a>
         
        </div>
      </div>
      <!-- Windows Server 2019 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
        <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Recommandé</span>
        <img src="/images/system/windows-11-icon-seeklogo.png" class="w-16 my-4 mx-auto" />
        <h2 class="text-xl font-semibold text-purple-400">Windows Server 2019</h2>
        <p class="text-gray-400 mt-2">Script simplifié pour Dervox avec surveillance système et logs.</p>
        <div class="mt-4 space-x-2">
          <a href="./mees.exe" download class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Télécharger</a>
        
        </div>
      </div>
    </div>

    <div id="section-cloud" class="hidden mt-10 flex flex-wrap justify-center gap-6 px-4 max-w-6xl mx-auto">
      <!-- AWS -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
        <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Bientôt</span>
        <img src="/images/system/aws.png" class="w-16 my-4 mx-auto" />
        <h2 class="text-xl font-semibold text-purple-400">AWS Amazon</h2>
        <p class="text-gray-400 mt-2">Script cloud pour configurer DMS sans intervention manuelle.</p>
        <div class="mt-4 space-x-2">
          <button class="bg-blue-500 text-white px-4 py-2 rounded">Télécharger</button>
          
        </div>
      </div>
      <!-- Azure -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
        <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Bientôt</span>
        <img src="/images/system/azuers.png" class="w-20 my-4 mx-auto" />
        <h2 class="text-xl font-semibold text-purple-400">Microsoft Azure</h2>
        <p class="text-gray-400 mt-2">Supervision cloud automatisée sur les serveurs Azure.</p>
        <div class="mt-4 space-x-2">
          <button class="bg-blue-500 text-white px-4 py-2 rounded">Télécharger</button>
          
        </div>
      </div>
      <!-- Google Cloud -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
        <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Bientôt</span>
        <img src="/images/system/azuers.png" class="w-20 my-4 mx-auto" />
        <h2 class="text-xl font-semibold text-purple-400">Google Cloud</h2>
        <p class="text-gray-400 mt-2">Supervision cloud automatisée sur les Google Cloud.</p>
        <div class="mt-4 space-x-2">
          <button class="bg-blue-500 text-white px-4 py-2 rounded">Télécharger</button>
        </div>
      </div>
    </div>

    <!-- Section Application -->
    <section class="mb-20 mt-32 max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold mb-6">
        Télécharger l'<span class="text-blue-500">application</span>
      </h2>

      <div class="flex items-center justify-center mt-4 border rounded-lg p-1 bg-gray-800 w-fit mx-auto space-x-2">
        <button
          onclick="setArchApp('linux')"
          id="btn-linux-app"
          class="px-4 py-1 text-sm rounded-lg bg-blue-500 text-white"
        >
          Linux
        </button>
        <button
          onclick="setArchApp('windows')"
          id="btn-windows-app"
          class="px-4 py-1 text-sm rounded-lg text-gray-400"
        >
          Windows
        </button>
      </div>

       <!-- Windows cards -->
  <div id="app-section-windows" class="flex flex-wrap justify-center gap-6 mt-6 hidden">
    <!-- Windows 64 bits -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
      <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Recommandé</span>
      <img src="/images/system/windows-11-icon-seeklogo.png" class="w-16 my-4 mx-auto" />
      <h2 class="text-xl font-semibold text-purple-400">Windows 64 bits</h2>
      <p class="text-gray-400 mt-2">Application complète pour surveiller CPU, RAM, disque, réseau avec alertes automatiques.</p>
      <div class="mt-4 space-x-2">
        <a href="/Dervox_Monitor_Server.exe" download class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Télécharger</a>
       
      </div>
    </div>

    <!-- Windows 32 bits -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
      <span class="bg-gray-600 text-white px-3 py-1 rounded-lg">Bientot</span>
      <img src="/images/system/windows-11-icon-seeklogo.png" class="w-16 my-4 mx-auto" />
      <h2 class="text-xl font-semibold text-purple-400">Windows 32 bits</h2>
      <p class="text-gray-400 mt-2">Version 32 bits compatible avec les anciens systèmes Windows.</p>
      <div class="mt-4 space-x-2">
        <a href="/Dervox_Monitor_Server.exe" download class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Télécharger</a>
        
      </div>
    </div>
  </div>

  <!-- Linux cards -->
  <div id="app-section-linux" class="flex flex-wrap justify-center gap-6 mt-6">
    <!-- Arch Linux -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
      <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Recommandé</span>
      <img src="/images/system/arch-linux-seeklogo.png" class="w-16 my-4 mx-auto" />
      <h2 class="text-xl font-semibold text-purple-400">Linux (Arch)</h2>
      <p class="text-gray-400 mt-2">Surveillance système native pour Arch Linux avec tableau de bord CLI & Web.</p>
      <div class="mt-4 space-x-2">
        <a href="/Dervox_Monitor_Server.exe" download class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Télécharger</a>
        
      </div>
    </div>

    <!-- Debian Linux -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-full md:w-5/12">
      <span class="bg-blue-600 text-white px-3 py-1 rounded-lg">Recommandé</span>
      <img src="/images/system/debian-seeklogo.png" class="w-16 my-4 mx-auto" />
      <h2 class="text-xl font-semibold text-purple-400">Linux (Debian)</h2>
      <p class="text-gray-400 mt-2">Surveillance système Debian avec support matériel étendu et services réseaux.</p>
      <div class="mt-4 space-x-2">
        <a href="/Dervox_Monitor_Server.exe" download class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Télécharger</a>
       
      </div>
    </div>
  </div>

    </section>

  </main>

  <script>
    function setArch(arch) {
      ['linux', 'windows', 'cloud'].forEach((id) => {
        document.getElementById('section-' + id).classList.add('hidden');
        document.getElementById('btn-' + id).classList.remove('bg-blue-500', 'text-white');
        document.getElementById('btn-' + id).classList.add('text-gray-400');
      });
      document.getElementById('section-' + arch).classList.remove('hidden');
      document.getElementById('btn-' + arch).classList.add('bg-blue-500', 'text-white');
    }

    function setArchApp(arch) {
      ['linux', 'windows'].forEach((id) => {
        document.getElementById(id + '-app').classList.add('hidden');
        document.getElementById('btn-' + id + '-app').classList.remove('bg-blue-500', 'text-white');
        document.getElementById('btn-' + id + '-app').classList.add('text-gray-400');
      });
      document.getElementById(arch + '-app').classList.remove('hidden');
      document.getElementById('btn-' + arch + '-app').classList.add('bg-blue-500', 'text-white');
    }

    document.addEventListener('DOMContentLoaded', () => {
      setArch('linux');      // section script par défaut
      setArchApp('linux');   // section application par défaut
    });
     function setArchApp(arch) {
    const sections = ['linux', 'windows'];
    sections.forEach(os => {
      document.getElementById('app-section-' + os).classList.add('hidden');
      document.getElementById('btn-' + os + '-app').classList.remove('bg-blue-500', 'text-white');
      document.getElementById('btn-' + os + '-app').classList.add('text-gray-400');
    });
    document.getElementById('app-section-' + arch).classList.remove('hidden');
    document.getElementById('btn-' + arch + '-app').classList.add('bg-blue-500', 'text-white');
    document.getElementById('btn-' + arch + '-app').classList.remove('text-gray-400');
  }

  // Activer par défaut Linux
  document.addEventListener('DOMContentLoaded', () => {
    setArchApp('linux');
  });
  </script>
</body>
</html>
