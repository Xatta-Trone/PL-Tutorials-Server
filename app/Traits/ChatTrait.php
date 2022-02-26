<?php

namespace App\Traits;

trait ChatTrait
{

    public static $CHAT_CREATED = 'CHAT_CREATED';
    public static $MESSAGE_SENT = 'MESSAGE_SENT';
    public static $CHAT_CREATION_ERROR = 'CHAT_CREATION_ERROR';

    public static $CHAT_NOT_FOUND = 'CHAT_NOT_FOUND';
    public static $CHAT_FOUND = 'CHAT_FOUND';

    public static $CHAT_NOT_UPDATED = 'CHAT_NOT_UPDATED';
    public static $CHAT_UPDATED = 'CHAT_UPDATED';

    public static $CHAT_NOT_DELETED = 'CHAT_NOT_DELETED';
    public static $CHAT_DELETED = 'CHAT_DELETED';

    public static $CHAT_NOT_RESTORED = 'CHAT_NOT_RESTORED';
    public static $CHAT_RESTORED = 'CHAT_RESTORED';
}