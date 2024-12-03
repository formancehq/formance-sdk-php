<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2BulkElementResultCreateTransactionSchemas
{
    /**
     *
     * @var V2Transaction $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2Transaction')]
    public V2Transaction $data;

    /**
     *
     * @var string $responseType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('responseType')]
    public string $responseType;

    /**
     * @param  V2Transaction  $data
     * @param  string  $responseType
     */
    public function __construct(V2Transaction $data, string $responseType)
    {
        $this->data = $data;
        $this->responseType = $responseType;
    }
}