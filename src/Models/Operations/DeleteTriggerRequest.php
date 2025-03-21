<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class DeleteTriggerRequest
{
    /**
     * The trigger id
     *
     * @var string $triggerID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=triggerID')]
    public string $triggerID;

    /**
     * @param  string  $triggerID
     * @phpstan-pure
     */
    public function __construct(string $triggerID)
    {
        $this->triggerID = $triggerID;
    }
}