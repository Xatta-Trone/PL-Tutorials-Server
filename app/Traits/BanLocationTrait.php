<?php

namespace App\Traits;

trait BanLocationTrait
{

    public static $BAN_LOCATION_CREATED = 'BAN_LOCATION_CREATED';
    public static $BAN_LOCATION_CREATION_ERROR = 'BAN_LOCATION_CREATION_ERROR';

    public static $BAN_LOCATION_NOT_FOUND = 'BAN_LOCATION_NOT_FOUND';
    public static $BAN_LOCATION_FOUND = 'BAN_LOCATION_FOUND';

    public static $BAN_LOCATION_NOT_UPDATED = 'BAN_LOCATION_NOT_UPDATED';
    public static $BAN_LOCATION_UPDATED = 'BAN_LOCATION_UPDATED';

    public static $BAN_LOCATION_NOT_DELETED = 'BAN_LOCATION_NOT_DELETED';
    public static $BAN_LOCATION_DELETED = 'BAN_LOCATION_DELETED';

    public static $BAN_LOCATION_NOT_RESTORED = 'BAN_LOCATION_NOT_RESTORED';
    public static $BAN_LOCATION_RESTORED = 'BAN_LOCATION_RESTORED';
}
