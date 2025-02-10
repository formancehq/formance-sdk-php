<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class CreateBalanceRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var ?Shared\CreateBalanceRequest $createBalanceRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\CreateBalanceRequest $createBalanceRequest = null;

    /**
     * Use an idempotency key
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=Idempotency-Key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $id
     * @param  ?Shared\CreateBalanceRequest  $createBalanceRequest
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $id, ?Shared\CreateBalanceRequest $createBalanceRequest = null, ?string $idempotencyKey = null)
    {
        $this->id = $id;
        $this->createBalanceRequest = $createBalanceRequest;
        $this->idempotencyKey = $idempotencyKey;
    }
}