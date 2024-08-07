<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;

use formance\stack\Utils\SpeakeasyMetadata;
class Security
{
    #[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public string $authorization;

    public function __construct()
    {
        $this->authorization = '';
    }
}