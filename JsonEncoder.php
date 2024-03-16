<?php

namespace src\Solid\ocp;

class JsonEncoder  implements EncoderInterface
{

    public function __construct()
    {
    }
    public function encode($data):string
    {
        return json_encode($data);
    }
}
