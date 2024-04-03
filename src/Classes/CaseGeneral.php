<?php

namespace App\Classes;

class CaseGeneral
{
    public string $name;
    public int $position;
    public ?string $color;
    public ?string $nameIcon;


    public function __construct(string $name, int $position, ?string $color = null, ?string $nameIcon = null) {
        $this->name = $name;
        $this->position = $position;
        $this->color = $color;
        $this->nameIcon = $nameIcon;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPosition(): int {
        return $this->position;
    }

    public function getColor(): ?string {
        return $this->color;
    }

    public function getNameIcon(): ?string {
        return $this->nameIcon;
    }
}