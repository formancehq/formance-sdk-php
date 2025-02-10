<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2WalletSubject
{
    /**
     *
     * @var string $identifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('identifier')]
    public string $identifier;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var ?string $balance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $balance = null;

    /**
     * @param  string  $identifier
     * @param  string  $type
     * @param  ?string  $balance
     * @phpstan-pure
     */
    public function __construct(string $identifier, string $type, ?string $balance = null)
    {
        $this->identifier = $identifier;
        $this->type = $type;
        $this->balance = $balance;
    }
}