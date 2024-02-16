<?php

namespace Maocae\Support\Patterns;

use Maocae\Support\Patterns\Interfaces\MustCallOnce;
use Maocae\Support\Patterns\Traits\CallOnce;

class Singleton implements MustCallOnce
{
    use CallOnce;
}