<?php

namespace App\Traits;

trait PasswordResetTrait
{
    public static $TOKEN_CREATED_SUCCESSFULLY = 'TOKEN_CREATED_SUCCESSFULLY';
    public static $TOKEN_CREATION_ERROR = 'TOKEN_CREATION_ERROR';
    public static $EMAIL_DOES_NOT_EXISTS = 'EMAIL_DOES_NOT_EXISTS';
    public static $ACCOUNT_NOT_ACTIVE = 'ACCOUNT_NOT_ACTIVE';
    public static $ACCOUNT_DOES_NOT_EXISTS = 'ACCOUNT_DOES_NOT_EXISTS';
    public static $RECORD_DOES_NOT_EXISTS = 'RECORD_DOES_NOT_EXISTS';
    public static $PASSWORD_UPDATED_SUCCESSFULLY = 'PASSWORD_UPDATED_SUCCESSFULLY';
    public static $PASSWORD_NOT_UPDATED = 'PASSWORD_NOT_UPDATED';

    //add to nuxt js
    public static $TOKEN_EXPIRED = 'TOKEN_EXPIRED';



    public function createToken($email)
    {
        return $email . '|' . time();
    }


    public function generateResetCodeFromToken(String $token): int
    {
        return (int) substr(base_convert(md5($token), 16, 10), -6);
    }
}