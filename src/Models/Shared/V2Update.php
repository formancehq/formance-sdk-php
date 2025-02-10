<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2Update
{
    /**
     *
     * @var ?V2UpdateAccount $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2UpdateAccount|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?V2UpdateAccount $account = null;

    /**
     * @param  ?V2UpdateAccount  $account
     * @phpstan-pure
     */
    public function __construct(?V2UpdateAccount $account = null)
    {
        $this->account = $account;
    }
}