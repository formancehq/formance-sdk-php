<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class BankingCircleConfig
{
    /**
     *
     * @var string $authorizationEndpoint
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authorizationEndpoint')]
    public string $authorizationEndpoint;

    /**
     *
     * @var string $endpoint
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('endpoint')]
    public string $endpoint;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $password
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('password')]
    public string $password;

    /**
     *
     * @var string $userCertificate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('userCertificate')]
    public string $userCertificate;

    /**
     *
     * @var string $userCertificateKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('userCertificateKey')]
    public string $userCertificateKey;

    /**
     *
     * @var string $username
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('username')]
    public string $username;

    /**
     * The frequency at which the connector will try to fetch new BalanceTransaction objects from Banking Circle API.
     *
     *
     *
     * @var ?string $pollingPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pollingPeriod')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pollingPeriod = null;

    /**
     * @param  string  $authorizationEndpoint
     * @param  string  $endpoint
     * @param  string  $name
     * @param  string  $password
     * @param  string  $userCertificate
     * @param  string  $userCertificateKey
     * @param  string  $username
     * @param  ?string  $pollingPeriod
     * @phpstan-pure
     */
    public function __construct(string $authorizationEndpoint, string $endpoint, string $name, string $password, string $userCertificate, string $userCertificateKey, string $username, ?string $pollingPeriod = '120s')
    {
        $this->authorizationEndpoint = $authorizationEndpoint;
        $this->endpoint = $endpoint;
        $this->name = $name;
        $this->password = $password;
        $this->userCertificate = $userCertificate;
        $this->userCertificateKey = $userCertificateKey;
        $this->username = $username;
        $this->pollingPeriod = $pollingPeriod;
    }
}