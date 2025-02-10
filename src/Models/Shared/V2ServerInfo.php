<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ServerInfo
{
    /**
     *
     * @var string $version
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('version')]
    public string $version;

    /**
     * @param  string  $version
     * @phpstan-pure
     */
    public function __construct(string $version)
    {
        $this->version = $version;
    }
}