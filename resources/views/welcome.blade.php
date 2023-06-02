<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smile Sense | O seu sistema</title>
  <!-- LINK FAVICON -->
  <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.ico">

  <!-- LINK STYLES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 

<style>
  .carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
  }
  .carousel-item {
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
  }
  #carousel-1:checked ~ .control-1,
  #carousel-2:checked ~ .control-2,
  #carousel-3:checked ~ .control-3 {
    display: block;
  }
  .carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
  }
  #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
  #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
  #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
  }
</style>
</head>
<body class="bg-neutral-100 scroll-smooth">
<header class="bg-neutral-100 shadow-lg shadow-blueSS-600 mb-7">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Smile Sense</span>
        <img class="h-36 w-auto" src="/images/logo.png" alt="Smile Sense - Logo de um dente com cores brancas e cinzas, e uma faixa azul, junto com o nome da Smile Sense!">
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
      <a href="{{route('home')}}" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Dashboard</a>
      <a href="#sobre" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Sobre</a>
      <a href="#sistema" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Sistema</a>
      <a href="{{route('agendar')}}" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Agendar</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="{{route('login')}}" class="text-l shadow-2xl shadow-neutral-600 font-bold leading-6 text-blueSS-300/80">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div id="mobile-menu" class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-blueSS-400 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Smile Sense</span>
          <img class="h-24 w-auto" src="/images/logov1.png" alt="">
        </a>
        <button id="menu-toggle" type="button" class="-m-2.5 rounded-md p-2.5 text-neutral-100">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-neutral-300">
          <div class="space-y-2 py-6">
            <a href="{{route('home')}}" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Dashboard</a>
            <a href="#sobre" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Sobre</a>
            <a href="#sistema" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Sistema</a>
            <a href="{{route('agendar')}}" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Agendar</a>
          </div>
          <div class="py-6">
            <a href="{{route('log-in')}}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="carousel bg-blueSS-500 shadow max-h-96 w-full">
  <div id="slide1" class="carousel-item relative flex justify-center align-center w-full">
    <img src="/images/gif-1-crsl.gif" class="h-auto w-auto" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮-</a> 
      <a href="#slide2" class="btn btn-circle">-❯</a>
    </div>
  </div> 
  <div id="slide2" class="carousel-item relative flex justify-center align-center w-full">
    <img src="/images/img-preço.png" class="h-auto w-auto" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮-</a> 
      <a href="#slide3" class="btn btn-circle">-❯</a>
    </div>
  </div> 
  <div id="slide3" class="carousel-item relative flex justify-center align-center w-full">
    <img src="/images/gif-sistema.gif" class="h-auto w-auto" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮-</a> 
      <a href="#slide4" class="btn btn-circle">-❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative flex justify-center align-center w-full">
    <img src="/images/gif-login.gif" class="h-auto w-auto" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮-</a> 
      <a href="#slide1" class="btn btn-circle">-❯</a>
    </div>
  </div>
</div>
<div class="divider shadow shadow-blueSS-500"></div> 
<section id="sobre" class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
<div class=" lg:hidden absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
  <div class="lg:hidden absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-gradient-to-r from-blueSS-500 from-80% to-blueSS-200/60 shadow-xl shadow-indigo-600/10 ring-2 ring-neutral-200  sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
  
  <img src="/images/dentist-consult.gif" alt="Garota em uma consulta no dentista!" class="absolute max-xl:hidden max-lg:hidden lg:-mt-28 -z-10">
</div>
  <div class="mx-auto max-w-2xl lg:max-w-4xl">
    <figure class="mt-10 ml-36">
      <blockquote class="text-center text-xl font-semibold leading-8 text-neutral-900 sm:text-2xl sm:leading-9">
        <p class="">“A empresa foi criada no ano de 2023 com intuito de auxílio e modernização dos trabalhos que antes eram com papéis e desorganização nos consultórios, para que conosco tivessem modernidade e organização, trazendo assim um novo modo de gerenciamento, buscamos trazer modernidade tanto para os consultórios como os pacientes”</p>
      </blockquote>
      <figcaption class="mt-10">
        <img class="mx-auto h-24 w-24 rounded-full" src="/images/logo.png" alt="">
        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
          <div class="font-semibold text-gray-900">Smile Sense</div>
          <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
            <circle cx="1" cy="1" r="1" />
          </svg>
          <div class="text-gray-600">O seu sistema</div>
        </div>
      </figcaption>
    </figure>
  </div>
</section>
<div class="divider"></div> 
<section class="bg-gradient-to-r from-blueSS-500 from-5% to-blueSS-200/60 pt-16 pb-16">
  <div class="mx-auto max-w-2xl sm:text-center">
    <h2 class="text-3xl pb-1.5 shadow-sm shadow-neutral-800 font-bold tracking-tight text-neutral-100 sm:text-4xl">O que se espera de nós é:</h2>
      <div class="mt-20">
        <div class="flex flex-col w-full lg:flex-row lg:-ml-32">
          <div class="grid h-100 p-10 flex-grow card bg-base-300 rounded-box place-items-center shadow-2xl shadow-neutral-900"> 
            <h1 class="text-3xl m-10 font-bold tracking-tight text-neutral-200 sm:text-4xl">Missão</h1>
            Fornecer atendimento e serviços odontológicos com profissionalismo, qualidade e eficiência, prezando sempre a satisfação e bem-estar dos nossos pacientes.
          </div> 
          <div class="divider lg:divider-horizontal bg-neutral-900 p-2 rounded-2xl">+</div> 
          <div class="grid flex-grow h-100 p-10 card bg-base-300 rounded-box place-items-center shadow-2xl shadow-neutral-900">
            <h1 class="text-3xl m-10 font-bold tracking-tight text-neutral-100 sm:text-4xl">Visão</h1>
            Ser referência aos que prezam pela saúde bucal, usando tecnologia e excelência em nossos atendimentos.
          </div>
          <div class="divider lg:divider-horizontal bg-neutral-900 p-2 rounded-2xl">+</div> 
          <div class="grid flex-grow h-100 p-10 card bg-base-300 rounded-box place-items-center shadow-2xl shadow-neutral-900">
            <h1 class="text-3xl m-8 font-bold tracking-tight text-neutral-100 sm:text-4xl">Valores</h1>
            Profissionalismo, ética, odontologia de qualidade com profissionais dedicados e especializados.
          </div>
        </div>
      </div>
  </div>
