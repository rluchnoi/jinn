<?php

namespace App\Http\Services\CasinoService\Factories;

use App\Http\Services\CasinoService\Factories\Contracts\GameContract;
use App\Http\Services\CasinoService\Factories\Contracts\GameFactoryContract;
use App\Http\Services\CasinoService\Factories\Games\Spin;

class SpinFactory implements GameFactoryContract 
{
    public static function createGame (): GameContract
    {
        return new Spin();
    }
}