<?php

namespace App\Collections;

use IteratorAggregate;
use Traversable;

class SosCollection implements IteratorAggregate
{
    private array $data;
    public function __construct(array $data) {
        $this->data = $data;
    }
    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->data);
    }
}