</section>
<div class="divider"></div> 
<div id="sistema" class="bg-neutral-200 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl sm:text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Preços simples e descomplicados</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">Tudo o que oferecemos, é a sofisticação e a modernização dos procesos que você utiliza, onde você escolhe o que quer!</p>
    </div>
    <div class="bg-neutral-200 mx-auto mt-16 max-w-2xl rounded-3xl ring-2 ring-blueSS-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
      <div class="p-8 sm:p-10 lg:flex-auto">
        <h3 class="text-2xl font-bold tracking-tight text-blueSS-200">Sistema Odontológico</h3>
        <p class="mt-6 text-base leading-7 text-neutral-500">Um sistema completo <strong>DESKTOP</strong>, onde contém cada processo dentro de uma clínica odontológica. Desde cadastramento até gerenciamento!</p>
        <div class="mt-10 flex items-center gap-x-4">
          <h4 class="flex-none text-m font-semibold leading-6 text-blueSS-200">O que está incluso</h4>
          <div class="h-px flex-auto bg-blueSS-100"></div>
        </div>
        <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-neutral-500 sm:grid-cols-2 sm:gap-6">
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-blueSS-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Cadastramento de clientes
          </li>

          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-blueSS-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Fichas de anamnese, odontograma, e agendamento de clientes
          </li>

          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-blueSS-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Fichamento completo do caso do paciente
          </li>

          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-blueSS-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Consulta de dados dos clientes 
          </li>
        </ul>
      </div>
      <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
        <div class="rounded-2xl bg-blueSS-300 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
          <div class="mx-auto max-w-xs px-8">
            <p class="text-lg font-bold text-neutral-100">Assinatura mensal</p>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
              <span class="text-5xl font-bold tracking-tight text-neutral-100">R$99,90</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-neutral-400">R$</span>
            </p>
            <a href="{{route('compra')}}" class="mt-10 block w-full rounded-md bg-neutral-100 px-3 py-2 text-center text-sm font-bold text-neutral-600 shadow-sm hover:bg-neutral-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Comprar</a>
            <p class="mt-6 text-xs leading-5 text-neutral-100">O preço apenas o acesso ao sistema desktop, e já inclui taxa de manutenção.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-neutral-200 mx-auto mt-16 max-w-2xl rounded-3xl ring-2 ring-blueSS-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
      <div class="-mt-2 p-2 lg:mt-3 lg:w-full lg:max-w-md lg:flex-shrink-0">
        <div class="rounded-2xl bg-blueSS-300 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
          <div class="mx-auto max-w-xs px-8">
            <p class="text-lg font-bold text-neutral-100">Assinatura mensal</p>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
              <span class="text-5xl font-bold tracking-tight text-neutral-100">R$119,90</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-neutral-400">R$</span>
            </p>
            <a href="{{route('compra')}}" class="mt-10 block w-full rounded-md bg-neutral-100 px-3 py-2 text-center text-sm font-bold text-neutral-600 shadow-sm hover:bg-neutral-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Comprar</a>
            <p class="mt-6 text-xs leading-5 text-neutral-100">O preço inclui o sistema desktop e o adicional do site! Está incluso taxa de manutenção.</p>
          </div>
        </div>
      </div>
      <div class="p-8 sm:p-10 lg:flex-auto">
        <h3 class="text-2xl font-bold tracking-tight text-blueSS-200">Sistema desktop + Sistema WEB</h3>
        <p class="mt-6 text-base leading-7 text-neutral-500">Além de tudo o que se recebe pelo sistema desktop, aqui é incluso um sistema <strong>WEB</strong> que permite mais fidelidade e facilidade para os seus pacientes e seu consultório!</p>
        <div class="mt-10 flex items-center gap-x-4">
          <h4 class="flex-none text-m font-semibold leading-6 text-blueSS-200">Whats included</h4>
          <div class="h-px flex-auto bg-blueSS-100"></div>
        </div>
        <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-neutral-500 sm:grid-cols-2 sm:gap-6">
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-blueSS-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Tudo o que se recebe no DESKTOP
          </li>

          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-blueSS-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Acesso pela WEB dos seus dados e inclusão de assinaturas
          </li>

          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-blueSS-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Agilidade para consultas, e informações sobre os agendamentos e procedimentos
          </li>

          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-blueSS-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Localização destacada no mapa, e divulgação de contato para fidelização de clientes
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

      <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', function() {
          if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('block');
          } else {
            mobileMenu.classList.remove('block');
            mobileMenu.classList.add('hidden');
          }
        });

      </script>

</body>
<footer class="footer footer-center p-10 bg-neutral-100 text-base-content rounded">
  <div class="grid text-neutral-600 grid-flow-col gap-4">
    <a class="link link-hover">Sobre nós</a> 
    <a class="link link-hover">Contato</a> 
    <a class="link link-hover">Comprar</a> 
    <a class="lifonk link-hover">Consultórios</a>
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
</html>