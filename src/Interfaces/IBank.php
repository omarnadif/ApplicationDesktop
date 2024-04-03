<?php

namespace App\Interfaces;

interface IBank {
    public function cashout(int $amount): bool;
    public function cashin(int $amount): bool;
    public function giveHouse(): bool;
    public function takeHouse(): bool;
    public function giveHotel(): bool;
    public function takeHotel(): bool;
}
