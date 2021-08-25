'use strict';

const limparFormulario = (endereco) => {
    document.getElementById('rua').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('cidade').value = '';
    document.getElementById('uf').value = '';
}


const preencherFormulario = (endereco) => {
    document.getElementById('rua').value = endereco.logradouro;
    document.getElementById('bairro').value = endereco.bairro;
    document.getElementById('cidade').value = endereco.localidade;
    document.getElementById('uf').value = endereco.uf;
}


const eNumero = (numero) => /^[0-9]+$/.test(numero);

const cepValido = (cep) => cep.lenght == 8 && eNumero(cep); 

const pesquisarCEP = async() => {

    limparFormulario();

    const cep = document.getElementById('input_cep').value;
    const url = ` http://viacep.com.br/ws/${cep}/json/`;

    if(cepValido(cep)){

    const dados = await fetch(url);
    const endereco = await dados.jason();

    if(endereco.hasOwnProperty('erro')){
        document.getElementById('rua').value = 'CEP não encontrado!';
    }
        else {
            preencherFormulario (endereco);
        }

    }
    else {
        document.getElementById('rua').value = 'CEP inválido!';
    }
       
}

document.getElementById('input_cep').addEventListener('focusout', pesquisarCEP);
