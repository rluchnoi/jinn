<?php

namespace App\Http\Services\CasinoService\Factories\Games;

use Illuminate\Support\Collection;

class GameResponse {
    /**
     * Constructor
     */
    public function __construct(
        private bool $victory, 
        private Collection $result, 
    ) {}

    /**
     * Get victory
     */
    public function getVictory () {
        return $this->victory;
    }

    /**
     * Get result
     */
    public function getResult () {
        return $this->result;
    }
}