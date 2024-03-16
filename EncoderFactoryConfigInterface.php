<?php

namespace src\Solid\ocp;

interface EncoderFactoryConfigInterface
{
    public function addEncoder(string $format, callable  $factory): void;
}
