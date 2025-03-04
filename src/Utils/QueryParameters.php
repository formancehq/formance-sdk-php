<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace formance\stack\Utils;

use Psr\Http\Message\RequestInterface;
use ReflectionProperty;

class QueryParameters
{
    /**
     * @param  string  $type
     * @param  mixed  $queryParams
     * @param  array<string,string>  $urlOverride
     * @param  array<string,array<string,array<string,string>>>|null  $globals
     * @return array<string, string>
     */
    public function parseQueryParams(string $type, mixed $queryParams, array $urlOverride, ?array $globals = null): array
    {
        $parts = [];

        $fields = array_keys(get_class_vars($type));

        foreach ($fields as $field) {
            $value = $queryParams !== null ? $queryParams->{$field} : null;

            if ($globals !== null) {
                $value = populateGlobal($value, 'queryParam', $field, $globals);
            }

            if ($value === null) {
                continue;
            }

            $requestMetadata = RequestBodies::parseRequestMetadata(new ReflectionProperty($type, $field));
            if ($requestMetadata !== null) {
                continue;
            }

            $metadata = $this->parseQueryParamsMetadata(new ReflectionProperty($type, $field));
            if ($metadata === null) {
                continue;
            }
            if (! empty($metadata->serialization)) {
                $parts = array_merge($parts, $this->parseSerializationParams($metadata, $value));
            } else {
                match ($metadata->style) {
                    'deepObject' => $parts = array_merge_recursive($parts, $this->encodeDeepObjectParams($metadata, $value)),
                    'form' => $parts = array_merge_recursive($parts, $this->parseDelimitedParams($metadata, $value, ',')),
                    'pipeDelimited' => $parts = array_merge_recursive($parts, $this->parseDelimitedParams($metadata, $value, '|')),
                    default => throw new \RuntimeException('Unsupported style '.$metadata->style),
                };
            }
        }

        $parts = array_merge($parts, $urlOverride);

        return $parts;
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @return array<string,string>
     */
    private function parseSerializationParams(ParamsMetadata $metadata, mixed $value): array
    {
        $queryParams = [];

        switch ($metadata->serialization) {
            case 'json':
                $serializer = JSON::createSerializer();
                $queryParams[$metadata->name] = $serializer->serialize($value, 'json');
                break;
            default:
                throw new \Exception('Unsupported serialization: '.$metadata->serialization);
        }

        return $queryParams;
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @return array<string, array<int, string>|string>
     */
    private function encodeDeepObjectParams(ParamsMetadata $metadata, mixed $value, ?string $prefix = null): array
    {
        $queryParams = [];

        $dateTimeFormat = $metadata->dateTimeFormat;
        switch (gettype($value)) {
            case 'object':
                if ($prefix) {
                    $prefix = $prefix.'['.$metadata->name.']';
                } else {
                    $prefix = $metadata->name;
                }
                if ($value instanceof \Brick\Math\BigDecimal || $value instanceof \Brick\Math\BigInteger || $value instanceof \Brick\DateTime\LocalDate || $value instanceof \DateTime || $value instanceof \UnitEnum) {
                    $queryParams[$prefix] = valToString($value, $metadata->encodingArray());
                    break;
                }
                foreach ($value as $field => $val) { /** @phpstan-ignore-line */
                    if ($val === null) {
                        continue;
                    }

                    $fieldMetadata = $this->parseQueryParamsMetadata(new ReflectionProperty($value::class, $field));


                    if ($fieldMetadata === null) {
                        continue;
                    }


                    $items = [];

                    if (is_array($val)) {
                        $queryParams = array_merge($queryParams, $this->encodeDeepObjectParams($fieldMetadata, $val, $prefix));
                    } elseif (is_object($val)) {
                        $queryParams = array_merge($queryParams, $this->encodeDeepObjectParams($fieldMetadata, $val, $prefix));
                    } else {
                        $queryParams[$prefix.'['.$fieldMetadata->name.']'] = valToString($val, $fieldMetadata->encodingArray());
                    }
                }
                break;
            case 'array':
                if (! array_is_list($value)) {
                    foreach ($value as $key => $val) {
                        $qpKey = $metadata->name.'['.$key.']';
                        if ($prefix) {
                            $qpKey = $prefix.'['.$metadata->name.']'.'['.$key.']';
                        }

                        if ($val === null) {
                            continue;
                        }

                        $items = [];

                        if (is_array($val) && array_is_list($val)) {
                            foreach ($val as $item) {
                                $items[] = valToString($item, ['dateTimeFormat' => $dateTimeFormat]);
                            }
                        } else {
                            $queryParams[$qpKey] = valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                        }

                        if (count($items) > 0) {
                            $queryParams[$qpKey] = $items;
                        }
                    }
                } else {
                    $items = [];
                    if ($prefix) {
                        $qpKey = $prefix.'['.$metadata->name.']';
                    } else {
                        $qpKey = $metadata->name;
                    }
                    $count = 0;
                    foreach ($value as $item) {
                        $items[] = valToString($item, ['dateTimeFormat' => $dateTimeFormat]);
                    }
                    $queryParams[$qpKey] = $items;
                }
                break;
        }

        return $queryParams;
    }

    /**
     * @param  ParamsMetadata  $metadata
     * @param  mixed  $value
     * @param  string  $delimiter
     * @return array<string, array<int, string>|string>
     */
    private function parseDelimitedParams(ParamsMetadata $metadata, mixed $value, string $delimiter): array
    {
        $queryParams = [];

        $dateTimeFormat = $metadata->dateTimeFormat;

        switch (gettype($value)) {
            case 'object':
                $items = [];

                if ($value instanceof \Brick\Math\BigDecimal || $value instanceof \Brick\Math\BigInteger || $value instanceof \Brick\DateTime\LocalDate || $value instanceof \DateTime || $value instanceof \UnitEnum) {
                    $queryParams[$metadata->name] = valToString($value, $metadata->encodingArray());
                    break;
                }
                foreach ($value as $field => $val) { /** @phpstan-ignore-line */
                    if ($val === null) {
                        continue;
                    }

                    $fieldMetadata = $this->parseQueryParamsMetadata(new ReflectionProperty($value::class, $field));
                    if ($fieldMetadata === null) {
                        continue;
                    }

                    if ($metadata->explode) {
                        $queryParams[$fieldMetadata->name] = valToString($val, $fieldMetadata->encodingArray());
                    } else {
                        $items[] = $fieldMetadata->name.$delimiter.valToString($val, $fieldMetadata->encodingArray());
                    }
                }

                if (count($items) > 0) {
                    $queryParams[$metadata->name] = implode($delimiter, $items);
                }
                break;
            case 'array':
                if (array_is_list($value)) {
                    $values = [];
                    $items = [];

                    foreach ($value as $item) {
                        if ($metadata->explode) {
                            $values[] = valToString($item, ['dateTimeFormat' => $dateTimeFormat]);
                        } else {
                            $items[] = valToString($item, ['dateTimeFormat' => $dateTimeFormat]);
                        }
                    }

                    if (count($items) > 0) {
                        $values[] = implode($delimiter, $items);
                    }

                    $queryParams[$metadata->name] = $values;
                } else {
                    $items = [];

                    foreach ($value as $key => $val) {
                        if ($val === null) {
                            continue;
                        }

                        if ($metadata->explode) {
                            $queryParams[$key] = valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                        } else {
                            $items[] = $key.$delimiter.valToString($val, ['dateTimeFormat' => $dateTimeFormat]);
                        }
                    }

                    if (count($items) > 0) {
                        $queryParams[$metadata->name] = implode($delimiter, $items);
                    }
                }
                break;
            default:
                $queryParams[$metadata->name] = valToString($value, ['dateTimeFormat' => $dateTimeFormat]);
        }

        return $queryParams;
    }

    /**
     * @param  array<int|string, string|array<string|int, string>>  $queryParams
     * @return string
     */
    private static function recursivelyBuildQueryString(array $queryParams): string
    {
        $parts = [];

        foreach ($queryParams as $key => $value) {
            if (is_array($value) && array_is_list($value)) {
                $parts = array_merge($parts, array_map(fn ($v) => self::buildQueryString($key, $v), $value));
            } elseif (is_array($value)) {
                $res = self::recursivelyBuildQueryString($value);
                $parts[] = self::buildQueryString($key, $res);
            } else {
                $parts[] = self::buildQueryString($key, $value);
            }
        }

        return implode('&', $parts);
    }

    /**
     * @param  string|int  $queryParamKey
     * @param  string  $queryParamValue
     * @return string
     */
    private static function buildQueryString(string|int $queryParamKey, string $queryParamValue): string
    {
        if (is_int($queryParamKey)) {
            $queryParamKey = (string) $queryParamKey;
        }

        return implode('=', [urlencode($queryParamKey), urlencode($queryParamValue)]);
    }

    private function parseQueryParamsMetadata(ReflectionProperty $property): ?ParamsMetadata
    {
        $metadataStr = SpeakeasyMetadata::find($property->getAttributes(SpeakeasyMetadata::class), 'queryParam');
        if ($metadataStr === null) {
            return null;
        }

        $metadata = ParamsMetadata::parse($metadataStr);
        if ($metadata === null) {
            return null;
        }

        return $metadata;
    }

    /**
     * @param  RequestInterface  $httpRequest
     * @param  array<string, mixed>  $queryParams
     * @return string
     */
    public static function standardizeQueryParams(RequestInterface $httpRequest, array $queryParams): string
    {
        $uri = $httpRequest->getUri();
        $query = $uri->getQuery();
        $requestQueryParams = Utils::proper_parse_str($query);

        $allParams = array_merge($queryParams, $requestQueryParams);
        $uri = $uri->withQuery(QueryParameters::recursivelyBuildQueryString($allParams));

        return $uri->getQuery();
    }
}
