<?php

namespace Maocae\Support\Patterns;

use Maocae\Support\Patterns\Interfaces\MustCallOnce;
use Maocae\Support\Patterns\Traits\CallOnce;

class Singleton implements MustCallOnce
{
    use CallOnce;

    /**
     * Check if given class or object is implementing singleton
     *
     * @param object|string $class
     * @return bool
     */
    public static function isSingleton(object|string $class): bool
    {
        return is_a($class, MustCallOnce::class, is_string($class));
    }
}