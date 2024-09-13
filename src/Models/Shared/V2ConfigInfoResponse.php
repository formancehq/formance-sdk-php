<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2ConfigInfoResponse
{
    /**
     *
     * @var string $server
     */
    #[\JMS\Serializer\Annotation\SerializedName('server')]
    public string $server;

    /**
     *
     * @var string $version
     */
    #[\JMS\Serializer\Annotation\SerializedName('version')]
    public string $version;

    /**
     * @param  string  $server
     * @param  string  $version
     */
    public function __construct(string $server, string $version)
    {
        $this->server = $server;
        $this->version = $version;
    }
}