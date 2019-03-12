<?php

$url = 'https://treichel-img.azureedge.net/product/14667-sal-temperado-gostinho-alho-e-sal-200g-g.jpg';

$curl = curl_init($url);

$arquivo = fopen('imagem.png', 'wb');

curl_setopt($curl, CURLOPT_FILE, $arquivo);
curl_setopt($curl, CURLOPT_HEADER, 0);

curl_setopt($curl, CURLOPT_CAINFO, dirname(__FILE__).'/cacert.pem');
//      http://curl.haxx.se/ca/cacert.pem <<<<------------^

curl_exec($curl);
echo curl_error($curl);

curl_close($curl);
fclose($arquivo);
