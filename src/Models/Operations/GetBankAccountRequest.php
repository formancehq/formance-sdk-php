<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class GetBankAccountRequest
{
    /**
     * The bank account ID.
     *
     * @var string $bankAccountId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=bankAccountId')]
    public string $bankAccountId;

    /**
     * @param  string  $bankAccountId
     * @phpstan-pure
     */
    public function __construct(string $bankAccountId)
    {
        $this->bankAccountId = $bankAccountId;
    }
}