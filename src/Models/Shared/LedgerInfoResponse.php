<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class LedgerInfoResponse
{
    /**
     *
     * @var ?LedgerInfo $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\LedgerInfo|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?LedgerInfo $data = null;

    /**
     * @param  ?LedgerInfo  $data
     */
    public function __construct(?LedgerInfo $data = null)
    {
        $this->data = $data;
    }
}