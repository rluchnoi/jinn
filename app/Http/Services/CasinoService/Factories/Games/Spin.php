<?php

namespace App\Http\Services\CasinoService\Factories\Games;

use App\Http\Services\CasinoService\Factories\Contracts\GameContract;

class Spin implements GameContract {
    /**
     * Spins quantity
     */
    private int $spinQuantity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->spinQuantity = config('services.casino.spin.quantity');
    }

    /**
     * Play
     */
    public function play (GameBet $bet): GameResponse
    {
        $result = collect([]);

        for ($i = 0; $i < $this->spinQuantity; $i++) {
            $result->push($this->generateRandom());
        }

        $equal = false;

        if ($result->every(fn ($item) => $item === $result->first())) {
            $equal = true;
        }

        return new GameResponse($equal, $result);
    }

    /**
     * generate a random nuber from 0 to $spinQuantity
     */
    private function generateRandom () {
        return rand(0, $this->spinQuantity - 1);
    }
}