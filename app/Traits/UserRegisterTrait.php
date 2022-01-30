<?php

namespace App\Traits;

use App\Models\User\User;

trait UserRegisterTrait
{
    public function checkInExistingDb($studentId, $email)
    {
        // return User::where('email',$email)->orWhere('student')
    }
}
