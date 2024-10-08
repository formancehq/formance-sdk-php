<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ConfirmHoldRequest
{
    /**
     * Define the amount to transfer.
     *
     * @var ?int $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $amount = null;

    /**
     * Define a final confirmation. Remaining funds will be returned to the wallet.
     *
     * @var ?bool $final
     */
    #[\JMS\Serializer\Annotation\SerializedName('final')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $final = null;

    /**
     * @param  ?int  $amount
     * @param  ?bool  $final
     */
    public function __construct(?int $amount = null, ?bool $final = null)
    {
        $this->amount = $amount;
        $this->final = $final;
    }
}