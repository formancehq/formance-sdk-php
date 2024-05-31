<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class GetInstanceHistoryRequest
{
    /**
     * The instance id
     *
     * @var string $instanceID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=instanceID')]
    public string $instanceID;

    public function __construct()
    {
        $this->instanceID = '';
    }
}