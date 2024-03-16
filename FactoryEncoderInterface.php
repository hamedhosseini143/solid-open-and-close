<?php

namespace src\Solid\ocp;

interface FactoryEncoderInterface
{
    public function createEncoder(string $format ): EncoderInterface;
}
