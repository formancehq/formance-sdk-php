<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3ConfigInfoResponse
{
    /**
     *
     * @var string $version
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('version')]
    public string $version;

    /**
     *
     * @var ?bool $debug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('debug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $debug = null;

    /**
     * @param  string  $version
     * @param  ?bool  $debug
     * @phpstan-pure
     */
    public function __construct(string $version, ?bool $debug = null)
    {
        $this->version = $version;
        $this->debug = $debug;
    }
}