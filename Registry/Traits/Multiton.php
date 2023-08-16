<?php

namespace Registry\Traits;

/**
 * Трейт мультитона
 */
trait MultitonTrait {

    /**
     * @var
     */
    private static $storage;

    /**
     * @param string $instance
     * @return mixed|static
     */
    public static function getInstance(string $instance = 'default')
    {
        if (empty(self::$storage[$instance])) {
            self::$storage[$instance] = new static();
        }

        return self::$storage[$instance];
    }

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}

}