<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V2MigrationInfo
{
    /**
     *
     * @var ?\DateTime $date
     */
    #[\JMS\Serializer\Annotation\SerializedName('date')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $date = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?V2MigrationInfoState $state
     */
    #[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Shared\V2MigrationInfoState|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?V2MigrationInfoState $state = null;

    /**
     *
     * @var ?int $version
     */
    #[\JMS\Serializer\Annotation\SerializedName('version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $version = null;

    /**
     * @param  ?\DateTime  $date
     * @param  ?string  $name
     * @param  ?V2MigrationInfoState  $state
     * @param  ?int  $version
     */
    public function __construct(?\DateTime $date = null, ?string $name = null, ?V2MigrationInfoState $state = null, ?int $version = null)
    {
        $this->date = $date;
        $this->name = $name;
        $this->state = $state;
        $this->version = $version;
    }
}