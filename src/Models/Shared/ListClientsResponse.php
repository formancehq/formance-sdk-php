<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ListClientsResponse
{
    /**
     * $data
     *
     * @var ?array<\formance\stack\Models\Shared\Client> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\Client>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $data = null;

    public function __construct()
    {
        $this->data = null;
    }
}