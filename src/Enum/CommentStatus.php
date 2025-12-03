<?php

namespace App\Enum;

enum CommentStatus: string
{
    case Pending = 'pending';
    case Published = 'published';
    case Moderated = 'moderated';
    
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
            self::Pending => 'En attente',
            self::Published => 'Publié',
            self::Moderated => 'Moderé',
        };
    }
}