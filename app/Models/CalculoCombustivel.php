<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\SkippedWithMessageException;

class CalculoCombustivel extends Model
{
    private $consumo;
    private $distancia;
    private $valor;

    public function getConsumo()
    {
        return $this->consumo;
    }

    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;

        return $this;
    }

    public function getDistancia()
    {
        return $this->distancia;
    }

    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function calculaGastoCombustivel(): float
    {
        $gastoFinal = 0.0;

        if(isset($this->distancia) && isset($this->consumo)){
            $litrosNescessarios = round($this->getDistancia() / $this->getConsumo(), 2);
            (float) $gastoFinal = round($litrosNescessarios * $this->getValor(), 2);
        }

        return $gastoFinal;
    }

}
