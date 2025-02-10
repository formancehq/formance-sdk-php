<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class OrchestrationPostTransactionScript
{
    /**
     *
     * @var string $plain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('plain')]
    public string $plain;

    /**
     * $vars
     *
     * @var ?array<string, mixed> $vars
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('vars')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $vars = null;

    /**
     * @param  string  $plain
     * @param  ?array<string, mixed>  $vars
     * @phpstan-pure
     */
    public function __construct(string $plain, ?array $vars = null)
    {
        $this->plain = $plain;
        $this->vars = $vars;
    }
}