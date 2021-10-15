<?php

namespace App\Traits;

trait RoleTrait
{

    public static $ROLE_CREATED = 'ROLE_CREATED';
    public static $ROLE_CREATION_ERROR = 'ROLE_CREATION_ERROR';

    public static $ROLE_NOT_FOUND = 'ROLE_NOT_FOUND';
    public static $ROLE_FOUND = 'ROLE_FOUND';

    public static $ROLE_NOT_UPDATED = 'ROLE_NOT_UPDATED';
    public static $ROLE_UPDATED = 'ROLE_UPDATED';

    public static $ROLE_NOT_DELETED = 'ROLE_NOT_DELETED';
    public static $ROLE_DELETED = 'ROLE_DELETED';

    public static $ROLE_NOT_RESTORED = 'ROLE_NOT_RESTORED';
    public static $ROLE_RESTORED = 'ROLE_RESTORED';
}
