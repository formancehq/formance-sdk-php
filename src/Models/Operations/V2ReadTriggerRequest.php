<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class V2ReadTriggerRequest
{
    /**
     * The trigger id
     *
     * @var string $triggerID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=triggerID')]
    public string $triggerID;

    public function __construct()
    {
        $this->triggerID = '';
    }
}