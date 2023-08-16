<?php

namespace DependencyInjection;

class Connection {

    /**
     * @var ConfigurationInterface
     */
    private $configuration;

    /**
     * @param ConfigurationInterface $config
     */
    public function __construct(ConfigurationInterface $config)
    {
        $this->configuration = $config;
    }

    /**
     * Запуск
     *
     * @return array
     */
    public function run()
    {
        return [

            $this->configuration->getCar(),
            $this->configuration->getColor()
        ];
    }
}