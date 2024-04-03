<?php

namespace App\Classes;

class PropertyCards
{
    protected string $owner;
    private string $name;
    private string $groupColor;
    private int $cost;
    private int $rent;
    private int $numberHouses;
    private int $numberHotels;


    public function __construct(string $name, string $groupColor, int $cost, int $rent)
    {
        $this->owner = '';
        $this->name = $name;
        $this->groupColor = $groupColor;
        $this->cost = $cost;
        $this->rent = $rent;
        $this->numberHouses = 0;
        $this->numberHotels = 0;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     */
    public function setOwner(string $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getGroupColor(): string
    {
        return $this->groupColor;
    }

    /**
     * @param string $groupColor
     */
    public function setGroupColor(string $groupColor): void
    {
        $this->groupColor = $groupColor;
    }

    /**
     * @return int
     */
    public function getCost(): int
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     */
    public function setCost(int $cost): void
    {
        $this->cost = $cost;
    }

    /**
     * @return int
     */
    public function getRent(): int
    {
        return $this->rent;
    }

    /**
     * @param int $rent
     */
    public function setRent(int $rent): void
    {
        $this->rent = $rent;
    }

    /**
     * @return int
     */
    public function getNumberHouses(): int
    {
        return $this->numberHouses;
    }

    /**
     * @param int $numberHouses
     */
    public function setNumberHouses(int $numberHouses): void
    {
        $this->numberHouses = $numberHouses;
    }

    /**
     * @return int
     */
    public function getNumberHotels(): int
    {
        return $this->numberHotels;
    }

    /**
     * @param int $numberHotels
     */
    public function setNumberHotels(int $numberHotels): void
    {
        $this->numberHotels = $numberHotels;
    }



    /**
     * Ajoute une maison à la propriété
     */
    public function addHouse(): void
    {
        $this->numberHouses++;
    }

    /**
     * Ajoute un hôtel à la propriété
     */
    public function addHotel(): void
    {
        $this->numberHotels++;
    }

    /**
     * Supprime une maison de la propriété
     */
    public function removeHouse(): void
    {
        if ($this->numberHouses > 0) {
            $this->numberHouses--;
        }
    }

    /**
     * Supprime un hôtel de la propriété
     */
    public function removeHotel(): void
    {
        if ($this->numberHotels > 0) {
            $this->numberHotels--;
        }
    }
}
