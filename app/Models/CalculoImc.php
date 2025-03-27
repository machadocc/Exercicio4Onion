<?php

namespace App\Models;

use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Database\Eloquent\Model;

class CalculoImc extends Model
{

    private $peso;
    private $altura;

    public function getPeso(): mixed
    {
        return $this->peso;
    }

    public function setPeso($peso): CalculoImc
    {
        $this->peso = $peso;

        return $this;
    }

    public function getAltura(): mixed
    {
        return $this->altura;
    }

    public function setAltura($altura): CalculoImc
    {
        $this->altura = $altura;

        return $this;
    }

    public function calculaImc(): string
    {
        $peso   = $this->getPeso();
        $altura = $this->getAltura();

        $valor = round($peso / ($altura * $altura), 2);

        $imc = self::validaResultado($valor);

        return $imc;
    }

    private static function validaResultado(float $imc): string
    {
        switch($imc){
            case $imc > 18.5:
                $resultado = "$imc - A baixo do peso";
            break;
            case $imc >= 18.5 && $imc <= 24.9:
                $resultado = "$imc - Peso normal";
                break;
            case $imc >= 25 && $imc <= 29.9:
                $resultado = "$imc - Acima do peso (sobrepeso)";
                break;
            case $imc >= 30 && $imc <= 34.9:
                $resultado = "$imc - Obesidade I";
                break;
            case $imc >= 35 && $imc <= 39.9:
                $resultado = "$imc - Obesidade II";
                break;
            default:
                $resultado = "$imc - Obesidade III";
        }

        return $resultado;
    }
    
}
