<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


enum OrchestrationConnector: string
{
    case Stripe = 'STRIPE';
    case DummyPay = 'DUMMY-PAY';
    case Wise = 'WISE';
    case Modulr = 'MODULR';
    case CurrencyCloud = 'CURRENCY-CLOUD';
    case BankingCircle = 'BANKING-CIRCLE';
    case Mangopay = 'MANGOPAY';
    case Moneycorp = 'MONEYCORP';
}
