<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class DummyPayConfig
{
    /**
     *
     * @var string $directory
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('directory')]
    public string $directory;

    /**
     * The frequency at which the connector will try to fetch new payment objects from the directory
     *
     * @var ?string $filePollingPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('filePollingPeriod')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $filePollingPeriod = null;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?int $numberOfAccountsPreGenerated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('numberOfAccountsPreGenerated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $numberOfAccountsPreGenerated = null;

    /**
     *
     * @var ?int $numberOfPaymentsPreGenerated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('numberOfPaymentsPreGenerated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $numberOfPaymentsPreGenerated = null;

    /**
     *
     * @var ?string $prefixFileToIngest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prefixFileToIngest')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $prefixFileToIngest = null;

    /**
     * @param  string  $directory
     * @param  string  $name
     * @param  ?string  $filePollingPeriod
     * @param  ?int  $numberOfAccountsPreGenerated
     * @param  ?int  $numberOfPaymentsPreGenerated
     * @param  ?string  $prefixFileToIngest
     */
    public function __construct(string $directory, string $name, ?int $numberOfAccountsPreGenerated = null, ?int $numberOfPaymentsPreGenerated = null, ?string $prefixFileToIngest = null, ?string $filePollingPeriod = '10s')
    {
        $this->directory = $directory;
        $this->name = $name;
        $this->filePollingPeriod = $filePollingPeriod;
        $this->numberOfAccountsPreGenerated = $numberOfAccountsPreGenerated;
        $this->numberOfPaymentsPreGenerated = $numberOfPaymentsPreGenerated;
        $this->prefixFileToIngest = $prefixFileToIngest;
    }
}