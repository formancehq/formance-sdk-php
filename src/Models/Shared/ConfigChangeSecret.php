<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ConfigChangeSecret
{
    /**
     *
     * @var string $secret
     */
    #[\JMS\Serializer\Annotation\SerializedName('secret')]
    public string $secret;

    /**
     * @param  string  $secret
     */
    public function __construct(string $secret)
    {
        $this->secret = $secret;
    }
}