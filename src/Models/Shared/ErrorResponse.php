<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class ErrorResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $details = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('errorCode')]
    #[\JMS\Serializer\Annotation\Type('enum<formance\stack\Models\Shared\ErrorsEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ErrorsEnum $errorCode = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('errorMessage')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $errorMessage = null;
    
	public function __construct()
	{
		$this->details = null;
		$this->errorCode = null;
		$this->errorMessage = null;
	}
}
