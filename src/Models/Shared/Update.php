<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Update
{
    /**
     *
     * @var ?UpdateAccount $account
     */
    #[\JMS\Serializer\Annotation\SerializedName('account')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\UpdateAccount|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateAccount $account = null;

    /**
     * @param  ?UpdateAccount  $account
     */
    public function __construct(?UpdateAccount $account = null)
    {
        $this->account = $account;
    }
}