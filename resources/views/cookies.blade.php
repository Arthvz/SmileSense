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
      <a href="{{route('home')}}" class="text-xl shadow-xl shadow-neutral-600 underline decoration-2  hover:underline-offset-4 hover:decoration-4 font-extrabold leading-6 text-blueSS-300/80">Home</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="{{route('log-in')}}" class="text-l shadow-2xl shadow-neutral-600 font-bold leading-6 text-blueSS-300/80">Log in <span aria-hidden="true">&rarr;</span></a>
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
          </div>
          <div class="py-6">
            <a href="{{route('log-in')}}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-neutral-100 hover:bg-gray-50 hover:text-blueSS-300">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="mx-auto w-[1400px] text-center text-neutral-900">
    <h1><strong>Política de Cookies</strong></h1>

    <p>A presente Política de Cookies é um documento complementar à Política de Privacidade da SmileSense, disponível neste link: <a href="#">Política de privacidade</a>. Aqui, você encontrará informações objetivas e claras sobre o que são Cookies, quais Cookies utilizamos em nossas aplicações, qual papel desempenham e como configurá-los.</p>
    <h1>1. O que são Cookies?</h1>
    
    <p>Cookies são pequenos arquivos de texto ou fragmentos de informação que são baixados em seu computador, smartphone ou qualquer outro dispositivo com acesso à internet quando você visita nossa aplicação.</p>

    <p>Eles contêm informações sobre a sua navegação em nossas páginas e retêm apenas informações relacionadas a suas preferências.</p>

    <p>Assim, essa página consegue armazenar e recuperar os dados sobre os seus hábitos de navegação, de forma a melhorar a experiência de uso, por exemplo. É importante frisar que eles não contêm informações pessoais específicas, como dados sensíveis ou bancários.</p>

    <p>O seu navegador armazena os cookies no disco rígido, mas ocupam um espaço de memória mínimo, que não afetam o desempenho do seu computador. A maioria das informações são apagadas logo ao encerrar a sessão, como você verá no próximo tópico.</p>
    <h2>1.1. Tipos de Cookies</h2>

    <p>Os cookies, quanto a seus proprietários, podem ser:</p>

        <p>Cookies proprietários: são cookies definidos por nós ou por terceiros em nosso nome</p>
        <p>Cookies de terceiros: são cookies definidos por terceiros confiáveis em nossa aplicação</p>

    <p>Os cookies, quanto ao seu tempo de vida, podem ser:</p>

        <p>Cookies de sessão ou temporários: são cookies que expiram assim que você fecha o seu navegador, encerrando a sessão.</p>
        <p>Cookies persistentes ou permanentes: são cookies que permanecem no seu dispositivo durante um período determinado ou até que você os exclua.</p>

    <p>Os cookies, quanto a sua finalidade, podem ser:</p>

        <p>Cookies necessários: são cookies essenciais que possibilitam a navegação em nossas aplicações e o acesso a todos os recursos; se estes, nossos serviços podem apresentar mal desempenho ou não funcionar.</p>
        <p>Cookies de desempenho: são cookies que otimizam a forma que nossas aplicações funcionam, coletando informações anônimas sobre as páginas acessadas.</p>
        <p>Cookies de funcionalidade: são cookies que memorizam suas preferências e escolhas (como seu nome de usuário).</p>
        <p>Cookies de publicidade: são cookies que direcionam anúncios em função dos seus interesses e limitam a quantidade de vezes que o anúncio aparece.</p>

    <h2>2. Por que usamos Cookies?</h2>

    A (nome empresarial) utiliza Cookies para fornecer a melhor experiência de uso, tornando nossas aplicações mais fáceis e personalizadas, tendo por base suas escolhas e comportamento de navegação.

    Assim, buscamos entender como você utiliza nossas aplicações e ajustar o conteúdo para torná-lo mais relevante para você, além de lembrar de suas preferências.

    Os Cookies participam deste processo porquanto armazenam, leem e executam os dados necessários para cumprir com o nosso objetivo.
    3. Que tipo de Cookies utilizamos? 

    Abaixo listamos todos os Cookies que podem ser utilizados pela (nome empresarial). É importante lembrar que você pode gerenciar a permissão concedida para cada Cookie em seu navegador.

    Além disso, uma vez que os Cookies capturam dados sobre você, aconselhamos a leitura de nossa Política de Privacidade, disponível neste link (link da política de privacidade).
    3.1. Cookies necessários
    Cookie	Tempo	Propriedade	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    3.2. Cookies de desempenho 
    Cookie	Tempo	Propriedade	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    3.3. Cookies de funcionalidade
    Cookie	Tempo	Propriedade	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    3.4. Cookies de publicidade
    Cookie	Tempo	Propriedade	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    Cookie	Permanente ou temporário	Proprietário ou de terceiro	Descrição
    4. Gerenciamento dos Cookies

    A instalação dos cookies está sujeita ao seu consentimento. Apesar da maioria dos navegadores estar inicialmente configurada para aceitar cookies de forma automática, você pode rever suas permissões a qualquer tempo, de forma a bloqueá-los, aceitá-los ou ativar notificações para quando alguns cookies forem enviados ao seu dispositivo. 

    Atualmente, na primeira vez que você acessa nossas aplicações, será requerida a sua concordância com a instalação destes. Apenas após a sua aceitação eles serão ativados.

    Para tanto, utilizamos um sistema de (banner de informações ou outro mecanismo que alerta e solicita o consentimento) na página inicial de (nome empresarial). Dessa maneira, não apenas solicitamos sua concordância, mas também informamos que a navegação continuada em nossos sites será entendida como consentimento. 

    Como já dito, você pode, a qualquer tempo e sem nenhum custo, alterar as permissões, bloquear ou recusar os Cookies. Você também pode configurá-los caso a caso. Todavia, a revogação do consentimento de determinados Cookies pode inviabilizar o funcionamento correto de alguns recursos da plataforma.

    Para gerenciar os cookies do seu navegador, basta fazê-lo diretamente nas configurações do navegador, na área de gestão de Cookies.

    Você pode acessar tutoriais sobre o tema diretamente nos links abaixo:

    Se você usa o Internet Explorer.

    Se você usa o Firefox.

    Se você usa o Safari.

    Se você usa o Google Chrome.

    Se você usa o Microsoft Edge.

    Se você usa o Opera.
    5. Disposições finais

    Para a (nome empresarial), a privacidade e confiança são fundamentais para a nossa relação com você. Estamos sempre nos atualizando para manter os mais altos padrões de segurança 

    Assim, reservamo-nos o direito de alterar esta Política de Cookies a qualquer tempo. As mudanças entrarão em vigor logo após a publicação, e você será avisado.

    Ao continuar a navegação nas nossas aplicações após essa mudança se tornar eficaz, você concorda com elas. Aconselhamos que você sempre verifique esta Política, bem como a nossa Política de Privacidade.

    Em caso de dúvidas sobre esta Política de Cookies, entre em contato conosco pelos seguintes meios:

        Meio de contato: email, telefone ou outra forma
        Meio de contato: email, telefone ou outra forma

    Esta Política de Cookies foi atualizada pela última vez: xx/xx/xxxx.

    O presente modelo foi produzido pela Equipe Legalcloud para auxiliar na elaboração de uma Política de Cookies. Veja o modelo original aqui.
    </p>
</section>
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
</html>