<?php

namespace Multiton\Traits;

/**
 * Трейт
 */
trait MultitonTrait {

    /**
     * @var array
     */
    private static $storage = [];

    /**
     * @param string|null $instance
     * @return mixed|static
     */
    public static function getInstance(?string $instance = null): mixed
    {
        if (empty(self::$storage[$instance])) {
            self::$storage[$instance] = new static();
        }

        return self::$storage[$instance];
    }

    private function __construct() {}

    private function __clone() {}

    public function __wakeup() {}
}