<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Enums\FreteStatus;
use App\Http\Requests\StoreFreteRequest;
use App\Models\Frete;

class FreteController extends Controller
{
    public function store(StoreFreteRequest $request)
    {
        $dados = $request->all();
        $dados['codigo_rastreio'] = Helpers::geraCodigoRastreioUnico();
        $dados['status'] = FreteStatus::EM_TRANSITO;

        $frete = Frete::Create($dados);

        return $frete;
    }
}
