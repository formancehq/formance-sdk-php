<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Response
{
    /**
     *
     * @var ?ResponseCursor $cursor
     */
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\ResponseCursor|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?ResponseCursor $cursor = null;

    /**
     * The payload
     *
     * @var ?array<string, mixed> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $data = null;

    /**
     * @param  ?ResponseCursor  $cursor
     * @param  ?array<string, mixed>  $data
     */
    public function __construct(?ResponseCursor $cursor = null, ?array $data = null)
    {
        $this->cursor = $cursor;
        $this->data = $data;
    }
}