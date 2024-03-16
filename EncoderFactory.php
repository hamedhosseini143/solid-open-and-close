<?php

namespace src\Solid\ocp;

use InvalidArgumentException;

class EncoderFactory implements EncoderFactoryConfigInterface, FactoryEncoderInterface
{
    private array $factory = [];

    public function addEncoder(string $format, callable $factory): void
    {
        $this->factory[$format] = $factory; // output: ['json' => function() { return new JsonEncoder(); }]
    }
    public function createEncoder(string $format): EncoderInterface
    {
        if (!isset($this->factory[$format])) {
            throw new InvalidArgumentException('Format not supported');
        }
        $factory = $this->factory[$format]; // output: function() { return new JsonEncoder(); }
        return $factory();
    }
}
