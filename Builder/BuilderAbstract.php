<?php

namespace Builder;

/**
 * Абстрауция
 */
abstract class BuilderAbstract {

    public function buildWalls() {}

    public function buildRoof() {}

    abstract public function getResult();
}