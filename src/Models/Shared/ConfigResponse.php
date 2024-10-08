<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ConfigResponse
{
    /**
     *
     * @var WebhooksConfig $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\WebhooksConfig')]
    public WebhooksConfig $data;

    /**
     * @param  WebhooksConfig  $data
     */
    public function __construct(WebhooksConfig $data)
    {
        $this->data = $data;
    }
}