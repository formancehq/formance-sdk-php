<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class DebitWalletRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\formance\stack\Models\Shared\DebitWalletRequest $debitWalletRequest = null;

    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    public function __construct()
    {
        $this->debitWalletRequest = null;
        $this->id = '';
    }
}