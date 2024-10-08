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
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\DebitWalletRequest|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?DebitWalletRequest $data = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
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