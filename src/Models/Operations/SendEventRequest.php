<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class SendEventRequest
{
    /**
     * The instance id
     *
     * @var string $instanceID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=instanceID')]
    public string $instanceID;

    /**
     *
     * @var ?SendEventRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?SendEventRequestBody $requestBody = null;

    /**
     * @param  string  $instanceID
     * @param  ?SendEventRequestBody  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $instanceID, ?SendEventRequestBody $requestBody = null)
    {
        $this->instanceID = $instanceID;
        $this->requestBody = $requestBody;
    }
}