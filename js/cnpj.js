const pesquisarCnpj = async() => {

    const cnpj = document.getElementById('cnpj').value
    const url = `https://www.receitaws.com.br/v1/cnpj/${cnpj}`


    $.ajax({
        url: `https://receitaws.com.br/v1/cnpj/${cnpj}`,
        dataType: 'jsonp',
        type: 'GET',
        success: function (data) {
            var dadosCnpjs = {
                tipo : data.tipo,
                abertura : data.abertura,
                nome : data.nome,
                fantasia : data.fantasia,
                cnpj : data.cnpj,
                cep : data.cep,
                logradouro : data.logradouro,
                complemento : data.complemento,
                bairro : data.bairro,
                cidade : data.municipio,
                numero : data.numero,
                uf : data.uf,
            }
            console.log(dadosCnpjs);
            preencherFormulario(dadosCnpjs)
        }
    })
}


const preencherFormulario = (data) =>{
 
    document.getElementById('tipo').value = data.tipo
    document.getElementById('abertura').value = data.abertura
    document.getElementById('nome').value = data.nome
    document.getElementById('fantasia').value = data.fantasia
    document.getElementById('cep').value = data.cep
    document.getElementById('rua').value = data.logradouro
    document.getElementById('complemento').value = data.complemento
    document.getElementById('bairro').value = data.bairro
    document.getElementById('cidade').value = data.cidade
    document.getElementById('estado').value = data.uf
}

document.getElementById('submitCNPJ').onclick = pesquisarCnpj