<?php

namespace App\Http\Controllers;

use App\Models\CalculoCombustivel;
use Illuminate\Http\Request;

class CombustivelController extends Controller
{
    
    public function calculaCombustivel(Request $request)
    {
        $valor       = $request->input('valor');
        $distancia   = $request->input('km');
        $consumo     = $request->input('consumo');
        $combustivel = $request->input('combustivel');

        $oModelCombustivel = new CalculoCombustivel();
        $oModelCombustivel->setDistancia($distancia);
        $oModelCombustivel->setConsumo($consumo);
        $oModelCombustivel->setValor($valor);

        return view('resultadoCombustivel', [
            'combustivel' => $combustivel,
            'gastoFinal'  => $oModelCombustivel->calculaGastoCombustivel()
        ]);
    }
    
    public static function getListaCombustivel(): array
    {
        $aCombustivel = [
            'Gasolina',
            'Diesel',
            'Etanol'
        ];

        return $aCombustivel;
    }

}
