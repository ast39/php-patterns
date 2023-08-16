<?php

namespace Registry;

use Registry\Traits\MultitonTrait;

/**
 * Pattern "Registry" (Structural)
 */
class Registry {

    use MultitonTrait;

    /**
     * @var array
     */
    private $registry = [];

    /**
     * @param string $key
     * @param $val
     * @return void
     */
    public function set(string $key, $val): void
    {
        $this->registry[$key] = $val;
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed|string
     */
    public function get(string $key, mixed $default = null)
    {
        if (isset($this->registry[$key])) {
            return $this->registry[$key];
        } else {
            return $default;
        }
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->registry;
    }

    /**
     * @param string $key
     * @return void
     */
    public function unset(string $key): void
    {
        if (isset($this->registry[$key])) {
            unset($this->registry[$key]);
        }
    }
}