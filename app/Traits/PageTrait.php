<?php

namespace App\Traits;

trait PageTrait
{

    public static $PAGE_CREATED = 'PAGE_CREATED';
    public static $PAGE_CREATION_ERROR = 'PAGE_CREATION_ERROR';

    public static $PAGE_NOT_FOUND = 'PAGE_NOT_FOUND';
    public static $PAGE_FOUND = 'PAGE_FOUND';

    public static $PAGE_NOT_UPDATED = 'PAGE_NOT_UPDATED';
    public static $PAGE_UPDATED = 'PAGE_UPDATED';

    public static $PAGE_NOT_DELETED = 'PAGE_NOT_DELETED';
    public static $PAGE_DELETED = 'PAGE_DELETED';

    public static $PAGE_NOT_RESTORED = 'PAGE_NOT_RESTORED';
    public static $PAGE_RESTORED = 'PAGE_RESTORED';
}
