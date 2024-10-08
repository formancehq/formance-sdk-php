<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2Volume
{
    /**
     *
     * @var ?int $balance
     */
    #[\JMS\Serializer\Annotation\SerializedName('balance')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $balance = null;

    /**
     *
     * @var int $input
     */
    #[\JMS\Serializer\Annotation\SerializedName('input')]
    public int $input;

    /**
     *
     * @var int $output
     */
    #[\JMS\Serializer\Annotation\SerializedName('output')]
    public int $output;

    /**
     * @param  int  $input
     * @param  int  $output
     * @param  ?int  $balance
     */
    public function __construct(int $input, int $output, ?int $balance = null)
    {
        $this->input = $input;
        $this->output = $output;
        $this->balance = $balance;
    }
}