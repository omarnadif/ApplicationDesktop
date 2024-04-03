<?php

namespace App\Classes;

class ServicesPublics extends CaseGeneral
{
    protected string $owner;
    protected int $rent;

    public function __construct(string $name, int $position, string $owner = '', int $rent = 0, ?string $color = null, ?string $nameIcon = null) {
        parent::__construct($name, $position, $color, $nameIcon);
        $this->owner = $owner;
        $this->rent = $rent;
    }

    // Getter and setter methods for owner and rent
    public function getOwner(): string {
        return $this->owner;
    }

    public function setOwner(string $owner): void {
        $this->owner = $owner;
    }

    public function getRent(): int {
        return $this->rent;
    }

    public function setRent(int $rent): void {
        $this->rent = $rent;
    }
}