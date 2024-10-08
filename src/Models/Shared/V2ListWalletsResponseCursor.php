<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ListWalletsResponseCursor
{
    /**
     * $data
     *
     * @var array<V2Wallet> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\V2Wallet>')]
    public array $data;

    /**
     *
     * @var ?bool $hasMore
     */
    #[\JMS\Serializer\Annotation\SerializedName('hasMore')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasMore = null;

    /**
     *
     * @var ?string $next
     */
    #[\JMS\Serializer\Annotation\SerializedName('next')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $next = null;

    /**
     *
     * @var int $pageSize
     */
    #[\JMS\Serializer\Annotation\SerializedName('pageSize')]
    public int $pageSize;

    /**
     *
     * @var ?string $previous
     */
    #[\JMS\Serializer\Annotation\SerializedName('previous')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $previous = null;

    /**
     * @param  array<V2Wallet>  $data
     * @param  int  $pageSize
     * @param  ?bool  $hasMore
     * @param  ?string  $next
     * @param  ?string  $previous
     */
    public function __construct(array $data, int $pageSize, ?bool $hasMore = null, ?string $next = null, ?string $previous = null)
    {
        $this->data = $data;
        $this->pageSize = $pageSize;
        $this->hasMore = $hasMore;
        $this->next = $next;
        $this->previous = $previous;
    }
}