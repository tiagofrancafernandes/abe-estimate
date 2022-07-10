<?php

namespace App\Helpers;

class HtmlTagAtrributeHelpers
{
    public static function prepareArrayToAtrributes(array $attributes, ?bool $encodeToUrl = false): array
    {
        $attributes = array_filter($attributes, fn ($value, $key) => !!$key, ARRAY_FILTER_USE_BOTH);

        return array_map(function ($attribute, $value = "") use ($encodeToUrl) {
            if (
                !$attribute ||
                !in_array(gettype($attribute), [
                    'string',
                    'integer',
                ])
            ) {
                return [];
            }

            $attribute = is_string($attribute) && strlen($attribute) >= 1 ? $attribute : null;
            $attribute = is_numeric($attribute) ? "attribute-index-{$attribute}" : $attribute;

            $value = in_array(gettype($value), [
                'array',
                'object',
            ])
                ? json_encode($value)
                : (empty($value) ? null : $value);

            $finalValue = is_string($value) ? $value : json_encode($value);
            $finalValue = ($encodeToUrl ? urlencode($value) : $value);

            return "{$attribute}=\"{$finalValue}\"";
        }, array_keys($attributes), array_values($attributes));
    }

    public static function arrayToAtrributes(
        array $attributes,
        ?string $attributePrefix = null,
        ?bool $encodeToUrl = false
    ): string {
        $attributes = static::prepareArrayToAtrributes($attributes, $encodeToUrl) ?? [];

        return implode(
            ($attributePrefix ?? ' '),
            $attributes
        );
    }
}
