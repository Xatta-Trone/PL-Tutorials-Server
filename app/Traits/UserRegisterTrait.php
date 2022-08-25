<?php

namespace App\Traits;

use App\Models\User\User;

trait UserRegisterTrait
{
    public function checkInExistingDb($studentId, $email)
    {
        // return User::where('email',$email)->orWhere('student')
    }

    public function formatMeritPosition(string $merit): int
    {
        if (is_numeric($merit[0])) {
            return intval($merit);
        } else {
            return intval(substr($merit, 1));
        }
    }
}