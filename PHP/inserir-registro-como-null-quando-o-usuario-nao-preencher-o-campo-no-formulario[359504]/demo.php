<?php

//$Data_Emprestimo = ''; // Retorna: NULL
$Data_Emprestimo = '30/01/2019'; // Retorna: (string) '2019-01-30'
$Data_Emprestimo = (
    empty($Data_Emprestimo)
    ? NULL
    : implode(
        "-",
        array_reverse(explode("/", $Data_Emprestimo))
    )
);

var_dump($Data_Emprestimo);
