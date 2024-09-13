<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ListClientsResponse
{
    /**
     * $data
     *
     * @var ?array<Client> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\Client>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $data = null;

    /**
     * @param  ?array<Client>  $data
     */
    public function __construct(?array $data = null)
    {
        $this->data = $data;
    }
}