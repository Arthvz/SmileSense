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
  var cnpjInput = document.getElementById('cnpj');
  var cnpj = cnpjInput.value;

  if (cnpj.length === 14 && validarCNPJ(cnpj)) {
    console.log('CNPJ válido!');
    cnpjInput.style.backgroundColor = 'white'; // Reset the input color to white
  } else {
    console.log('CNPJ inválido!');
    cnpjInput.style.backgroundColor = 'red'; // Change the input color to red
  }
}

function limitarCaracteres(event) {
  var input = event.target;
  var maxLength = parseInt(input.getAttribute('maxlength'));
  if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
  }
}


