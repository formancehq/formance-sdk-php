<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class StageSendDestinationPayment
{
    /**
     *
     * @var string $psp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('psp')]
    public string $psp;

    /**
     * @param  string  $psp
     * @phpstan-pure
     */
    public function __construct(string $psp)
    {
        $this->psp = $psp;
    }
}