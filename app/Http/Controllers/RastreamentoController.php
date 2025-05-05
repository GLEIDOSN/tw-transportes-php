<?php

namespace App\Http\Controllers;

use App\Models\Frete;
use Illuminate\Http\Request;

class RastreamentoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $codigo_rastreamento = $request->input('codigo_rastreio', '');

        $frete = Frete::where('codigo_rastreio', $codigo_rastreamento)->first();

        if (! $frete) {
            return redirect()->back()->with('error', 'Frete não encontrado');
        }

        return view('frete.rastreamento', [
            'frete' => $frete
        ]);
    }
}
