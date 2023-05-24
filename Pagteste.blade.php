<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tailwind CSS Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    </style>
    <script>
        function menuShow() {
            let menuMobile = document.querySelector('.menu');
            if (menuMobile.classList.contains('open')) {
                menuMobile.classList.remove('open');
                document.querySelector('.icon').src = "img/menu_white_36dp.svg";
            } else {
                menuMobile.classList.add('open');
                document.querySelector('.icon').src = "img/close_white_36dp.svg";
            }
        }
        function alterarFormatoInput(metodoPagamento) {
            const inputContainer = document.getElementById('input-container');
            const camposCartao = document.querySelectorAll('.campos-cartao');
                    
            for (let i = 0; i < camposCartao.length; i++) {
                const campoCartao = camposCartao[i];
                        
                if (metodoPagamento === 'pix' || metodoPagamento === '') {
                campoCartao.style.display = 'none';
                } else {
                campoCartao.style.display = 'block';
                }
                }
                    
                if (metodoPagamento === 'pix') {
                    inputContainer.style.display = 'block';
                } else {
                    inputContainer.style.display = 'none';
                }
            }
    </script>
</head>

<body class="bg-white font-sans">
    <header class="bg-gray-900 shadow">
        <div class="flex justify-between p-6">
            <div class="flex items-center">
                <h1 class="Titulo text-white font-bold text-xl">Smile Sense System</h1>
            </div>
            <nav class="flex items-center">
                <ul class="flex justify-center list-none m-0">
                    <li class="mx-4">
                        <a href="#" class="text-white font-medium text-lg">Inicio</a>
                    </li>
                    <li class="mx-4">
                        <a href="#" class="text-white font-medium text-lg">Sobre nós</a>
                    </li>
                    <li class="mx-4">
                        <a href="#" class="text-white font-medium text-lg">Contatos</a>
                    </li>
                </ul>
                <div class="ml-4">
                    <button class="bg-blue-500 text-white font-medium px-4 py-2 rounded">Login</button>
                </div>
                <div class="menu-icon">
                    <button onclick="menuShow()"><img class="icon" src="img/menu_white_36dp.svg" alt=""></button>
                </div>
            </nav>
        </div>
    </header>

    <div class="Cadastro">
        <div class="Parte bg-white rounded-xl mx-auto p-10 my-4">
            <h2 class="Titulo text-2xl text-blue-500 text-center">Formulário de Cadastro</h2>
            <p class="text-center">Preencha os campos abaixo para realizar o cadastro da sua empresa no 
                sistema e continuar a compra do seu pedido</p>
                <div class="flex flex-col items-center mt-10">
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2" placeholder="Razão Social">
                        <input type="number" class="w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="CNPJ">
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Endereço">
                        <input type="number" class="w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="CEP">
                        <input type="tel" class="w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Telefone">
                        <input type="email" class="w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="E-mail">

                        <h2 class="Titulo text-2xl text-blue-500">Formas de Pagamento</h2>
                        <div class="flex">
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

                    <input type="text" class="campos-cartao w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Nome no Cartão">
                    <input type="number" class="campos-cartao w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Número do Cartão">
                    <input type="month" class="campos-cartao w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Mês">
                    <input type="number" class="campos-cartao w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Código de Segurança (CCV)">
                    <button class="botão bg-blue-500 text-white font-bold mt-8 mb-15 border-2 rounded-lg px-15 py-2">Cadastrar e Comprar</button>
                </div>
        </div>
    </div>

    <div class="Parte-1 bg-white rounded-b-xl mx-auto p-10 text-center">
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

    <footer class="mt-20 bg-gray-900 shadow w-full">
        <div class="h-40 flex items-center justify-center">
            <p class="Titulo text-white text-3xl">Uma distribuição, Herbert Richards.</p>
        </div>
    </footer>
</body>
</html>