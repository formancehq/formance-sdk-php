<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2CreateLedgerRequest
{
	#[\JMS\Serializer\Annotation\SerializedName('bucket')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $bucket = null;
    
	public function __construct()
	{
		$this->bucket = null;
	}
}