<?php

namespace App\Http\Services\CasinoService\Factories\Contracts;

interface GameFactoryContract {
    /**
     * Create 
     */
    public static function createGame (): GameContract;
}
