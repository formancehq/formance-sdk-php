<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class AccountsCursor
{
    #[\JMS\Serializer\Annotation\SerializedName('cursor')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Cursor')]
    public Cursor $cursor;

    public function __construct()
    {
        $this->cursor = new \formance\stack\Models\Shared\Cursor();
    }
}