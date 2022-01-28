<?php

namespace App\Traits;

trait BanDaysTrait
{

    public static $BAN_DAYS_CREATED = 'BAN_DAYS_CREATED';
    public static $BAN_DAYS_CREATION_ERROR = 'BAN_DAYS_CREATION_ERROR';

    public static $BAN_DAYS_NOT_FOUND = 'BAN_DAYS_NOT_FOUND';
    public static $BAN_DAYS_FOUND = 'BAN_DAYS_FOUND';

    public static $BAN_DAYS_NOT_UPDATED = 'BAN_DAYS_NOT_UPDATED';
    public static $BAN_DAYS_UPDATED = 'BAN_DAYS_UPDATED';

    public static $BAN_DAYS_NOT_DELETED = 'BAN_DAYS_NOT_DELETED';
    public static $BAN_DAYS_DELETED = 'BAN_DAYS_DELETED';

    public static $BAN_DAYS_NOT_RESTORED = 'BAN_DAYS_NOT_RESTORED';
    public static $BAN_DAYS_RESTORED = 'BAN_DAYS_RESTORED';
}
