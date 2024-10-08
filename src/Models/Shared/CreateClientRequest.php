<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class CreateClientRequest
{
    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * $metadata
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * $postLogoutRedirectUris
     *
     * @var ?array<string> $postLogoutRedirectUris
     */
    #[\JMS\Serializer\Annotation\SerializedName('postLogoutRedirectUris')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $postLogoutRedirectUris = null;

    /**
     *
     * @var ?bool $public
     */
    #[\JMS\Serializer\Annotation\SerializedName('public')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $public = null;

    /**
     * $redirectUris
     *
     * @var ?array<string> $redirectUris
     */
    #[\JMS\Serializer\Annotation\SerializedName('redirectUris')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $redirectUris = null;

    /**
     * $scopes
     *
     * @var ?array<string> $scopes
     */
    #[\JMS\Serializer\Annotation\SerializedName('scopes')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $scopes = null;

    /**
     *
     * @var ?bool $trusted
     */
    #[\JMS\Serializer\Annotation\SerializedName('trusted')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $trusted = null;

    /**
     * @param  string  $name
     * @param  ?string  $description
     * @param  ?array<string, mixed>  $metadata
     * @param  ?array<string>  $postLogoutRedirectUris
     * @param  ?bool  $public
     * @param  ?array<string>  $redirectUris
     * @param  ?array<string>  $scopes
     * @param  ?bool  $trusted
     */
    public function __construct(string $name, ?string $description = null, ?array $metadata = null, ?array $postLogoutRedirectUris = null, ?bool $public = null, ?array $redirectUris = null, ?array $scopes = null, ?bool $trusted = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->metadata = $metadata;
        $this->postLogoutRedirectUris = $postLogoutRedirectUris;
        $this->public = $public;
        $this->redirectUris = $redirectUris;
        $this->scopes = $scopes;
        $this->trusted = $trusted;
    }
}