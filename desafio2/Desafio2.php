<?php
class Desafio2
{

    public function calcularRanking($vitorias, $derrotas)
    {
        $saldoVitorias = $vitorias - $derrotas;

        if ($saldoVitorias < 10) {
            $nivel = "Ferro";
        } elseif ($saldoVitorias >= 11 && $saldoVitorias <= 20) {
            $nivel = "Bronze";
        } elseif ($saldoVitorias >= 21 && $saldoVitorias <= 50) {
            $nivel = "Prata";
        } elseif ($saldoVitorias >= 51 && $saldoVitorias <= 80) {
            $nivel = "Ouro";
        } elseif ($saldoVitorias >= 81 && $saldoVitorias <= 90) {
            $nivel = "Diamante";
        } elseif ($saldoVitorias >= 91 && $saldoVitorias <= 100) {
            $nivel = "Lendário";
        } else {
            $nivel = "Imortal";
        }

        echo "O Herói tem de saldo de $saldoVitorias está no nível de $nivel";
    }

    public function falaeOsValores()
    {
        echo "por favor digite o número de Vitórias:";
        $vitorias = readline();
        echo "por favor digite o número de Derrotas:";
        $derrotas = readline();
        $this->calcularRanking($vitorias, $derrotas);
    }
}

$desafio = new Desafio2();

$desafio->falaeOsValores();
