<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class AddAccountToPoolRequest
{
    /**
     *
     * @var Shared\AddAccountToPoolRequest $addAccountToPoolRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\AddAccountToPoolRequest $addAccountToPoolRequest;

    /**
     * The pool ID.
     *
     * @var string $poolId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=poolId')]
    public string $poolId;

    /**
     * @param  Shared\AddAccountToPoolRequest  $addAccountToPoolRequest
     * @param  string  $poolId
     * @phpstan-pure
     */
    public function __construct(Shared\AddAccountToPoolRequest $addAccountToPoolRequest, string $poolId)
    {
        $this->addAccountToPoolRequest = $addAccountToPoolRequest;
        $this->poolId = $poolId;
    }
}