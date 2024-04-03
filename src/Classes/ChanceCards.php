<?php

namespace App\Classes;

class ChanceCards
{
    protected string $type;
    protected string $message;

    public function __construct(string $type, string $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Génère une carte aléatoire

     */
    public static function generateRandomCard(): ChanceCards
    {
        $chanceMessages = [
            "Avancez jusqu'à la case Départ et recevez 200$.",
            "Allez en prison. Rendez-vous directement en prison, sans passer par la case Départ et sans toucher 200$.",
            "Payez une amende de 50$ pour excès de vitesse.",
            "Vous avez remporté un prix au concours de beauté. Recevez 100$.",
        ];

        $communityChestMessages = [
            "Vous héritez de 100$.",
            "Erreur de la banque en votre faveur. Recevez 200$.",
            "Payez les frais de scolarité. Payez 50$.",
            "Vous avez gagné le deuxième prix dans un concours de mots croisés. Recevez 10$.",

        ];

        $randomType = (rand(0, 1) == 0) ? "Chance" : "Community Chest";

        $randomMessage = ($randomType === "Chance") ? $chanceMessages[array_rand($chanceMessages)] : $communityChestMessages[array_rand($communityChestMessages)];

        return new ChanceCards($randomType, $randomMessage);
    }
}
