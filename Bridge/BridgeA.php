<?php

namespace Bridge;

/**
 *
 */
class BridgeA implements BridgeInterface {

    /**
     * @return void
     */
    public function methodA(): void
    {
        dump('Bridge A - method A');
    }

    /**
     * @return void
     */
    public function methodB(): void
    {
        dump('Bridge A - method B');
    }
}