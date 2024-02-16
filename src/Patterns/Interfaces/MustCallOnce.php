<?php

namespace Maocae\Support\Patterns\Interfaces;

interface MustCallOnce
{
    /**
     * Returns instance, if instance does not exist then creates new one and returns it
     *
     * @param mixed ...$args
     * @return static
     */
    public static function getInstance(...$args): static;
}