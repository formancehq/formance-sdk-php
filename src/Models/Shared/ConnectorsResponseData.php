<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ConnectorsResponseData
{
    /**
     *
     * @var string $connectorID
     */
    #[\JMS\Serializer\Annotation\SerializedName('connectorID')]
    public string $connectorID;

    /**
     *
     * @var ?bool $enabled
     */
    #[\JMS\Serializer\Annotation\SerializedName('enabled')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $enabled = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var Connector $provider
     */
    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\Connector')]
    public Connector $provider;

    /**
     * @param  string  $connectorID
     * @param  string  $name
     * @param  Connector  $provider
     * @param  ?bool  $enabled
     */
    public function __construct(string $connectorID, string $name, Connector $provider, ?bool $enabled = null)
    {
        $this->connectorID = $connectorID;
        $this->name = $name;
        $this->provider = $provider;
        $this->enabled = $enabled;
    }
}