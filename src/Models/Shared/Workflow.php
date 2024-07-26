<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class Workflow
{
    #[\JMS\Serializer\Annotation\SerializedName('config')]
    #[\JMS\Serializer\Annotation\Type('formance\stack\Models\Shared\WorkflowConfig')]
    public WorkflowConfig $config;

    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    #[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;

    public function __construct()
    {
        $this->config = new \formance\stack\Models\Shared\WorkflowConfig();
        $this->createdAt = new \DateTime();
        $this->id = '';
        $this->updatedAt = new \DateTime();
    }
}