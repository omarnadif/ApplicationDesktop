<?php

namespace App\Interfaces;

use App\Classes\PropertyCards;

interface IPlayer {
    public function addMoney(int $amount): void;
    public function removeMoney(int $amount): bool;
    public function addProperty(PropertyCards $property): void;
    public function removeProperty(PropertyCards $property): bool;
}
