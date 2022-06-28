

            const email = document.querySelector('#email_usuario')
            const textEmail = document.querySelector('#textEmail')
            const senha = document.querySelector('#senha_usuario')
            const textSenha = document.querySelector('#textSenha')
            const telefone = document.querySelector('#telefone_usuario')
            const textTelefone = document.querySelector('#textTelefone')

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
                    textTelefone.textContent = 'O formato do telefone deve ser ## #####-####'    
                }else{
                    textTelefone.textContent = ''
                }
            })

            function validarTelefone(telefoneValor){
                let padraoTelefone = /^\([1-9]\d\)\s9?\d{4}-\d{4}$/

                return padraoTelefone.test(telefoneValor)
            
            } 

    