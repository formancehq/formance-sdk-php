<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Attempt
{
    /**
     *
     * @var WebhooksConfig $config
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('config')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\WebhooksConfig')]
    public WebhooksConfig $config;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public \DateTime $createdAt;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $payload
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payload')]
    public string $payload;

    /**
     *
     * @var int $retryAttempt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('retryAttempt')]
    public int $retryAttempt;

    /**
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     *
     * @var int $statusCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('statusCode')]
    public int $statusCode;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedAt')]
    public \DateTime $updatedAt;

    /**
     *
     * @var string $webhookID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhookID')]
    public string $webhookID;

    /**
     *
     * @var ?\DateTime $nextRetryAfter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('nextRetryAfter')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $nextRetryAfter = null;

    /**
     * @param  WebhooksConfig  $config
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $payload
     * @param  int  $retryAttempt
     * @param  string  $status
     * @param  int  $statusCode
     * @param  \DateTime  $updatedAt
     * @param  string  $webhookID
     * @param  ?\DateTime  $nextRetryAfter
     * @phpstan-pure
     */
    public function __construct(WebhooksConfig $config, \DateTime $createdAt, string $id, string $payload, int $retryAttempt, string $status, int $statusCode, \DateTime $updatedAt, string $webhookID, ?\DateTime $nextRetryAfter = null)
    {
        $this->config = $config;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->payload = $payload;
        $this->retryAttempt = $retryAttempt;
        $this->status = $status;
        $this->statusCode = $statusCode;
        $this->updatedAt = $updatedAt;
        $this->webhookID = $webhookID;
        $this->nextRetryAfter = $nextRetryAfter;
    }
}