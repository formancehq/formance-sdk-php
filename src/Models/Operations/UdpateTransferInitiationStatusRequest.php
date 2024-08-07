<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class UdpateTransferInitiationStatusRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \formance\stack\Models\Shared\UpdateTransferInitiationStatusRequest $updateTransferInitiationStatusRequest;

    /**
     * The transfer ID.
     *
     * @var string $transferId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=transferId')]
    public string $transferId;

    public function __construct()
    {
        $this->updateTransferInitiationStatusRequest = new \formance\stack\Models\Shared\UpdateTransferInitiationStatusRequest();
        $this->transferId = '';
    }
}