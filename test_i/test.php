<?php

class products
{
    public function itemCount()
    {
        return 10;
    }
}

class concrete extends products
{
    public function itemCount()
    {
        return 100 * parent::itemCount();
    }
}

$products = new products();

$concrete = new concrete();

assert($products->itemCount() === 10);
assert($concrete->itemCount() === 1000);

