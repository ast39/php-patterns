<?php

namespace Builder;

/**
 * Строитель В
 */
class BuilderB extends BuilderAbstract {

    /**
     * @var Product
     */
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    /**
     * Построить стены
     *
     * @return void
     */
    public function buildWalls(): void
    {
        $this->product->add('Builder B - Walls');
    }

    /**
     * Построить крышу
     *
     * @return void
     */
    public function buildRoof(): void
    {
        $this->product->add('Builder B - Roof');
    }

    /**
     * @return Product
     */
    public function getResult(): Product
    {
        return $this->product;
    }
}