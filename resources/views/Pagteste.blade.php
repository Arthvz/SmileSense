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
</head>
  <body id="checkout-page" class="bg-white scroll-smooth">
  <header class="bg-neutral-100 shadow-lg shadow-blueSS-600 mb-7">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Smile Sense</span>
        <img class="h-36 w-auto" src="/images/logo.png" alt="Smile Sense - Logo de um dente com cores brancas e cinzas, e uma faixa azul, junto com o nome da Smile Sense!">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" id="open-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-blueSS-300">
        <span class="sr-only">Abrir menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{route('home')}}" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Home</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="{{route('log-in')}}" class="text-l shadow-2xl shadow-neutral-600 font-bold leading-6 text-blueSS-300/80">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div id="mobile-menu" class="hidden" role="dialog" aria-modal="true">
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
          </div>
          <div class="py-6">
            <a href="{{route('log-in')}}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
  <div id="fade" class="visibility: hidden">
    <div id="loader" class="spinner-border text-info visibility: hidden" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
    <div id="message" class="visibility: hidden">
      <div class="alert alert-light" role="alert">
        <h4>Mensagem:</h4>
        <p></p>
        <button id="close-message" type="button" class="btn btn-secondary">
          Fechar
        </button>
      </div>
    </div>
  </div>
    <div id="form-header">
      <h2 class="Titulo text-2xl text-blue-500 text-center">Formulário de Cadastro</h2>
      <p class="text-center">Preencha os campos abaixo para realizar o cadastro da sua empresa no sistema e continuar a compra do seu pedido</p>
      <div class="Parte bg-white rounded-xl mx-auto p-10 my-4">
        <div class="flex flex-col items-center mt-10 form-floating">
          <form id="address-form">
            <div class="grid grid-cols-2 gap-4">
              <div class="form-floating">
                <input type="text" class="w-full border rounded-md px-4 py-2 mt-4" placeholder="Razão Social" require>
              </div>
              <div class="form-floating">
                <input type="number" class="w-full border rounded-md px-4 py-2 mt-4" id="cnpj" name="cnpj" oninput="limitarCaracteres(event)" placeholder="CNPJ" maxlength="14" minlength="14" require>  
              </div>
              <div class="form-floating">
                <input type="text" class="w-full border rounded-md px-4 py-2 mt-4" id="cep" name="cep" placeholder="Digite o seu CEP" maxlength="8" minlength="8" required/>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="col-span-2 form-floating">
                <input type="text" class="w-full border rounded-md px-4 py-2 mt-4" id="address" name="address" placeholder="Rua" disabled required data-input/>
              </div>
              <div class="col-span-2 form-floating">
                <input type="text" class="w-full border rounded-md px-4 py-2 mt-4" id="number"name="number" placeholder="Digite o número da residência" disabled required data-input/>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="col-span-2 form-floating">
                <input type="text" class="w-full border rounded-md px-4 py-2 mt-4" id="complement" name="complement" placeholder="Digite o complemento" disabled data-input/>
              </div>
              <div class="col-span-2 form-floating">
                <input type="text" class="w-full border rounded-md px-4 py-2 mt-4" id="neighborhood" name="neighborhood" placeholder="Bairro" disabled required data-input/>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="col-span-2 form-floating">
                <input type="text" class="w-full border rounded-md px-4 py-2 mt-4" id="city" name="city" placeholder="Cidade" disabled required data-input/>
              </div>
              <div class="form-floating">
                <input type="tel" class="w-full border rounded-md px-4 py-2 mt-4" placeholder="Telefone" require>
              </div>
              <div class="form-floating">
                <input type="email" class="w-full border rounded-md px-4 py-2 mt-4" placeholder="E-mail" require>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="col-span-2 form-floating">
                <select class="w-full border rounded-md px-4 py-2 mt-4" id="region" disabled required data-input>
                  <option selected>Estado</option>
                  <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="GO">Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
                </select>
              </div>
            </div>                
            <h2 class="Titulo text-2xl text-blue-500 text-center">Formas de Pagamento</h2>
            <div class="flex justify-center">
                <label class="flex items-center">
                  <input type="radio" class="border rounded-md px-4 py-2 mt-4 mr-2" name="metodo-pagamento" value="credito" onclick="alterarFormatoInput('credito')">
                  <span class="ml-1">Cartão de Crédito</span>
                </label>
                <label class="flex items-center">
                  <input type="radio" class="border rounded-md px-4 py-2 mt-4 mr-2" name="metodo-pagamento" value="debito" onclick="alterarFormatoInput('debito')">
                  <span class="ml-1">Cartão de Débito</span>
                </label>
                <label class="flex items-center">
                  <input type="radio" class="border rounded-md px-4 py-2 mt-4 mr-2" name="metodo-pagamento" value="pix" onclick="alterarFormatoInput('pix')">
                  <span class="ml-1">Pix</span>
                </label>
            </div>
            <div id="input-container" class="w-72 h-72 bg-gray-200 flex items-center justify-center" style="display: none;">
              <span class="text-gray-500">Insira a imagem aqui (600x600)</span>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <input type="text" class="campos-cartao w-full border rounded-md px-4 py-2 mt-4" placeholder="Nome no Cartão" onkeydown="validateCardNumber(event)" onchange="validateCardNumber(event)" require>
              <input type="number" class="campos-cartao w-full border rounded-md px-4 py-2 mt-4" placeholder="Número do Cartão" require>
              <input type="month" class="campos-cartao w-full border rounded-md px-4 py-2 mt-4" placeholder="Mês" require>
              <input type="number" class="campos-cartao w-full border rounded-md px-4 py-2 mt-4" placeholder="Código de Segurança (CCV)" require>
              <button id="save-btn" type="button" class="botão bg-blue-500 text-white font-bold mt-8 mb-15 border-2 rounded-lg px-15 py-2" onclick="verificarFormulario()">Cadastrar e Comprar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="Parte-1 bg-white rounded-b-xl mx-auto p-10 text-center" style="width: calc(100% - 500px);">
      <h2 class="Titulo text-2xl text-blue-500">Detalhes do Pedido</h2>
      <p>Agradecemos a sua compra do nosso sistema, 
      esperamos que o Smile Sense System seja útil em sua 
      rotina e ajude na organização do seu consultório e otimização 
      de tempo =)</p>
      <p>Após a confirmação do pagamento será enviado no seu e-mail um 
      arquivo contendo o nosso sistema,  caso tenha algum erro na 
      instalação ou download, pedimos que entre em contato com nosso Sac.</p>
      <ul class="Lista">
          <li>Cadastro de Pacientes e Dentista</li>
          <li>Agendamento de Consultas e verificação de agenda</li>
          <li>Cadastro de ficha Anamnese</li>
          <li>Cadastro de ficha de Odontograma</li>
          <li>Bloco de Anotações</li>
      </ul>
  </div>

  <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const openMenu = document.getElementById('open-menu');

        openMenu.addEventListener('click', function(){
          mobileMenu.classList.remove('hidden');
          mobileMenu.classList.add('block');
        });

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
<script src="/js/scripts.js"></script>
</html>
