<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class ChangeConfigSecretRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\formance\stack\Models\Shared\ConfigChangeSecret $configChangeSecret = null;

    /**
     * Config ID
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    public function __construct()
    {
        $this->configChangeSecret = null;
        $this->id = '';
    }
}