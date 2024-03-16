<?php

namespace src\Solid\ocp;

use Exception;

class GenericEncoder
{

    private EncoderFactory $encoderFactory;

    public function __construct(EncoderFactory $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    /**
     * @throws Exception
     */
    public function encode($data, string $format): string
    {
        $encoder = $this->encoderFactory->createEncoder($format);
        return $encoder->encode($data);
    }
}
