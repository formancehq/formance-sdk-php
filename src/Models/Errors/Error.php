<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Models\Errors;


use formance\stack\Utils;
/** Error - General error */
class Error
{
    /**
     *
     * @var ErrorCode $errorCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('errorCode')]
    #[\JMS\Serializer\Annotation\Type('\formance\stack\Models\Errors\ErrorCode')]
    public ErrorCode $errorCode;

    /**
     *
     * @var string $errorMessage
     */
    #[\JMS\Serializer\Annotation\SerializedName('errorMessage')]
    public string $errorMessage;

    /**
     * @param  ErrorCode  $errorCode
     * @param  string  $errorMessage
     */
    public function __construct(ErrorCode $errorCode, string $errorMessage)
    {
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }

    public function toException(): ErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new ErrorThrowable($message, (int) $code, $this);
    }
}