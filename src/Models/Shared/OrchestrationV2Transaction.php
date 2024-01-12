<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class OrchestrationV2Transaction
{
    /**
     * $metadata
     * 
     * @var array<string, string> $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;
    
    /**
     * $postings
     * 
     * @var array<\formance\stack\Models\Shared\V2Posting> $postings
     */
	#[\JMS\Serializer\Annotation\SerializedName('postings')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\V2Posting>')]
    public array $postings;
    
	#[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reference = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('timestamp')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $timestamp;
    
	#[\JMS\Serializer\Annotation\SerializedName('txid')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $txid;
    
	public function __construct()
	{
		$this->metadata = [];
		$this->postings = [];
		$this->reference = null;
		$this->timestamp = new \DateTime();
		$this->txid = 0;
	}
}