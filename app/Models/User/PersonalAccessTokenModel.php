<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalAccessTokenModel extends Model
{
    use HasFactory;

    protected $table = 'personal_access_tokens';
}