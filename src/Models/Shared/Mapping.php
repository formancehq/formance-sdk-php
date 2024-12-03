<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Mapping
{
    /**
     * $contracts
     *
     * @var array<Contract> $contracts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contracts')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\formance\stack\Models\Shared\Contract>')]
    public array $contracts;

    /**
     * @param  array<Contract>  $contracts
     */
    public function __construct(array $contracts)
    {
        $this->contracts = $contracts;
    }
}