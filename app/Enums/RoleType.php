<?php

namespace App\Enums;

enum RoleType: string
{
    case Admin = 'Admin';
    case User = 'User';

    public function resolveColor(): string
    {
        return match ($this) {
            self::Admin => 'primary',
            self::User => 'secondary',
        };
    }
}
