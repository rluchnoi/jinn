<?php

namespace App\Http\Services\CasinoService\Factories\Games;

use App\Http\Services\CasinoService\Factories\Contracts\GameContract;

class Roulette implements GameContract {
    /**
     * Spins quantity
     */
    private int $spinQuantity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->spinQuantity = config('services.casino.roulette.quantity');
    }

    /**
     * Play
     */
    public function play (GameBet $bet): GameResponse
    {
        $result = collect([$this->generateRandom()]);
        $userBet = $bet->getBet();

        return new GameResponse($result === $userBet, $result);
    }

    /**
     * generate a random nuber from 0 to $spinQuantity
     */
    private function generateRandom () {
        return rand(0, $this->spinQuantity - 1);
    }
}