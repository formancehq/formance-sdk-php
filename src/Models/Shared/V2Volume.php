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
     * @var \Brick\Math\BigInteger $input
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('input')]
    public \Brick\Math\BigInteger $input;

    /**
     *
     * @var \Brick\Math\BigInteger $output
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('output')]
    public \Brick\Math\BigInteger $output;

    /**
     *
     * @var ?\Brick\Math\BigInteger $balance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\Brick\Math\BigInteger $balance = null;

    /**
     * @param  \Brick\Math\BigInteger  $input
     * @param  \Brick\Math\BigInteger  $output
     * @param  ?\Brick\Math\BigInteger  $balance
     * @phpstan-pure
     */
    public function __construct(\Brick\Math\BigInteger $input, \Brick\Math\BigInteger $output, ?\Brick\Math\BigInteger $balance = null)
    {
        $this->input = $input;
        $this->output = $output;
        $this->balance = $balance;
    }
}