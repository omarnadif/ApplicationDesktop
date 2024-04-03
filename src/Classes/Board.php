<?php

namespace App\Classes;

use App\Interfaces\IPropertyCards;

class Board
{
    private array $properties;

    public function __construct()
    {
        $this->properties = [];
        $this->initializeProperties();
    }

    private function initializeProperties(): void
    {
        $properties = [
            //  Marron
            ['name' => 'Boulevard de Belleville', 'groupColor' => 'Marron', 'cost' => 60, 'rent' => 2],
            ['name' => 'Rue Lecourbe', 'groupColor' => 'Marron', 'cost' => 60, 'rent' => 4],
            // Chance
            ['name' => 'Chance', 'groupColor' => 'Chance', 'cost' => 0, 'rent' => 0],
            //Bleu ciel
            ['name' => 'Rue de Vaugirard', 'groupColor' => 'Bleu ciel', 'cost' => 100, 'rent' => 6],
            ['name' => 'Rue de Courcelles', 'groupColor' => 'Bleu ciel', 'cost' => 100, 'rent' => 6],
            ['name' => 'Avenue de la République', 'groupColor' => 'Bleu ciel', 'cost' => 120, 'rent' => 8],
            // Taxe
            ['name' => 'Taxe de Luxe', 'groupColor' => 'Taxe', 'cost' => 75, 'rent' => 0],
            // Violet
            ['name' => 'Boulevard de la Villette', 'groupColor' => 'Violet', 'cost' => 140, 'rent' => 10],
            ['name' => 'Avenue de Neuilly', 'groupColor' => 'Violet', 'cost' => 140, 'rent' => 10],
            ['name' => 'Rue de Paradis', 'groupColor' => 'Violet', 'cost' => 160, 'rent' => 12],
            // Gare
            ['name' => 'Gare Montparnasse', 'groupColor' => 'Gare', 'cost' => 200, 'rent' => 25],
            //  Orange
            ['name' => 'Avenue Mozart', 'groupColor' => 'Orange', 'cost' => 180, 'rent' => 14],
            ['name' => 'Boulevard Saint-Michel', 'groupColor' => 'Orange', 'cost' => 180, 'rent' => 14],
            ['name' => 'Place Pigalle', 'groupColor' => 'Orange', 'cost' => 200, 'rent' => 16],
            // Caisse de Communauté
            ['name' => 'Caisse de Communauté', 'groupColor' => 'Caisse de Communauté', 'cost' => 0, 'rent' => 0],
            //  Rouge
            ['name' => 'Avenue Matignon', 'groupColor' => 'Rouge', 'cost' => 220, 'rent' => 18],
            ['name' => 'Boulevard Malesherbes', 'groupColor' => 'Rouge', 'cost' => 220, 'rent' => 18],
            ['name' => 'Avenue Henri-Martin', 'groupColor' => 'Rouge', 'cost' => 240, 'rent' => 20],
            // Chance
            ['name' => 'Chance', 'groupColor' => 'Chance', 'cost' => 0, 'rent' => 0],
            //  Jaune
            ['name' => 'Faubourg Saint-Honoré', 'groupColor' => 'Jaune', 'cost' => 260, 'rent' => 22],
            ['name' => 'Place de la Bourse', 'groupColor' => 'Jaune', 'cost' => 260, 'rent' => 22],
            ['name' => 'Rue La Fayette', 'groupColor' => 'Jaune', 'cost' => 280, 'rent' => 24],
            //  Vert
            ['name' => 'Avenue de Breteuil', 'groupColor' => 'Vert', 'cost' => 300, 'rent' => 26],
            ['name' => 'Avenue Foch', 'groupColor' => 'Vert', 'cost' => 300, 'rent' => 26],
            ['name' => 'Boulevard des Capucines', 'groupColor' => 'Vert', 'cost' => 320, 'rent' => 28],
            // Gare
            ['name' => 'Gare du Lyon', 'groupColor' => 'Gare', 'cost' => 200, 'rent' => 25],
            //  Bleu
            ['name' => 'Avenue des Champs-Élysées', 'groupColor' => 'Bleu', 'cost' => 350, 'rent' => 35],
            ['name' => 'Rue de la Paix', 'groupColor' => 'Bleu', 'cost' => 400, 'rent' => 50],
        ];

        foreach ($properties as $property) {
            $this->addProperty(new PropertyCards($property['name'], $property['groupColor'], $property['cost'], $property['rent']));
        }
    }

    private function addProperty(IPropertyCards $property): void
    {
        $this->properties[] = $property;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }


    public function generateBoard(): array
    {
        $board = [];
        foreach ($this->properties as $property) {
            $board[] = [
                'name' => $property->getName(),
                'groupColor' => $property->getGroupColor(),
                'cost' => $property->getCost(),
                'rent' => $property->getRent(),
            ];
        }
        return $board;
    }
}
