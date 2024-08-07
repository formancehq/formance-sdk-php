<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class CreateWalletRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\formance\stack\Models\Shared\CreateWalletRequest $createWalletRequest = null;

    /**
     * Use an idempotency key
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=Idempotency-Key')]
    public ?string $idempotencyKey = null;

    public function __construct()
    {
        $this->createWalletRequest = null;
        $this->idempotencyKey = null;
    }
}