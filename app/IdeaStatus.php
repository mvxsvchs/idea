<?php

namespace App;

enum IdeaStatus: string
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case IN_PROGRESS = 'in_progress';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => "Pending",
            self::COMPLETED => "Completed",
            self::IN_PROGRESS => "In Progress",
        };
    }
}
