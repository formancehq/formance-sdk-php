<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2BulkElementDeleteMetadata
{
    /**
     *
     * @var string $action
     */
    #[\JMS\Serializer\Annotation\SerializedName('action')]
    public string $action;

    /**
     *
     * @var ?V2BulkElementDeleteMetadataData $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2BulkElementDeleteMetadataData|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?V2BulkElementDeleteMetadataData $data = null;

    /**
     *
     * @var ?string $ik
     */
    #[\JMS\Serializer\Annotation\SerializedName('ik')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ik = null;

    /**
     * @param  ?string  $action
     * @param  ?V2BulkElementDeleteMetadataData  $data
     * @param  ?string  $ik
     */
    public function __construct(?string $action = null, ?V2BulkElementDeleteMetadataData $data = null, ?string $ik = null)
    {
        $this->action = $action;
        $this->data = $data;
        $this->ik = $ik;
    }
}