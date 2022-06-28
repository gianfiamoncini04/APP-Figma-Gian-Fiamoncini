const formulario = document.querySelector('#formulario')
const nome = document.querySelector('#nome')
const textNome = document.querySelector('#textNome')
const email = document.querySelector('#email')
const textEmail = document.querySelector('#textEmail')
const senha = document.querySelector('#senha')
const textSenha = document.querySelector('#textSenha')
const botao = document.querySelector('#register')
const textFormulario = document.querySelector('#textFormulario')
const telefone = document.querySelector('#telefone')
const textTelefone = document.querySelector('#textTelefone')
// const cep = document.querySelector('#cep')
// const textCep = document.querySelector('#textCep')



let db = openDatabase('CADASTRO_FIGMA', 'v1.0', 'Mybank', 2*1024*1024)

db.transaction(function(tx){
    tx.executeSql('CREATE TABLE IF NOT EXISTS tabela(nome VARCHAR(20), telefone BIGINT(14), email VARCHAR(100), senha VARCHAR(6))') 
    // location.reload()
})

function register(){
    db.transaction(function(tx){
        tx.executeSql('INSERT INTO tabela(nome,telefone,email,senha,cep) VALUES(?,?,?,?)',[nome.value,telefone.value,email.value,senha.value])
    location.reload()    
    })
}

botao.addEventListener('click', function (e) {
    e.preventDefault()  
    
    if(nome.value == '' && email.value =='' && senha.value == '' && telefone.value =='' && cep.value ==''){
        textFormulario.textContent = 'Você precisa preencher todos os campos'
    }else{
        textFormulario.textContent = ''
    }
    
    console.log(nome.value)
    console.log(email.value)
    console.log(senha.value)
    console.log(telefone.value)
    console.log(cep.value)


})

email.addEventListener('keyup', function () {
    if(validarEmail(email.value) !== true){
        textEmail.textContent = 'O formato do email deve ser com letras minúsculas ex.: teste@gmail.com'    
    }else{
        textEmail.textContent = ''
    }
}) 

function validarEmail(e_mail){
    let padraoEmail = /^[a-z0-9.]+@[a-z0-9]+\.([a-z]+)?$/
    return padraoEmail.test(e_mail)
}

senha.addEventListener('keyup', function() {
    if(validarSenha(senha.value) !== true){
        textSenha.textContent = 'O formato da senha deve ter 6 caracteres, com 1 letra maiúscula, 1 minúscula, 1 número e 1 carctere especial. ex.: Br@sil2022'    
    }else{
        textSenha.textContent = ''
    }
})

function validarSenha(senhaValor){
    let padraoSenha = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{6,}$/

    return padraoSenha.test(senhaValor) 
}

telefone.addEventListener('keyup', function() {
    if(validarTelefone(telefone.value) !== true){
        textTelefone.textContent = 'O formato do telefone deve ser (##) #####-####'    
    }else{
        textTelefone.textContent = ''
    }
})

function validarTelefone(telefoneValor){
    let padraoTelefone = /^\([1-9]\d\)\s9?\d{4}-\d{4}$/

    return padraoTelefone.test(telefoneValor)
}

// cep.addEventListener('keyup', function() {
//     if(validarCep(cep.value) !== true){
//         textCep.textContent = 'O formato do CEP deve ser #####-###'    
//     }else{
//         textCep.textContent = ''
//     }
// })

// function validarCep(cepValor){
//     let padraoCep = /\d{2}\.\d{3}\-\d{3}/

//     return padraoCep.test(cepValor)
// }


