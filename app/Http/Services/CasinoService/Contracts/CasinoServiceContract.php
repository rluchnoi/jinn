<?php

namespace App\Http\Services\CasinoService\Contracts;

use App\Http\Services\CasinoService\Factories\Games\GameBet;
use App\Http\Services\CasinoService\Factories\Games\GameResponse;

interface CasinoServiceContract {
    /**
     * play
     */
    public function play (int $type, GameBet $bet): GameResponse;
}
