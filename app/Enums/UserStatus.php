<?php

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE =  'active';
    case DISABLED =  'disabled';
    case SUSPENDED =  'suspended';
    case BLOCKED =  'blocked';
    case DELETED =  'deleted';


    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'name');
    }
}
