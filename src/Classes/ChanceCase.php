<?php

namespace App\Classes;

class ChanceCase extends CaseGeneral
{
    const GOOD_MESSAGE = 'Good';
    const BAD_MESSAGE = 'Bad';

    protected string $message;

    public function __construct(string $name, int $position, ?string $color = null, ?string $nameIcon = null) {
        parent::__construct($name, $position, $color, $nameIcon);
        $this->generateMessage();
    }


    private function generateMessage(): void {
        $randomNumber = rand(0, 1);
        $this->message = ($randomNumber === 0) ? self::GOOD_MESSAGE : self::BAD_MESSAGE;
    }


    public function getMessage(): string {
        return $this->message;
    }
}