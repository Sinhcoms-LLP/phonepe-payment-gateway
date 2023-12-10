<?php

namespace sinhcoms\PhonePePaymentGateway;

use Exception;

class PhonePeException extends exception
{
    public function errorMessage(): string
    {
        return "Error on line {$this->getLine()} in {$this->getFile()}. {$this->getMessage()}.";
    }
}