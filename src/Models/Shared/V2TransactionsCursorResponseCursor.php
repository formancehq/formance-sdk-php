<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2TransactionsCursorResponseCursor
{
    /**
     * $data
     *
     * @var array<V2ExpandedTransaction> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\V2ExpandedTransaction>')]
    public array $data;

    /**
     *
     * @var bool $hasMore
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasMore')]
    public bool $hasMore;

    /**
     *
     * @var ?string $next
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('next')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $next = null;

    /**
     *
     * @var int $pageSize
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pageSize')]
    public int $pageSize;

    /**
     *
     * @var ?string $previous
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('previous')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $previous = null;

    /**
     * @param  array<V2ExpandedTransaction>  $data
     * @param  bool  $hasMore
     * @param  int  $pageSize
     * @param  ?string  $next
     * @param  ?string  $previous
     */
    public function __construct(array $data, bool $hasMore, int $pageSize, ?string $next = null, ?string $previous = null)
    {
        $this->data = $data;
        $this->hasMore = $hasMore;
        $this->pageSize = $pageSize;
        $this->next = $next;
        $this->previous = $previous;
    }
}