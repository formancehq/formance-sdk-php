<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Attempt
{
    #[\JMS\Serializer\Annotation\SerializedName('config')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\WebhooksConfig')]
    public WebhooksConfig $config;

    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    #[\JMS\Serializer\Annotation\SerializedName('nextRetryAfter')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $nextRetryAfter = null;

    #[\JMS\Serializer\Annotation\SerializedName('payload')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $payload;

    #[\JMS\Serializer\Annotation\SerializedName('retryAttempt')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $retryAttempt;

    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;

    #[\JMS\Serializer\Annotation\SerializedName('statusCode')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $statusCode;

    #[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;

    #[\JMS\Serializer\Annotation\SerializedName('webhookID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $webhookID;

    public function __construct()
    {
        $this->config = new \formance\stack\Models\Shared\WebhooksConfig();
        $this->createdAt = new \DateTime();
        $this->id = '';
        $this->nextRetryAfter = null;
        $this->payload = '';
        $this->retryAttempt = 0;
        $this->status = '';
        $this->statusCode = 0;
        $this->updatedAt = new \DateTime();
        $this->webhookID = '';
    }
}