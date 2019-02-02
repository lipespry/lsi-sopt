<?php

class CelulasReunioes
{
    public $idCelula, $data, $presentes, $visitas,
        $criancas, $decisoes, $discipulados, $jejum,
        $evangelismo, $supervisao, $oferta;

    public function __construct($dados)
    {
        $this->idCelula = $dados[0];
        $this->data = $dados[1];
        $this->presentes = $dados[2];
        $this->visitas = $dados[3];
        $this->criancas = $dados[4];
        $this->decisoes = $dados[5];
        $this->discipulados = $dados[6];
        $this->jejum = $dados[7];
        $this->evangelismo = $dados[8];
        $this->supervisao = $dados[9];
        $this->oferta = $dados[10];
    }

}

$obj1 = new CelulasReunioes(
    array(
        '17', '2019-01-30', '0', '0', '0', '0', '0', 's', 's', 's', '30'
    )
);
$obj2 = new CelulasReunioes(
    array(
        '17', '2019-02-01', '10', '2', '2', '6', '1', 'n', 'n', 'n', '0'
    )
);

header('Content-Type: application/json');

$retorno = array('ok', array($obj1, $obj2));

echo json_encode($retorno, true);

