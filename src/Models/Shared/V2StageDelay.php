<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2StageDelay
{
    /**
     *
     * @var ?string $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $duration = null;

    /**
     *
     * @var ?\DateTime $until
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('until')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $until = null;

    /**
     * @param  ?string  $duration
     * @param  ?\DateTime  $until
     */
    public function __construct(?string $duration = null, ?\DateTime $until = null)
    {
        $this->duration = $duration;
        $this->until = $until;
    }
}