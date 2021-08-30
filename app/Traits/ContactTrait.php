<?php

namespace App\Traits;

trait ContactTrait
{

    public static $CONTACT_CREATED = 'CONTACT_CREATED';
    public static $CONTACT_CREATION_ERROR = 'CONTACT_CREATION_ERROR';

    public static $CONTACT_NOT_FOUND = 'CONTACT_NOT_FOUND';
    public static $CONTACT_FOUND = 'CONTACT_FOUND';

    public static $CONTACT_NOT_UPDATED = 'CONTACT_NOT_UPDATED';
    public static $CONTACT_UPDATED = 'CONTACT_UPDATED';

    public static $CONTACT_NOT_DELETED = 'CONTACT_NOT_DELETED';
    public static $CONTACT_DELETED = 'CONTACT_DELETED';

    public static $CONTACT_NOT_RESTORED = 'CONTACT_NOT_RESTORED';
    public static $CONTACT_RESTORED = 'CONTACT_RESTORED';

    public static $CONTACT_REPLIED = 'CONTACT_REPLIED';
    public static $CONTACT_NOT_REPLIED = 'CONTACT_NOT_REPLIED';
}
