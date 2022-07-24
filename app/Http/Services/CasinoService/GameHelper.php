<?php

namespace App\Http\Services\CasinoService;

use App\Http\Services\CasinoService\Factories\Contracts\GameFactoryContract;
use App\Http\Services\CasinoService\Factories\RouletteFactory;
use App\Http\Services\CasinoService\Factories\SpinFactory;

class GameHelper {

    /**
     * The type of the spin
     */
    private static $spinType = 0;

    /**
     * The type of the roulette
     */
    private static $rouletteType = 1;

    /**
     * Play
     */
    public static function getGameFactory (int $type): GameFactoryContract
    {
        return match ($type) {
            self::$spinType => new SpinFactory(),
            self::$rouletteType => new RouletteFactory()
        };
    }
}