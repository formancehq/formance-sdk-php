<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class OrchestrationListWalletsResponseCursor
{
    /**
     * $data
     *
     * @var array<OrchestrationWallet> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\OrchestrationWallet>')]
    public array $data;

    /**
     *
     * @var ?bool $hasMore
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hasMore')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasMore = null;

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
     * @param  array<OrchestrationWallet>  $data
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