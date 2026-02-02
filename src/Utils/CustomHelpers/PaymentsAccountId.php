<?php

declare(strict_types=1);

namespace formance\stack\Utils\CustomHelpers;

use InvalidArgumentException;

final class PaymentsAccountId
{
    /**
     * Build a Formance Payments Account ID from connectorId and reference.
     * 
     * @param  string  $connectorId  The identifier of the connector
     * @param  string  $reference    The identifier of the account from the connector's provider
     * @return string The Formance Payments Account ID
     *
     * @throws InvalidArgumentException When connectorId is invalid or if reference is empty
     */
    public static function buildAccountId(string $connectorId, string $reference): string
    {
        if ($connectorId === '') {
            throw new InvalidArgumentException('connectorId cannot be empty');
        }
        if ($reference === '') {
            throw new InvalidArgumentException('reference cannot be empty');
        }

        $decoded = base64_decode($connectorId, true);
        if ($decoded === false) {
            throw new InvalidArgumentException('connectorId is invalid');
        }

        try {
            $connectorIdJson = json_decode($decoded, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            throw new InvalidArgumentException('connectorId is invalid');
        }
        if (! is_object($connectorIdJson) && ! is_array($connectorIdJson)) {
            throw new InvalidArgumentException('connectorId is invalid');
        }

        $payload = [
            'ConnectorID' => $connectorIdJson,
            'Reference' => $reference,
        ];
        $json = json_encode($payload, JSON_UNESCAPED_SLASHES);
        if ($json === false) {
            throw new InvalidArgumentException('connectorId is invalid');
        }

        $encoded = base64_encode($json);

        return rtrim($encoded, '=');
    }
}
