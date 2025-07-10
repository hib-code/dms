<!-- Begin::Aside -->
<aside class="flex-shrink-0 flex flex-col items-center justify-between w-20 bg-white border-r border-gray-200">
  <nav class="text-gray-500 pt-5">
    <x-ui.atoms.aside-link href="{{ route('dashboard') }}" title="Dashboard">
      <x-fontawesome.duotone.grid-horizontal class="group-hover:text-green-400 h-8 w-8" />
    </x-ui.atoms.aside-link>
    <x-ui.atoms.aside-link href="{{ route('device.index') }}" title="Devices">
      <x-fontawesome.duotone.server class="group-hover:text-green-400 h-8 w-8" />
    </x-ui.atoms.aside-link>
    <x-ui.atoms.aside-link href="#" title="SSH" onclick="alert('Firewall est activé'); return false;">
      <x-fontawesome.duotone.screwdriver-wrench class="group-hover:text-green-400 h-8 w-8" />
    </x-ui.atoms.aside-link>
    <x-ui.atoms.aside-link href="#" title="Terminal" onclick="openTerminal(); return false;">
      <x-fontawesome.duotone.rectangle-portrait class="group-hover:text-green-400 h-8 w-8" />
    </x-ui.atoms.aside-link>
  
    <div class="mb-3 px-2">
      <hr>
    </div>
  </nav>
  <div>
    <x-ui.atoms.aside-link href="{{ route('profile') }}" title="Profile">
      <x-fontawesome.duotone.circle-user class="group-hover:text-green-400 h-8 w-8" />
    </x-ui.atoms.aside-link>
  </div>
</aside>
<!-- End::Aside -->
