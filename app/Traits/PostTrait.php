<?php

namespace App\Traits;

trait PostTrait
{

    public static $POST_CREATED = 'POST_CREATED';
    public static $POST_CREATION_ERROR = 'POST_CREATION_ERROR';

    public static $POST_NOT_FOUND = 'POST_NOT_FOUND';
    public static $POST_FOUND = 'POST_FOUND';

    public static $POST_NOT_UPDATED = 'POST_NOT_UPDATED';
    public static $POST_UPDATED = 'POST_UPDATED';

    public static $POST_NOT_DELETED = 'POST_NOT_DELETED';
    public static $POST_DELETED = 'POST_DELETED';

    public static $POST_NOT_RESTORED = 'POST_NOT_RESTORED';
    public static $POST_RESTORED = 'POST_RESTORED';
}
