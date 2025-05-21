<?php

namespace App\Http\Controllers;

use App\Contracts\CurrencyConverterInterface;

// * CMD: php artisan make:controller CurrencyController

class CurrencyController extends Controller
{
    public function convert(CurrencyConverterInterface $converter)
    {
        $usdToEur = $converter->convert('USD', 'EUR', 100);
        $bdtToUsd = $converter->convert('BDT', 'USD', 1000);

        return [
            '100 USD to EUR' => $usdToEur,
            '1000 BDT to USD' => $bdtToUsd,
        ];
    }
}