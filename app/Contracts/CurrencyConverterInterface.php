<?php

namespace App\Contracts;

interface CurrencyConverterInterface
{
    public function convert(string $from, string $to, float $amount): float;
}