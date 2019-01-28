<?php
echo '<pre>';
$strings = array(
    'uma string inválida',
    'uma string valida',
    '0uma string invalida',
    'uma string invalida!',
    'uma-string_valida.',
    '@uma-string_invalida.'
);

foreach ($strings as $str) {
    if (preg_match('/^[^a-z]+|[^a-zA-Z\s\,\.\-\_]+/', $str))
        echo 'String COM caracteres inválidos: '.$str.'<br>';
    else
        echo 'String SEM caracteres inválidos: '.$str.'<br>';
}

/*
String COM caracteres inválidos: uma string inválida
String SEM caracteres inválidos: uma string valida
String COM caracteres inválidos: 0uma string invalida
String COM caracteres inválidos: uma string invalida!
String SEM caracteres inválidos: uma-string_valida.
String COM caracteres inválidos: @uma-string_invalida.
********************************************************************************/
echo '<pre>';
