<?php

namespace App\Services;

use App\Contracts\CurrencyConverterInterface;

// * CMD: php artisan make:class Services/BasicCurrencyConverter

class BasicCurrencyConverter implements CurrencyConverterInterface
{
    protected array $rates = [
        'USD_EUR' => 0.91,
        'EUR_USD' => 1.1,
        'USD_BDT' => 109.5,
        'BDT_USD' => 0.0091,
    ];

    public function convert(string $from, string $to, float $amount): float
    {
        $key = "{$from}_{$to}";

        if (!isset($this->rates[$key])) {
            throw new \Exception("Conversion rate not defined for {$key}");
        }

        return round($amount * $this->rates[$key], 2);
    }
}