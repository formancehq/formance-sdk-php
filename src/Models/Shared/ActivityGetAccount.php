<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ActivityGetAccount
{
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('ledger')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $ledger;
    
	public function __construct()
	{
		$this->id = "";
		$this->ledger = "";
	}
}