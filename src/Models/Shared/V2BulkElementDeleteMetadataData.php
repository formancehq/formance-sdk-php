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
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string|\Brick\Math\BigInteger $targetId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('targetId')]
    #[\Speakeasy\Serializer\Annotation\Type('string|\Brick\Math\BigInteger')]
    public string|\Brick\Math\BigInteger $targetId;

    /**
     *
     * @var V2TargetType $targetType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('targetType')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2TargetType')]
    public V2TargetType $targetType;

    /**
     * @param  string  $key
     * @param  string|\Brick\Math\BigInteger  $targetId
     * @param  V2TargetType  $targetType
     * @phpstan-pure
     */
    public function __construct(string $key, string|\Brick\Math\BigInteger $targetId, V2TargetType $targetType)
    {
        $this->key = $key;
        $this->targetId = $targetId;
        $this->targetType = $targetType;
    }
}