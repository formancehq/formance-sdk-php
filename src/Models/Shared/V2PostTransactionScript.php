<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2PostTransactionScript
{
    #[\JMS\Serializer\Annotation\SerializedName('plain')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $plain;

    /**
     * $vars
     *
     * @var ?array<string, mixed> $vars
     */
    #[\JMS\Serializer\Annotation\SerializedName('vars')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $vars = null;

    public function __construct()
    {
        $this->plain = '';
        $this->vars = null;
    }
}