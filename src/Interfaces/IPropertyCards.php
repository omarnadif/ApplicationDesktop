<?php

namespace App\Interfaces;

interface IPropertyCards {
    public function addHouse(): void;
    public function addHotel(): void;
    public function removeHouse(): void;
    public function removeHotel(): void;
    public function canBuildHotel(): bool;
}
