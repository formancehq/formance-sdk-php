<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Errors;

use formance\stack\Utils;
/** ReconciliationErrorResponse - Error response */
class ReconciliationErrorResponse
{
    /**
     *
     * @var ?string $details
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('details')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $details = null;

    /**
     *
     * @var string $errorCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('errorCode')]
    public string $errorCode;

    /**
     *
     * @var string $errorMessage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('errorMessage')]
    public string $errorMessage;

    /**
     * @param  string  $errorCode
     * @param  string  $errorMessage
     * @param  ?string  $details
     * @phpstan-pure
     */
    public function __construct(string $errorCode, string $errorMessage, ?string $details = null)
    {
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->details = $details;
    }

    public function toException(): ReconciliationErrorResponseThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new ReconciliationErrorResponseThrowable($message, (int) $code, $this);
    }
}