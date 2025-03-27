<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalculoSono extends Model
{

    private $idade;
    private $tempoSono;

    public function getIdade(): mixed
    {
        return $this->idade;
    }

    public function setIdade($idade): CalculoSono
    {
        $this->idade = $idade;

        return $this;
    }

    public function getTempoSono(): mixed
    {
        return $this->tempoSono;
    }

    public function setTempoSono($tempoSono): CalculoSono
    {
        $this->tempoSono = $tempoSono;

        return $this;
    }

    public function calculaSono(): string
    {
        $sResultado = '';
        $idade      = $this->getIdade();
        $tempoSono  = $this->getTempoSono();

        switch($idade){
            case $idade <= 0.3:
                if($tempoSono >= 14 && $tempoSono <= 17){
                   $sResultado = 'Sono dentro do recomendado para a idade.';
                }
                else{
                    $sResultado = 'Sono Desregulado, ideal entre 14 e 17 horas se sono diárias';
                }
                
                break;
            case $idade <= 0.11:
                if($tempoSono >= 12 && $tempoSono <= 15){
                    $sResultado = 'Sono dentro do recomendado para a idade.';
                 }
                 else{
                     $sResultado = 'Sono Desregulado, ideal entre 12 e 15 horas se sono diárias';
                 }
                 
                 break;
            case $idade <= 2:
                if($tempoSono >= 11 && $tempoSono <= 14){
                    $sResultado = 'Sono dentro do recomendado para a idade.';
                }
                else{
                    $sResultado = 'Sono Desregulado, ideal entre 11 e 14 horas se sono diárias';
                }
                
                break;
            case $idade <= 5:
                if($tempoSono >= 10 && $tempoSono <= 13){
                    $sResultado = 'Sono dentro do recomendado para a idade.';
                }
                else{
                    $sResultado = 'Sono Desregulado, ideal entre 10 e 13 horas se sono diárias';
                }
                    
                break;
            case $idade <= 13:
                if($tempoSono >= 9 && $tempoSono <= 11){
                    $sResultado = 'Sono dentro do recomendado para a idade.';
                }
                else{
                    $sResultado = 'Sono Desregulado, ideal entre 9 e 11 horas se sono diárias';
                }
                
                break;
            case $idade <= 17:
                if($tempoSono <= 8 && $tempoSono <= 10){
                    $sResultado = 'Sono dentro do recomendado para a idade.';
                }
                else{
                    $sResultado = 'Sono Desregulado, ideal entre 8 e 10 horas se sono diárias';
                }
                
                break;
            case $idade <= 64:
                if($tempoSono >= 7 && $tempoSono <= 9){
                    $sResultado = 'Sono dentro do recomendado para a idade.';
                }
                else{
                    $sResultado = 'Sono Desregulado, ideal entre 7 e 9 horas se sono diárias';
                }
                
                break;
            default:
                if($tempoSono >= 7 && $tempoSono <= 9){
                    $sResultado = 'Sono dentro do recomendado para a idade.';
                }
                else{
                    $sResultado = 'Sono Desregulado, ideal entre 7 e 9 horas se sono diárias';
                }
        }

        return $sResultado;
    }
    
}
