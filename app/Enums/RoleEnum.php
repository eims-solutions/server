<?php

namespace App\Enums;

enum RoleEnum: string
{
    case ADMIN = 'Admin';
    case LEVEL_ONE_OFFICER = 'Level One Officer';
    case LEVEL_TWO_OFFICER = 'Level Two Officer';
    case LEVEL_THREE_OFFICER = 'Level Three Officer';
    case STUDENT = 'Student';
}
