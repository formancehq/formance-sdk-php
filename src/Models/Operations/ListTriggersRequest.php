<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
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

    /**
     * @param  ?string  $name
     * @phpstan-pure
     */
    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }
}