<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class TaskStripeDescriptor
{
    /**
     *
     * @var string $account
     */
    #[\JMS\Serializer\Annotation\SerializedName('account')]
    public string $account;

    /**
     *
     * @var ?bool $main
     */
    #[\JMS\Serializer\Annotation\SerializedName('main')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $main = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * @param  ?string  $account
     * @param  ?string  $name
     * @param  ?bool  $main
     */
    public function __construct(?string $account = null, ?string $name = null, ?bool $main = null)
    {
        $this->account = $account;
        $this->name = $name;
        $this->main = $main;
    }
}