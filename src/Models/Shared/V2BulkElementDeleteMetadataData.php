<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2BulkElementDeleteMetadataData
{
    /**
     *
     * @var string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string|int $targetId
     */
    #[\JMS\Serializer\Annotation\SerializedName('targetId')]
    #[\JMS\Serializer\Annotation\Type('string|int')]
    public string|int $targetId;

    /**
     *
     * @var V2TargetType $targetType
     */
    #[\JMS\Serializer\Annotation\SerializedName('targetType')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2TargetType')]
    public V2TargetType $targetType;

    /**
     * @param  string  $key
     * @param  string|int  $targetId
     * @param  V2TargetType  $targetType
     */
    public function __construct(string $key, string|int $targetId, V2TargetType $targetType)
    {
        $this->key = $key;
        $this->targetId = $targetId;
        $this->targetType = $targetType;
    }
}