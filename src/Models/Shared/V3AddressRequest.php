<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3AddressRequest
{
    /**
     *
     * @var ?string $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $city = null;

    /**
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     *
     * @var ?string $postalCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('postalCode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $postalCode = null;

    /**
     *
     * @var ?string $region
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('region')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $region = null;

    /**
     *
     * @var ?string $streetName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('streetName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $streetName = null;

    /**
     *
     * @var ?string $streetNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('streetNumber')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $streetNumber = null;

    /**
     * @param  ?string  $city
     * @param  ?string  $country
     * @param  ?string  $postalCode
     * @param  ?string  $region
     * @param  ?string  $streetName
     * @param  ?string  $streetNumber
     * @phpstan-pure
     */
    public function __construct(?string $city = null, ?string $country = null, ?string $postalCode = null, ?string $region = null, ?string $streetName = null, ?string $streetNumber = null)
    {
        $this->city = $city;
        $this->country = $country;
        $this->postalCode = $postalCode;
        $this->region = $region;
        $this->streetName = $streetName;
        $this->streetNumber = $streetNumber;
    }
}