<?php

namespace App\Traits;



trait CourseTrait
{

    public static $COURSE_CREATED = 'COURSE_CREATED';
    public static $COURSE_CREATION_ERROR = 'COURSE_CREATION_ERROR';

    public static $COURSE_NOT_FOUND = 'COURSE_NOT_FOUND';
    public static $COURSE_FOUND = 'COURSE_FOUND';

    public static $COURSE_NOT_UPDATED = 'COURSE_NOT_UPDATED';
    public static $COURSE_UPDATED = 'COURSE_UPDATED';

    public static $COURSE_NOT_DELETED = 'COURSE_NOT_DELETED';
    public static $COURSE_DELETED = 'COURSE_DELETED';

    public static $COURSE_NOT_RESTORED = 'COURSE_NOT_RESTORED';
    public static $COURSE_RESTORED = 'COURSE_RESTORED';
}
