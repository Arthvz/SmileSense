<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Autocomplete Endereço</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    </style>
    <script src="js/scripts.js" defer></script>
  </head>
  <body id="checkout-page" class="bg-white font-sans">
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
              <input type="text" class="campos-cartao w-full border rounded-md px-4 py-2 mt-4" placeholder="Nome no Cartão" require>
              <input type="number" class="campos-cartao w-full border rounded-md px-4 py-2 mt-4" placeholder="Número do Cartão" require>
              <input type="month" class="campos-cartao w-full border rounded-md px-4 py-2 mt-4" placeholder="Mês" require>
              <input type="number" class="campos-cartao w-full border rounded-md px-4 py-2 mt-4" placeholder="Código de Segurança (CCV)" require>
              <button id="save-btn" type="submit" class="botão bg-blue-500 text-white font-bold mt-8 mb-15 border-2 rounded-lg px-15 py-2" onclick="verificarFormulario()">Cadastrar e Comprar</button>
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

    <footer class="mt-20 bg-gray-900 shadow w-full">
        <div class="h-40 flex items-center justify-center">
            <p class="Titulo text-white text-3xl">Uma distribuição, Herbert Richards.</p>
        </div>
    </footer>
  </body>
</html>
