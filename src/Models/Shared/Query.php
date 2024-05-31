<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Query
{
    /**
     * $after
     *
     * @var ?array<string> $after
     */
    #[\JMS\Serializer\Annotation\SerializedName('after')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $after = null;

    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cursor = null;

    /**
     * $ledgers
     *
     * @var ?array<string> $ledgers
     */
    #[\JMS\Serializer\Annotation\SerializedName('ledgers')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $ledgers = null;

    #[\JMS\Serializer\Annotation\SerializedName('pageSize')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $pageSize = null;

    #[\JMS\Serializer\Annotation\SerializedName('policy')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $policy = null;

    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\QueryRaw')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?QueryRaw $raw = null;

    #[\JMS\Serializer\Annotation\SerializedName('sort')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sort = null;

    #[\JMS\Serializer\Annotation\SerializedName('target')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $target = null;

    /**
     * $terms
     *
     * @var ?array<string> $terms
     */
    #[\JMS\Serializer\Annotation\SerializedName('terms')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $terms = null;

    public function __construct()
    {
        $this->after = null;
        $this->cursor = null;
        $this->ledgers = null;
        $this->pageSize = null;
        $this->policy = null;
        $this->raw = null;
        $this->sort = null;
        $this->target = null;
        $this->terms = null;
    }
}