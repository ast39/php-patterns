<?php

namespace Builder;

/**
 * Продукт
 */
class Product {

    /**
     * Хранилище элементов продукта
     *
     * @var
     */
    private $storage;

    /**
     * Добавить что-то в продукт
     *
     * @param $item
     * @return void
     */
    public function add($item)
    {
        $this->storage[] = $item;
    }

    /**
     * Составные части готового продукта
     *
     * @return void
     */
    public function getProduct(): void
    {
        foreach ($this->storage as $item) {
            dump($item);
        }
        echo '<hr />';
    }
}