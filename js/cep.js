

const pesquisarCep = async() => {

    const cep = document.getElementById('cep').value
    const url = `https://viacep.com.br/ws/${cep}/json/`

    const dados = await fetch(url)

    const endereco = await dados.json()
    preencherFormulario(endereco)
}


const preencherFormulario = (endereco) =>{

    document.getElementById('rua').value = endereco.logradouro
    document.getElementById('complemento').value = endereco.complemento
    document.getElementById('bairro').value = endereco.bairro
    document.getElementById('cidade').value = endereco.localidade
    document.getElementById('estado').value = endereco.uf
}

document.getElementById('submitCEP').onclick = pesquisarCep
