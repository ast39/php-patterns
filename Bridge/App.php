<?php

namespace Bridge;

class App extends AppAbstract {

    public function run()
    {
        $this->methodA();
        $this->methodB();
    }
}