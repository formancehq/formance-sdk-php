<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2PostTransactionScript
{
    /**
     *
     * @var string $plain
     */
    #[\JMS\Serializer\Annotation\SerializedName('plain')]
    public string $plain;

    /**
     * $vars
     *
     * @var ?array<string, mixed> $vars
     */
    #[\JMS\Serializer\Annotation\SerializedName('vars')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $vars = null;

    /**
     * @param  string  $plain
     * @param  ?array<string, mixed>  $vars
     */
    public function __construct(string $plain, ?array $vars = null)
    {
        $this->plain = $plain;
        $this->vars = $vars;
    }
}