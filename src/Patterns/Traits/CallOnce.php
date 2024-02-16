<?php

namespace Maocae\Support\Patterns\Traits;

trait CallOnce
{
    /**
     * Store instantiated object, so it can be used again later
     *
     * @var array<static> $instances
     */
    private static array $instances = [];

    /**
     * Isolate the constructor so the class can't instantiate manually
     *
     * @param mixed ...$args
     */
    protected static function __construct(...$args)
    {

    }

    /**
     * Returns instance, if instance does not exist then creates new one and returns it
     *
     * @param mixed ...$args
     * @return static
     */
    public static function getInstance(...$args): static
    {
        $class = static::class;

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static(...$args);
        }

        return self::$instances[$class];
    }
}