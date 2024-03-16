<?php

namespace src\Solid\ocp;

interface EncoderInterface
{
    public function encode($data): string;
}
