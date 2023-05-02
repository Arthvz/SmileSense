<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendar | Smile Sense - O seu sistema</title>
  <!-- LINK FAVICON -->
  <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.ico">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script type="module" src="./js/markers.js"></script>

  <!-- LINK STYLES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 

  <script src="/resources/js/map.js"></script>
</head>
<body class="bg-neutral-100 scroll-smooth">
<header class="bg-neutral-100 shadow-lg shadow-blueSS-600 mb-4">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Smile Sense</span>
        <img class="h-36 w-auto" src="/images/logo.png" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-blueSS-300">
        <span class="sr-only">Abrir menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{route('home')}}" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Home</a>
      <a href="{{route('agendar')}}" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Agendar</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-l shadow-2xl shadow-neutral-600 font-bold leading-6 text-blueSS-300/80">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-blueSS-400 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Smile Sense</span>
          <img class="h-24 w-auto" src="/images/logov1.png" alt="Smile Sense - Logo de um dente com cores brancas e cinzas, e uma faixa azul, junto com o nome da Smile Sense!">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-neutral-100">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-neutral-300">
          <div class="space-y-2 py-6">
            <a href="{{route('home')}}" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Home</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Sobre</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Sistema</a>
            <a href="{{route('agendar')}}" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Agendar</a>
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
  <div id="map" class ="w-full h-148"></div>

  <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54&callback=initMap&v=weekly"
    async
  ></script>
</body>
<footer class="footer footer-center p-10 bg-neutral-100 text-base-content rounded">
  <div class="grid text-neutral-600 grid-flow-col gap-4">
    <a class="link link-hover">Sobre nós</a> 
    <a class="link link-hover">Contato</a> 
    <a class="link link-hover">Comprar</a> 
    <a class="link link-hover">Consultórios</a>
  </div> 
  <div>
    <div class="grid grid-flow-col text-neutral-600 gap-4">
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#525252" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a> 
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </div>
  <div>
    <span class="footer-title text-neutral-900">Newsletter</span> 
    <div class="form-control w-80"> 
      <div class="relative">
        <input type="text" placeholder="E-mail..." class="input input-bordered w-full pr-16" /> 
        <button class="btn btn-blueSS-500 bg-blueSS-500 absolute top-0 right-0 rounded-l-none">Subscribe</button>
      </div>
    </div>
  </div>
  <div>
    <p class="text-neutral-600">Copyright © 2023 - Todos os direitos reservados Smile Sense.</p>
  </div>
</footer>
<script>
  let map;

  function initMap() {
      const myLatLng = { lat: -23.6071, lng: -46.752 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: myLatLng,
      });
      
      //LOCAIS DE AGRESSÃO
      var beachMarker = new google.maps.Marker({
          position: new google.maps.LatLng(-23.619627,-46.771811),
          map: map,
          icon: '/images/blue_Marker.png',
          title: "Praça do Taboão (Locais de Agressão)",
        });
  }
</script>
</html>