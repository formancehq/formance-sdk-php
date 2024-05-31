<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Operations;

use formance\stack\Utils\SpeakeasyMetadata;
class ListTriggersRequest
{
    /**
     * search by name
     *
     * @var ?string $name
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public ?string $name = null;

    public function __construct()
    {
        $this->name = null;
    }
}