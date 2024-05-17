<?php

namespace App\Enums;

enum PermissionEnum: string
{
        // case USERS_READ = 'users.read';
        // case USERS_CREATE = 'users.create';
        // case USERS_UPDATE = 'users.update';
        // case USERS_DELETE = 'users.delete';
        // case USERS_RESEND_VERIFICATION_EMAIL = 'users.resend-verification-email';
        // case USERS_RESET_PASSWORD = 'users.reset-password';
        // case USERS_LIST_PERMISSIONS = 'users.list-permissions';

        // case ROLES_READ = 'roles.read';
        // case ROLES_CREATE = 'roles.create';
        // case ROLES_UPDATE = 'roles.update';
        // case ROLES_DELETE = 'roles.delete';

        // case GRADE_LEVELS_CREATE = 'grade-levels.create';
        // case GRADE_LEVELS_READ = 'grade-levels.read';
        //users permissions
    case CAN_CREATE_USERS = 'can-create-users';
    case CAN_READ_USERS = 'can-read-users';
    case CAN_UPDATE_USERS = 'can-update-users';
    case CAN_DELETE_USERS = 'can-delete-users';
    case CAN_RESET_PASSWORDS = 'can-reset-passwords';
        //roles permissions
    case CAN_CREATE_ROLES = 'can-create-roles';
    case CAN_READ_ROLES = 'can-read-roles';
    case CAN_UPDATE_ROLES = 'can-update-roles';
    case CAN_DELETE_ROLES = 'can-delete-roles';
        //grade levels permissions
    case CAN_CREATE_GRADE_LEVELS = 'can-create-grade-levels';
    case CAN_READ_GRADE_LEVELS = 'can-read-grade-levels';
    case CAN_UPDATE_GRADE_LEVELS = 'can-update-grade-levels';
    case CAN_DELETE_GRADE_LEVELS = 'can-delete-grade-levels';
        //sections permissions
    case CAN_CREATE_SECTIONS = 'can-create-sections';
    case CAN_READ_SECTIONS = 'can-read-sections';
    case CAN_UPDATE_SECTIONS = 'can-update-sections';
    case CAN_DELETE_SECTIONS = 'can-delete-sections';
        //students permissions
    case CAN_CREATE_STUDENTS = 'can-create-students';
    case CAN_READ_STUDENTS = 'can-read-students';
    case CAN_UPDATE_STUDENTS = 'can-update-students';
    case CAN_DELETE_STUDENTS = 'can-delete-students';
        //divisions permissions
    case CAN_CREATE_DIVISIONS = 'can-create-divisions';
    case CAN_READ_DIVISIONS = 'can-read-divisions';
    case CAN_UPDATE_DIVISIONS = 'can-update-divisions';
    case CAN_DELETE_DIVISIONS = 'can-delete-divisions';
        //teams permissions
    case CAN_CREATE_TEAMS = 'can-create-teams';
    case CAN_READ_TEAMS = 'can-read-teams';
    case CAN_UPDATE_TEAMS = 'can-update-teams';
    case CAN_DELETE_TEAMS = 'can-delete-teams';
        //events permissions
    case CAN_CREATE_EVENTS = 'can-create-events';
    case CAN_READ_EVENTS = 'can-read-events';
    case CAN_UPDATE_EVENTS = 'can-update-events';
    case CAN_DELETE_EVENTS = 'can-delete-events';
        //categories permissions
    case CAN_CREATE_CATEGORIES = 'can-create-categories';
    case CAN_READ_CATEGORIES = 'can-read-categories';
    case CAN_UPDATE_CATEGORIES = 'can-update-categories';
    case CAN_DELETE_CATEGORIES = 'can-delete-categories';
        //locations permissions
    case CAN_CREATE_LOCATIONS = 'can-create-locations';
    case CAN_READ_LOCATIONS = 'can-read-locations';
    case CAN_UPDATE_LOCATIONS = 'can-update-locations';
    case CAN_DELETE_LOCATIONS = 'can-delete-locations';
        //facilitators permissions
    case CAN_CREATE_FACILITATORS = 'can-create-facilitators';
    case CAN_READ_FACILITATORS = 'can-read-facilitators';
    case CAN_UPDATE_FACILITATORS = 'can-update-facilitators';
    case CAN_DELETE_FACILITATORS = 'can-delete-facilitators';
        //points permissions
    case CAN_CREATE_POINTS = 'can-create-points';
    case CAN_READ_POINTS = 'can-read-points';
    case CAN_UPDATE_POINTS = 'can-update-pints';
    case CAN_DELETE_POINTS = 'can-delete-points';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function getAdminRolePermissions(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function getManagerRolePermissions(): array
    {
        return [
            self::CAN_CREATE_USERS->value,
            self::CAN_READ_USERS->value,
            self::CAN_UPDATE_USERS->value,
            self::CAN_DELETE_USERS->value,
            self::CAN_RESET_PASSWORDS->value,
            self::CAN_CREATE_ROLES->value,
            self::CAN_READ_ROLES->value,
            self::CAN_UPDATE_ROLES->value,
            self::CAN_DELETE_ROLES->value,
            self::CAN_CREATE_GRADE_LEVELS->value,
            self::CAN_READ_GRADE_LEVELS->value,
            self::CAN_UPDATE_GRADE_LEVELS->value,
            self::CAN_DELETE_GRADE_LEVELS->value,
        ];
    }
}
