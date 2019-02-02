<!DOCTYPE html>
<html>
    <head>
        <title>Receber JSON - Por LipESprY</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <script>
            $.ajax({
                url: 'http://localhost/json.php',
                dataType: 'json'
            })
            .done(function(resultado){
                resultado[1].forEach(function(reuniao, index){
                    let html  = '<h2>' + reuniao.idCelula + '</h2>';
                    html += '<ul class="vertical">';
                    html += '  <li><label class="labelPequeno">Data</label> : ' + reuniao.data + '</li>';
                    html += '</ul>';
                    // Aqui o html já está pronto para o uso! Aplique-o onde quiser.
                    console.log(html);
                });
            });
        </script>
    </body>
</html>