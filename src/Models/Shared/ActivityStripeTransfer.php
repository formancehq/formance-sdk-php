<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ActivityStripeTransfer
{
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $amount = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('asset')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $asset = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('connectorID')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $connectorID = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('destination')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $destination = null;
    
    /**
     * A set of key/value pairs that you can attach to a transfer object.
     * 
     * It can be useful for storing additional information about the transfer in a structured format.
     * 
     * 
     * @var ?\formance\stack\Models\Shared\ActivityStripeTransferMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ActivityStripeTransferMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ActivityStripeTransferMetadata $metadata = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('waitingValidation')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $waitingValidation = null;
    
	public function __construct()
	{
		$this->amount = null;
		$this->asset = null;
		$this->connectorID = null;
		$this->destination = null;
		$this->metadata = null;
		$this->waitingValidation = null;
	}
}
