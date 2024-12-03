<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


/** TransferInitiationResponse - OK */
class TransferInitiationResponse
{
    /**
     *
     * @var TransferInitiation $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\formance\stack\Models\Shared\TransferInitiation')]
    public TransferInitiation $data;

    /**
     * @param  TransferInitiation  $data
     */
    public function __construct(TransferInitiation $data)
    {
        $this->data = $data;
    }
}