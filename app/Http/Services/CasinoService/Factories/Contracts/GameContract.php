<?php

namespace App\Http\Services\CasinoService\Factories\Contracts;

use App\Http\Services\CasinoService\Factories\Games\GameBet;
use App\Http\Services\CasinoService\Factories\Games\GameResponse;

interface GameContract {
    /**
     * Create 
     */
    public function play (GameBet $bet): GameResponse;
}
