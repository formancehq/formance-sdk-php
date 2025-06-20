<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Shared;


class V3ForwardPaymentServiceUserBankAccountResponseData
{
    /**
     * Since this call is asynchronous, the response will contain the ID of the task that was created to forward the bank account to the PSP. You can use the task API to check the status of the task and get the resulting bank account ID.
     *
     *
     *
     * @var string $taskID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('taskID')]
    public string $taskID;

    /**
     * @param  string  $taskID
     * @phpstan-pure
     */
    public function __construct(string $taskID)
    {
        $this->taskID = $taskID;
    }
}