<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class OrchestrationAccount
{
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $address;

    /**
     * $effectiveVolumes
     *
     * @var ?array<string, \formance\stack\Models\Shared\Volume> $effectiveVolumes
     */
    #[\JMS\Serializer\Annotation\SerializedName('effectiveVolumes')]
    #[\JMS\Serializer\Annotation\Type('array<string, formance\stack\Models\Shared\Volume>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $effectiveVolumes = null;

    /**
     * $metadata
     *
     * @var array<string, string> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;

    /**
     * $volumes
     *
     * @var ?array<string, \formance\stack\Models\Shared\Volume> $volumes
     */
    #[\JMS\Serializer\Annotation\SerializedName('volumes')]
    #[\JMS\Serializer\Annotation\Type('array<string, formance\stack\Models\Shared\Volume>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $volumes = null;

    public function __construct()
    {
        $this->address = '';
        $this->effectiveVolumes = null;
        $this->metadata = [];
        $this->volumes = null;
    }
}