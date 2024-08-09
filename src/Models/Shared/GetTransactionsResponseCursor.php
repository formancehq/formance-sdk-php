<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class GetTransactionsResponseCursor
{
    /**
     * $data
     *
     * @var array<\formance\stack\Models\Shared\WalletsTransaction> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\WalletsTransaction>')]
    public array $data;

    #[\JMS\Serializer\Annotation\SerializedName('hasMore')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $hasMore = null;

    #[\JMS\Serializer\Annotation\SerializedName('next')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $next = null;

    #[\JMS\Serializer\Annotation\SerializedName('pageSize')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $pageSize;

    #[\JMS\Serializer\Annotation\SerializedName('previous')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $previous = null;

    public function __construct()
    {
        $this->data = [];
        $this->hasMore = null;
        $this->next = null;
        $this->pageSize = 0;
        $this->previous = null;
    }
}