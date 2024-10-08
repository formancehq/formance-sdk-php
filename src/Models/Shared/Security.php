<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;

use formance\stack\Utils\SpeakeasyMetadata;
class Security
{
    /**
     *
     * @var ?string $authorization
     */
    #[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public ?string $authorization = null;

    /**
     * @param  ?string  $authorization
     */
    public function __construct(?string $authorization = null)
    {
        $this->authorization = $authorization;
    }
}