<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Script
{
    /**
     * $metadata
     * 
     * @var ?array<string, mixed> $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('plain')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $plain;
    
    /**
     * Reference to attach to the generated transaction
     * 
     * @var ?string $reference
     */
	#[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reference = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('vars')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\ScriptVars')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ScriptVars $vars = null;
    
	public function __construct()
	{
		$this->metadata = null;
		$this->plain = "";
		$this->reference = null;
		$this->vars = null;
	}
}