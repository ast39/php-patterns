<?php

namespace Bridge;

/**
 *
 */
class BridgeB implements BridgeInterface {

    /**
     * @return void
     */
    public function methodA(): void
    {
        dump('Bridge B - method A');
    }

    /**
     * @return void
     */
    public function methodB(): void
    {
        dump('BridgeB - method B');
    }
}