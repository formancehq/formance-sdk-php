<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class CreateSecretResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\Secret')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Secret $data = null;

    public function __construct()
    {
        $this->data = null;
    }
}