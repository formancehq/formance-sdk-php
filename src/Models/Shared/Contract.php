<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Contract
{
    /**
     *
     * @var Expr $expr
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expr')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\Expr')]
    public Expr $expr;

    /**
     *
     * @var ?string $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $account = null;

    /**
     * @param  Expr  $expr
     * @param  ?string  $account
     * @phpstan-pure
     */
    public function __construct(Expr $expr, ?string $account = null)
    {
        $this->expr = $expr;
        $this->account = $account;
    }
}