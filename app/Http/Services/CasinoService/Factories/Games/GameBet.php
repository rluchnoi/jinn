<?php

namespace App\Http\Services\CasinoService\Factories\Games;

use Illuminate\Database\Eloquent\Collection;

class GameBet {
    /**
     * Constructor
     */
    public function __construct(
        private mixed $bet, 
    ) {}

    /**
     * Get victory
     */
    public function getBet () {
        return $this->bet;
    }
}