<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class ConfirmHoldRequest
{
    /**
     *
     * @var string $holdId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=hold_id')]
    public string $holdId;

    /**
     *
     * @var ?Shared\ConfirmHoldRequest $confirmHoldRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\ConfirmHoldRequest $confirmHoldRequest = null;

    /**
     * Use an idempotency key
     *
     * @var ?string $idempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=Idempotency-Key')]
    public ?string $idempotencyKey = null;

    /**
     * @param  string  $holdId
     * @param  ?Shared\ConfirmHoldRequest  $confirmHoldRequest
     * @param  ?string  $idempotencyKey
     * @phpstan-pure
     */
    public function __construct(string $holdId, ?Shared\ConfirmHoldRequest $confirmHoldRequest = null, ?string $idempotencyKey = null)
    {
        $this->holdId = $holdId;
        $this->confirmHoldRequest = $confirmHoldRequest;
        $this->idempotencyKey = $idempotencyKey;
    }
}