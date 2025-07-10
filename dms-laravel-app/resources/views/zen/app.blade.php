<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <base href="">
    <title>DMS</title>
    @include('zen.partials.meta')

    <link rel="author" href="">
    <link rel="license" href="E">
    

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-pro-6/css/all.css') }}">
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.1.2/echarts.min.js"
            integrity="sha512-ppWbHq6q2f7HAwS481w6qikuC0XEeBnmkRg6KWnWg3zSIbJwWWBgsCDMAxzSB7SVqXzWwSYQ2s8TSJKjnaikMg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>
    <!--end::Page Vendors Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" type="text/css">
    <style>.fa-secondary{opacity:.3}</style>
    <!--end::Global Theme Styles-->

    <!--begin::Page Styles-->
    @yield('page-css')
    <!--end::Page Styles-->
  </head>
  <body class="flex flex-col h-screen bg-gray-100">
      @include('zen.partials.header')
      <div class="flex flex-row justify-between bg-gray-100 h-full">
        @include('zen.partials.aside')
        @include('zen.partials.left-menu')
        <main class="w-full flex flex-col">
          @include('zen.partials.page-header')
          <div class="h-full overflow-y-auto">
            @yield('content')
            @if(isset($cpuLoad))
            <div class="p-8">
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Colonne de gauche : Détails -->
                <div class="md:col-span-1 bg-white rounded-lg shadow p-6">
                  <h2 class="text-lg font-bold mb-4">Détails du serveur</h2>
                  <div class="mb-4">
                    <div class="font-semibold">Nom d'hôte :</div>
                    <div>{{ gethostname() }}</div>
                  </div>
                  <div class="mb-4">
                    <div class="font-semibold">Système :</div>
                    <div>{{ PHP_OS }}</div>
                  </div>
                  <div class="mb-4">
                    <div class="font-semibold">CPU Load (1min) :</div>
                    <span class="inline-block px-2 py-1 rounded bg-green-100 text-green-700">{{ $cpuLoad }}</span>
                  </div>
                  <div class="mb-4">
                    <div class="font-semibold">Mémoire totale :</div>
                    <span class="inline-block px-2 py-1 rounded bg-blue-100 text-blue-700">{{ $memoryTotal }} MB</span>
                  </div>
                  <div class="mb-4">
                    <div class="font-semibold">Mémoire utilisée :</div>
                    <span class="inline-block px-2 py-1 rounded bg-blue-200 text-blue-900">{{ $memoryUsed }} MB</span>
                  </div>
                  <div class="mb-4">
                    <div class="font-semibold">Espace disque total :</div>
                    <span class="inline-block px-2 py-1 rounded bg-yellow-100 text-yellow-700">{{ $diskTotal }} GB</span>
                  </div>
                  <div class="mb-4">
                    <div class="font-semibold">Espace disque libre :</div>
                    <span class="inline-block px-2 py-1 rounded bg-yellow-200 text-yellow-900">{{ $diskFree }} GB</span>
                  </div>
                </div>
                <!-- Colonne de droite : Graphiques -->
                <div class="md:col-span-2 flex flex-col gap-6">
                  <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="font-semibold mb-2">Utilisation CPU (%)</h3>
                    <div id="cpuChart" style="height:180px;"></div>
                  </div>
                  <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="font-semibold mb-2">Utilisation Mémoire (%)</h3>
                    <div id="ramChart" style="height:180px;"></div>
                  </div>
                  <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="font-semibold mb-2">Espace Disque Libre (%)</h3>
                    <div id="diskChart" style="height:180px;"></div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
          @include('zen.partials.footer')
        </main>
      </div>
      <div id="fake-terminal" style="display:none; position:fixed; bottom:40px; right:40px; width:500px; max-width:90vw; height:320px; background:#18181b; color:#e5e5e5; border-radius:10px; box-shadow:0 4px 32px #0008; z-index:9999; flex-direction:column;">
        <div style="padding:8px 16px; background:#27272a; border-radius:10px 10px 0 0; display:flex; align-items:center; justify-content:space-between;">
          <span style="font-weight:bold; color:#22c55e;">Terminal</span>
          <button onclick="closeTerminal()" style="background:none; border:none; color:#e5e5e5; font-size:18px; cursor:pointer;">&times;</button>
        </div>
        <div id="terminal-output" style="flex:1; padding:12px; font-family:monospace; font-size:15px; overflow-y:auto; height:210px;"></div>
        <form id="terminal-form" style="display:flex; border-top:1px solid #333;">
          <span style="padding:10px; color:#22c55e; font-family:monospace;">$</span>
          <input id="terminal-input" autocomplete="off" style="flex:1; background:#18181b; color:#e5e5e5; border:none; outline:none; font-family:monospace; font-size:15px; padding:10px;" />
        </form>
      </div>
      <script src="https://unpkg.com/alpinejs" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.js"></script>
      <script>
        // Données simulées pour les graphiques (à remplacer par des vraies si besoin)
        const cpuData = Array.from({length: 24}, () => Math.round(Math.random()*100));
        const ramData = Array.from({length: 24}, () => Math.round(Math.random()*100));
        const diskData = Array.from({length: 24}, () => Math.round(Math.random()*100));
        const hours = Array.from({length: 24}, (_,i) => `${i}:00`);

        function makeChart(id, data, color, name) {
          var chart = echarts.init(document.getElementById(id));
          chart.setOption({
            tooltip: { trigger: 'axis' },
            xAxis: { type: 'category', data: hours },
            yAxis: { type: 'value', min: 0, max: 100 },
            series: [{
              data: data,
              type: 'line',
              smooth: true,
              name: name,
              areaStyle: {},
              lineStyle: { color: color },
              itemStyle: { color: color }
            }]
          });
        }
        makeChart('cpuChart', cpuData, '#22c55e', 'CPU');
        makeChart('ramChart', ramData, '#3b82f6', 'RAM');
        makeChart('diskChart', diskData, '#f59e42', 'Disque');

        function openTerminal() {
          document.getElementById('fake-terminal').style.display = 'flex';
          setTimeout(()=>document.getElementById('terminal-input').focus(), 100);
        }
        function closeTerminal() {
          document.getElementById('fake-terminal').style.display = 'none';
        }
        // Terminal logic
        const output = () => document.getElementById('terminal-output');
        const input = () => document.getElementById('terminal-input');
        const form = () => document.getElementById('terminal-form');
        if(form()){
          form().onsubmit = function(e){
            e.preventDefault();
            const cmd = input().value.trim();
            if(!cmd) return;
            printLine(`<span style='color:#22c55e;'>$ ${cmd}</span>`);
            handleCommand(cmd);
            input().value = '';
          };
        }
        function printLine(html){
          output().innerHTML += html+"<br>";
          output().scrollTop = output().scrollHeight;
        }
        function handleCommand(cmd){
          switch(cmd){
            case 'help':
              printLine('Commandes disponibles : <b>help</b>, <b>ls</b>, <b>clear</b>');
              break;
            case 'ls':
              printLine('devices/  dashboard/  ssh/  terminal/  settings/');
              break;
            case 'clear':
              output().innerHTML = '';
              break;
            default:
              printLine('Commande inconnue. Tape <b>help</b> pour la liste.');
          }
        }
      </script>
  </body>
</html>
