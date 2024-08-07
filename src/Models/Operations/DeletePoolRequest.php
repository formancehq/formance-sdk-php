<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class DeletePoolRequest
{
    /**
     * The pool ID.
     *
     * @var string $poolId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=poolId')]
    public string $poolId;

    public function __construct()
    {
        $this->poolId = '';
    }
}