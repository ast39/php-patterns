<?php

namespace Builder;

/**
 * Управление строительством
 */
class Director {

    /**
     * @param $builder
     * @return void
     */
    public function build($builder): void
    {
        $builder->buildWalls();
        $builder->buildRoof();
    }
}