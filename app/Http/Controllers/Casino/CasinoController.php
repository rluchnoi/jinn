<?php

namespace App\Http\Controllers\Casino;

use App\Http\Controllers\Controller;
use App\Http\Services\CasinoService\Contracts\CasinoServiceContract;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CasinoController extends Controller
{
    public function play (
        Request $request,
        CasinoServiceContract $casinoService
    ): Response
    {
        $type = $request->get('type');
        $betData = $request->get('bet');
        $result = $casinoService->play($type, $betData);

        return response([
            'result' => $result->getResult(),
            'victory' => $result->getVictory()
        ]);
    }
}
