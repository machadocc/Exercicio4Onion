<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoSono;
use App\Models\CalculoImc;
use Carbon\Carbon;

class ImcController extends Controller
{

    public function calculaImc(Request $request)
    {
        $nome           = $request->input('name');
        $dataNascimento = $request->input('date');
        $peso           = $request->input('peso');
        $altura         = $request->input('altura');
        $tempoSono      = $request->input('sono');
        $retornaSono    = $request->input('calculaSono');
        $sono           = '';

        list($ano, $mes, $dia) = explode('-', $dataNascimento);
        $dataNascimento        = Carbon::create($ano, $mes, $dia);
        $idade                 = (int) $dataNascimento->diffInYears(now());

        $oModelImc = new CalculoImc();
        $oModelImc->setPeso($peso);
        $oModelImc->setAltura($altura);

        $imc = $oModelImc->calculaImc();

        if($retornaSono){
            $oModelSono = new CalculoSono();
            $oModelSono->setTempoSono($tempoSono);
            $oModelSono->setIdade($idade);

            $sono = $oModelSono->calculaSono();
        }

        return view('resultadoImc', [
            'nome'        => $nome,
            'idade'       => $idade,
            'peso'        => $peso, 
            'altura'      => $altura,
            'imc'         => $imc,
            'retornaSono' => $retornaSono,
            'sono'        => $sono
        ]);
    }

}
