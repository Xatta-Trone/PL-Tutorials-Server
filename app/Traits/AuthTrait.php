<?php

namespace App\Traits;

trait AuthTrait
{
    public static $INVALID_EMAIL_PASSWORD = 'INVALID_EMAIL_PASSWORD';
    public static $ACCOUNT_NOT_ACTIVE = 'ACCOUNT_NOT_ACTIVE';
    public static $AUTH_SUCCESS = 'AUTH_SUCCESS';
    public static $SOMETHING_WENT_WRONG =
    'SOMETHING_WENT_WRONG';
    public static $LOGGED_OUT = 'LOGGED_OUT';
}
