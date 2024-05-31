<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Key
{
    #[\JMS\Serializer\Annotation\SerializedName('dataType')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $dataType;

    #[\JMS\Serializer\Annotation\SerializedName('required')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $required;

    public function __construct()
    {
        $this->dataType = '';
        $this->required = false;
    }
}