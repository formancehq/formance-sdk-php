<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TransactionResponse
{
    /**
     *
     * @var Transaction $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\Transaction')]
    public Transaction $data;

    /**
     * @param  Transaction  $data
     * @phpstan-pure
     */
    public function __construct(Transaction $data)
    {
        $this->data = $data;
    }
}