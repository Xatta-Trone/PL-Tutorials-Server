<?php

namespace App\Traits;

trait BookTrait
{

    public static $BOOK_CREATED = 'BOOK_CREATED';
    public static $BOOK_CREATION_ERROR = 'BOOK_CREATION_ERROR';

    public static $BOOK_NOT_FOUND = 'BOOK_NOT_FOUND';
    public static $BOOK_FOUND = 'BOOK_FOUND';

    public static $BOOK_NOT_UPDATED = 'BOOK_NOT_UPDATED';
    public static $BOOK_UPDATED = 'BOOK_UPDATED';

    public static $BOOK_NOT_DELETED = 'BOOK_NOT_DELETED';
    public static $BOOK_DELETED = 'BOOK_DELETED';

    public static $BOOK_NOT_RESTORED = 'BOOK_NOT_RESTORED';
    public static $BOOK_RESTORED = 'BOOK_RESTORED';
}
