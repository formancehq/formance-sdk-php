<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Models\Shared;
use formance\stack\Utils\SpeakeasyMetadata;
class UpdateBankAccountMetadataRequest
{
    /**
     *
     * @var Shared\UpdateBankAccountMetadataRequest $updateBankAccountMetadataRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\UpdateBankAccountMetadataRequest $updateBankAccountMetadataRequest;

    /**
     * The bank account ID.
     *
     * @var string $bankAccountId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=bankAccountId')]
    public string $bankAccountId;

    /**
     * @param  Shared\UpdateBankAccountMetadataRequest  $updateBankAccountMetadataRequest
     * @param  string  $bankAccountId
     */
    public function __construct(Shared\UpdateBankAccountMetadataRequest $updateBankAccountMetadataRequest, string $bankAccountId)
    {
        $this->updateBankAccountMetadataRequest = $updateBankAccountMetadataRequest;
        $this->bankAccountId = $bankAccountId;
    }
}