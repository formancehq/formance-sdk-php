<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ForwardBankAccountRequest
{
    /**
     *
     * @var string $connectorID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('connectorID')]
    public string $connectorID;

    /**
     * @param  string  $connectorID
     */
    public function __construct(string $connectorID)
    {
        $this->connectorID = $connectorID;
    }
}