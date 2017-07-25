<?php
use App\User;
/**
 * Created by PhpStorm.
 * User: PENGPN
 * Date: 2017/7/25
 * Time: 16:20
 */
if (!function_exists('isAdmin')) {
    function isAdmin($user)
    {
        return $user != null && $user instanceof User && $user->id === 1;
    }
}