<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- LINK FAVICON -->
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
   <!--@vite('resources/css/app.css') -->
  <!-- LINK STYLES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="/SmileSense/logo.jfif" type="image/x-icon">
  
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
  @vite('resources/css/app.css')
    <title>Login Paciente</title>
    
</head>
<body class="bg-neutral-100">
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
      <a href="{{route('home')}}" class="text-xl shadow-xl  underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Home</a>
      <a href="{{route('agendar')}}" class="text-xl shadow-xl underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Agendar</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="{{route('log-in')}}" class="text-l shadow-2xl font-bold leading-6 text-blueSS-300/80">Log in <span aria-hidden="true">&rarr;</span></a>
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
            <a href="{{route('home')}}" class="-mx-3 block rounded-lg px-3 py-2 underline decoration-2  hover:underline-offset-4 hover:decoration-4 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Home</a>
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
    <div class="min-h-screen flex flex-col justify-center bg-blue-400">
        <div class="bg-white mx-auto max-w-md py-8 px-10 shadow rounded-lg">
            <div class="mb-4">
                <img src="/images/logo.png" alt="">
            </div>
            <form action="">
                <div class="mb-4">
                    <input type="text" placeholder="CPF" class="appearance-none block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
                </div>
                <div class="mb-4">
                    <input type="password" placeholder="Senha" class="appearance-none block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
                </div>
                <div class="mb-4">
                    <button class="inline-block w-full px-8 py-4 leading-none text-white bg-green-400 hover:bg-Green-500 font-semibold rounded shadow">Entrar</button>
                </div>
                <div class="nb-4">
                    <p><a href="#" class="text-indigo-600">Esqueceu sua senha?</a></p>
                    <select data-te-select-init>
                        <option value="1">
                          <?php

                          $empresas = DB::select('select * from Cliente_Empresa' );
                          foreach ($empresas as $empresa) {
                          echo $empresa->NOME_EMPRESA;
                      } 
                      ?></option>
                        <option value="2">Segunda Clinica</option>
                        <option value="3">Terceira Clinica</option>
                        <option value="4">Quarta Clinica</option>
                        <option value="5">Quinta Clinica</option>
                </div>
            </form>
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
    <p class="text-neutral-600">Copyright © 2023 - Todos os direitos reservados Smile Sense.</p>
  </div>
</footer>
</html>