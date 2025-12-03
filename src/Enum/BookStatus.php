<?php

namespace App\Enum;

enum BookStatus: string
{
    case Available = 'available';
    case Borrowed = 'borrowed';
    case Unavailable = 'unavailable';
    
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Return the label of the book status
     *
     * @return string
     */
/*******  1bd7ad1b-1fef-4c8c-beb7-efe3b84aa7a3  *******/
    public function getLabel(): string
    {
        return match ($this) {
            self::Available => 'Disponible',
            self::Borrowed => 'Emprunté',
            self::Unavailable => 'Indisponible',
        };
    }
}