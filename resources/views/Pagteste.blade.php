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
        const addressForm = document.querySelector("#address-form");
        const cepInput = document.querySelector("#cep");
        const addressInput = document.querySelector("#address");
        const cityInput = document.querySelector("#city");
        const neighborhoodInput = document.querySelector("#neighborhood");
        const regionInput = document.querySelector("#region");
        const formInputs = document.querySelectorAll("[data-input]");

        const closeButton = document.querySelector("#close-message");

        // Validate CEP Input
        cepInput.addEventListener("keypress", (e) => {
            const onlyNumbers = /[0-9]|\./;
            const key = String.fromCharCode(e.keyCode);

            console.log(key);

            console.log(onlyNumbers.test(key));

            // allow only numbers
            if (!onlyNumbers.test(key)) {
                e.preventDefault();
                return;
            }
        });

        // Evento to get address
        cepInput.addEventListener("keyup", (e) => {
            const inputValue = e.target.value;

            //   Check if we have a CEP
            if (inputValue.length === 8) {
                getAddress(inputValue);
            }
        });

        // Get address from API
        const getAddress = async (cep) => {
            toggleLoader();

            cepInput.blur();

            const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;

            const response = await fetch(apiUrl);

            const data = await response.json();

            console.log(data);
            console.log(formInputs);
            console.log(data.erro);

            // Show error and reset form
            if (data.erro === "true") {
                if (!addressInput.hasAttribute("disabled")) {
                toggleDisabled();
                }

                addressForm.reset();
                toggleLoader();
                toggleMessage("CEP Inválido, tente novamente.");
                return;
            }

            // Activate disabled attribute if form is empty
            if (addressInput.value === "") {
                toggleDisabled();
            }

            addressInput.value = data.logradouro;
            cityInput.value = data.localidade;
            neighborhoodInput.value = data.bairro;
            regionInput.value = data.uf;

            toggleLoader();
        };

        // Add or remove disable attribute
        const toggleDisabled = () => {
            if (regionInput.hasAttribute("disabled")) {
                formInputs.forEach((input) => {
                input.removeAttribute("disabled");
                });
            } else {
                formInputs.forEach((input) => {
                input.setAttribute("disabled", "disabled");
                });
            }
        };

        // Show or hide loader
        const toggleLoader = () => {
            const fadeElement = document.querySelector("#fade");
            const loaderElement = document.querySelector("#loader");

            fadeElement.classList.toggle("hide");
            loaderElement.classList.toggle("hide");
        };

        // Show or hide message
        const toggleMessage = (msg) => {
            const fadeElement = document.querySelector("#fade");
            const messageElement = document.querySelector("#message");

            const messageTextElement = document.querySelector("#message p");

            messageTextElement.innerText = msg;

            fadeElement.classList.toggle("hide");
            messageElement.classList.toggle("hide");
        };

        // Close message modal
        closeButton.addEventListener("click", () => toggleMessage());

        // Save address
        addressForm.addEventListener("submit", (e) => {
            e.preventDefault();

            toggleLoader();

            setTimeout(() => {
                toggleLoader();

                toggleMessage("Endereço salvo com sucesso!");

                addressForm.reset();

                toggleDisabled();
            }, 1000);
        });
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
        function validarCNPJ(cnpj) {
            cnpj = cnpj.replace(/[^\d]+/g, '');
            
            if (cnpj.length !== 14) {
                return false;
            }

            if (/^(\d)\1+$/.test(cnpj)) {
                return false;
            }
            
            var soma = 0;
            var peso = 2;
        
            for (var i = 11; i >= 0; i--) {
                soma += parseInt(cnpj.charAt(i)) * peso;
                peso = peso === 9 ? 2 : peso + 1;
            }
        
            var digito = 11 - (soma % 11);
            var digitoVerificador = digito > 9 ? 0 : digito;
        
            if (parseInt(cnpj.charAt(12)) !== digitoVerificador) {
                return false;
            }
        
            soma = 0;
            peso = 2;
            
            for (i = 12; i >= 0; i--) {
                soma += parseInt(cnpj.charAt(i)) * peso;
                peso = peso === 9 ? 2 : peso + 1;
            }
        
            digito = 11 - (soma % 11);
            digitoVerificador = digito > 9 ? 0 : digito;
            
            if (parseInt(cnpj.charAt(13)) !== digitoVerificador) {
                return false;
            }
            return true;
            }
            
        function verificarFormulario() {
            var cnpj = document.getElementById('cnpj').value;
            if (validarCNPJ(cnpj)) {
                alert('CNPJ válido!');
            } else {
                alert('CNPJ inválido!');
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
        <div id="order-form-container" class="Parte bg-white rounded-xl mx-auto p-10 my-4">
            <h2 class="Titulo text-2xl text-blue-500 text-center">Formulário de Cadastro</h2>
            <p class="text-center">Preencha os campos abaixo para realizar o cadastro da sua empresa no 
                sistema e continuar a compra do seu pedido</p>
                <form id="address-form">
                    <div class="flex flex-col items-center mt-10 form-floating">
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Razão Social" require>
                        <input type="number" class="w-1/3 border rounded-md px-4 py-2 mt-4" id="cnpj" name="cnpj" placeholder="CNPJ" require>
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2 mt-4 form-control shadow-none" id="cep" maxlength="8" minlength="8" name="cep" placeholder="CEP" required><br>
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2 mt-4 form-control shadow-none" id="address" name="address" placeholder="Rua" disabled required data-input><br>
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2 mt-4 form-control shadow-none" id="number" name="number" placeholder="N°" required disabled data-input><br>
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2 mt-4 form-control shadow-none" id="complement" name="complement" placeholder="Complemento" disabled data-input><br>
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2 mt-4 form-control shadow-none" id="neighborhood" name="neighborhood" placeholder="Bairro" disabled required data-input><br>
                        <input type="text" class="w-1/3 border rounded-md px-4 py-2 mt-4 form-control shadow-none" id="city" name="city" placeholder="Cidade" required disabled data-input><br>
                        <input type="tel" class="w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Telefone" require>
                        <input type="email" class="w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="E-mail" require>

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

                        <input type="text" class="campos-cartao w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Nome no Cartão" require>
                        <input type="number" class="campos-cartao w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Número do Cartão" require>
                        <input type="month" class="campos-cartao w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Mês" require>
                        <input type="number" class="campos-cartao w-1/3 border rounded-md px-4 py-2 mt-4" placeholder="Código de Segurança (CCV)" require>
                        <button class="botão bg-blue-500 text-white font-bold mt-8 mb-15 border-2 rounded-lg px-15 py-2" onclick="verificarFormulario()">Cadastrar e Comprar</button>
                    </div>
                </form>
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