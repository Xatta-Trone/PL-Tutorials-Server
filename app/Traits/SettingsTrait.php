<?php

namespace App\Traits;

trait SettingsTrait
{

    public static $SETTINGS_CREATED = 'SETTINGS_CREATED';
    public static $SETTINGS_CREATION_ERROR = 'SETTINGS_CREATION_ERROR';

    public static $SETTINGS_NOT_FOUND = 'SETTINGS_NOT_FOUND';
    public static $SETTINGS_FOUND = 'SETTINGS_FOUND';

    public static $SETTINGS_NOT_UPDATED = 'SETTINGS_NOT_UPDATED';
    public static $SETTINGS_UPDATED = 'SETTINGS_UPDATED';

    public static $SETTINGS_NOT_DELETED = 'SETTINGS_NOT_DELETED';
    public static $SETTINGS_DELETED = 'SETTINGS_DELETED';

    public static $SETTINGS_NOT_RESTORED = 'SETTINGS_NOT_RESTORED';
    public static $SETTINGS_RESTORED = 'SETTINGS_RESTORED';
}
