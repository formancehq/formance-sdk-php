<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ActivityDebitWallet
{
    /**
     *
     * @var ?DebitWalletRequest $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\DebitWalletRequest|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DebitWalletRequest $data = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * @param  ?DebitWalletRequest  $data
     * @param  ?string  $id
     */
    public function __construct(?DebitWalletRequest $data = null, ?string $id = null)
    {
        $this->data = $data;
        $this->id = $id;
    }
}