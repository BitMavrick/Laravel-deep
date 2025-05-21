<?php

namespace App\Contracts;

// * CMD: php artisan make:interface Contracts/CurrencyConverterInterface

interface CurrencyConverterInterface
{
    public function convert(string $from, string $to, float $amount): float;
}
