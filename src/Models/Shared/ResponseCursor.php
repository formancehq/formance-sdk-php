<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ResponseCursor
{
    /**
     * $data
     *
     * @var ?array<array<string, mixed>> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<array<string, mixed>>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $data = null;

    /**
     *
     * @var ?bool $hasMore
     */
    #[\JMS\Serializer\Annotation\SerializedName('hasMore')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $hasMore = null;

    /**
     *
     * @var ?string $next
     */
    #[\JMS\Serializer\Annotation\SerializedName('next')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $next = null;

    /**
     *
     * @var ?int $pageSize
     */
    #[\JMS\Serializer\Annotation\SerializedName('pageSize')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $pageSize = null;

    /**
     *
     * @var ?string $previous
     */
    #[\JMS\Serializer\Annotation\SerializedName('previous')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $previous = null;

    /**
     *
     * @var ?Total $total
     */
    #[\JMS\Serializer\Annotation\SerializedName('total')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Total|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Total $total = null;

    /**
     * @param  ?array<array<string, mixed>>  $data
     * @param  ?bool  $hasMore
     * @param  ?string  $next
     * @param  ?int  $pageSize
     * @param  ?string  $previous
     * @param  ?Total  $total
     */
    public function __construct(?array $data = null, ?bool $hasMore = null, ?string $next = null, ?int $pageSize = null, ?string $previous = null, ?Total $total = null)
    {
        $this->data = $data;
        $this->hasMore = $hasMore;
        $this->next = $next;
        $this->pageSize = $pageSize;
        $this->previous = $previous;
        $this->total = $total;
    }
}