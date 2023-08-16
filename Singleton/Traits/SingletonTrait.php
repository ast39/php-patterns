<?php

namespace Singleton\Traits;

/**
 * Трейт одиночки
 */
trait SingletonTrait {

    /**
     * @var
     */
    private static $instance;

    /**
     * @return static
     */
    public static function getInstance(): static
    {
        if (empty(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    private function __construct(){}

    private function __clone(){}

    public function __wakeup() {}
}