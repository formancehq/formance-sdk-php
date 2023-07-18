<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class WalletsTransaction
{
	#[\JMS\Serializer\Annotation\SerializedName('ledger')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ledger = null;
    
    /**
     * Metadata associated with the wallet.
     * 
     * @var array<string, string> $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $metadata;
    
    /**
     * $postCommitVolumes
     * 
     * @var ?array<string, array<string, \formance\stack\Models\Shared\WalletsVolume>> $postCommitVolumes
     */
	#[\JMS\Serializer\Annotation\SerializedName('postCommitVolumes')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string, formance\stack\Models\Shared\WalletsVolume>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $postCommitVolumes = null;
    
    /**
     * $postings
     * 
     * @var array<\formance\stack\Models\Shared\WalletsPosting> $postings
     */
	#[\JMS\Serializer\Annotation\SerializedName('postings')]
    #[\JMS\Serializer\Annotation\Type('array<formance\stack\Models\Shared\WalletsPosting>')]
    public array $postings;
    
    /**
     * $preCommitVolumes
     * 
     * @var ?array<string, array<string, \formance\stack\Models\Shared\WalletsVolume>> $preCommitVolumes
     */
	#[\JMS\Serializer\Annotation\SerializedName('preCommitVolumes')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string, formance\stack\Models\Shared\WalletsVolume>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $preCommitVolumes = null;
    
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
		$this->ledger = null;
		$this->metadata = [];
		$this->postCommitVolumes = null;
		$this->postings = [];
		$this->preCommitVolumes = null;
		$this->reference = null;
		$this->timestamp = new \DateTime();
		$this->txid = 0;
	}
}
