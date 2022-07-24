<?php

namespace App\Http\Services\CasinoService;

use App\Http\Services\CasinoService\Contracts\CasinoServiceContract;
use App\Http\Services\CasinoService\Factories\Games\GameBet;
use App\Http\Services\CasinoService\Factories\Games\GameResponse;

class CasinoService implements CasinoServiceContract {
    /**
     * Play
     */
    public function play (int $type, mixed $betData): GameResponse
    {
        $bet = new GameBet($betData);
        $game = GameHelper::getGameFactory($type)->createGame($bet);

        return $game->play($bet);
    }
}