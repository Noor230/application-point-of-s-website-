<?php

namespace Core\Helpers;

use Core\Model\User;

class Helper
{
    public static function redirect(string $url): void
    {
        header("Location: $url");
    }
// here check & return true or false because view 
    public static function check_permission(array $permissions_set): bool
    {
        $display = true;

        if (!isset($_SESSION['user'])) {
            return false;
        }

        $user = new User;
        $assigned_permissions = $user->get_permissions();
        foreach ($permissions_set as $permission) {
            if (!in_array($permission, $assigned_permissions)) {
                return false;
            }
        }
        return $display;
    }
}
