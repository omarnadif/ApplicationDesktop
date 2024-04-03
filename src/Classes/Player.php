<?php

namespace App\Classes;

class Player {
    protected string $name;
    protected int $money;
    protected array $properties;


    public function __construct(string $name, int $initialMoney) {
        $this->name = $name;
        $this->money = $initialMoney;
        $this->properties = [];
    }

    public function getName(): string {
        return $this->name;
    }


    public function getMoney(): int {
        return $this->money;
    }


    public function getProperties(): array {
        return $this->properties;
    }

    /**
     * Ajoute de l'argent au joueur
     */
    public function addMoney(int $amount): void {
        $this->money += $amount;
    }

    /**
     * Retire de l'argent au joueur
     */
    public function removeMoney(int $amount): bool {
        if ($this->money >= $amount) {
            $this->money -= $amount;
            return true;
        }
        return false;
    }

    /**
     * Ajoute une propriété au joueur
     */
    public function addProperty(PropertyCards $property): void {
        $this->properties[] = $property;
    }

    /**
     * Retire une propriété du joueur
     */
    public function removeProperty(PropertyCards $property): bool {
        $key = array_search($property, $this->properties);
        if ($key !== false) {
            unset($this->properties[$key]);
            return true;
        }
        return false;
    }
}
