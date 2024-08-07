<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ListUsersResponse
{
    /**
     * $data
     *
     * @var ?array<\formance\stack\Models\Shared\User> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\User>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $data = null;

    public function __construct()
    {
        $this->data = null;
    }
}