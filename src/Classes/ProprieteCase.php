<?php

namespace App\Classes;

class ProprieteCase extends CaseGeneral
{
    protected string $owner;
    protected int $price;
    protected int $rent;
    protected string $groupColor;

    public function __construct(string $name, int $position, int $price, int $rent, string $groupColor, ?string $color = null, ?string $nameIcon = null) {
        parent::__construct($name, $position, $color, $nameIcon);
        $this->price = $price;
        $this->rent = $rent;
        $this->groupColor = $groupColor;
        $this->owner = '';
    }

    public function getOwner(): string {
        return $this->owner;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getRent(): int {
        return $this->rent;
    }

    public function getGroupColor(): string {
        return $this->groupColor;
    }

    // Methods

    public function setOwner(string $owner): void {
        $this->owner = $owner;
    }
}