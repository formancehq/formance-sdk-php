<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ConnectorsResponse
{
    /**
     * $data
     *
     * @var array<ConnectorsResponseData> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\ConnectorsResponseData>')]
    public array $data;

    /**
     * @param  array<ConnectorsResponseData>  $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}