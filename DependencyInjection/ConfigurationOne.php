<?php

namespace DependencyInjection;

class ConfigurationOne implements ConfigurationInterface {

    /**
     * @var
     */
    private $model;

    /**
     * @var
     */
    private $color;

    public function __construct(string $model, string $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getCar(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}