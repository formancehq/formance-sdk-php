<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ReconciliationRequest
{
    /**
     *
     * @var \DateTime $reconciledAtLedger
     */
    #[\JMS\Serializer\Annotation\SerializedName('reconciledAtLedger')]
    public \DateTime $reconciledAtLedger;

    /**
     *
     * @var \DateTime $reconciledAtPayments
     */
    #[\JMS\Serializer\Annotation\SerializedName('reconciledAtPayments')]
    public \DateTime $reconciledAtPayments;

    /**
     * @param  \DateTime  $reconciledAtLedger
     * @param  \DateTime  $reconciledAtPayments
     */
    public function __construct(\DateTime $reconciledAtLedger, \DateTime $reconciledAtPayments)
    {
        $this->reconciledAtLedger = $reconciledAtLedger;
        $this->reconciledAtPayments = $reconciledAtPayments;
    }
}