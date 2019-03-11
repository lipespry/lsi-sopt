    document.addEventListener(
        'DOMContentLoaded',
        function(){

            let dvErro = document.getElementById('add_err');
            let btn = document.getElementById('login');

            btn.addEventListener(
                'click',
                function(ev){
                    ev.preventDefault();

                    let username = document.getElementById('name').value;
                    let password = document.getElementById('word').value;

                    $.ajax({
                        url: 'login.php',
                        method: 'post',
                        data: {
                            name: username,
                            pwd: password
                        },

                        beforeSend: function(){
                            dvErro.style.display = 'none';
                            btn.innerHTML = (
                                '<div class="spinner">'
                                +'<div class="bounce1"></div>'
                                +'<div class="bounce2"></div>'
                                +'<div class="bounce3"></div>'
                                +'spinner' // Para reprodução
                                +'</div>'
                            );
                            btn.blur();
                        },

                        success: function(resposta){
                            dvErro.style.display = 'inline';

                            if (resposta == 'true') { // Login OK
                                dvErro.innerHTML = 'right username or password';
                                // Redireciona:
                                //window.location.href = 'index.php';
                            } else if (resposta == 'false') { // Login ERRO
                                dvErro.innerHTML = (
                                    '<font style="'
                                    +'margin-top: 50px; padding: 20px; '
                                    +'background-color: #C70039; '
                                    +'color: white; border-width: 0px;">'
                                    +'Usuario ou Senha incorretos'
                                    +'</font>'
                                );
                                btn.innerHTML = '<strong>Logar</strong>';
                            } else { // Notifica caso receba alguma outra resposta
                                console.log(resposta);
                                alert('Servidor retornou resposta inválida.');
                            }
                        },

                        error: function(erro){
                            console.log(erro);
                            alert('Erro no AJAX - detalhes no console.');
                        }
                    });
                },
                false
            );
        },
        false
    );
