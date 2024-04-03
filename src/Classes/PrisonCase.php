<?php

namespace App\Classes;

class PrisonCase extends CaseGeneral
{
    protected int $duration;

    public function __construct(string $name, int $position, int $duration, ?string $color = null, ?string $nameIcon = null) {
        parent::__construct($name, $position, $color, $nameIcon);
        $this->duration = $duration;
    }


    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }


    public function getDuration(): int {
        return $this->duration;
    }
}