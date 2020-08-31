<?php

namespace MayIFit\Core\Translation\GraphQL\Scalars;

use GraphQL\Type\Definition\ScalarType;

/**
 * Class ObjectScalar
 *
 * @package MayIFit\Core\Translation
 */
class ObjectScalar extends ScalarType
{
    public function serialize($value)
    {
        return $value;
    }

    public function parseValue($value)
    {
        return $value;
    }

    public function parseLiteral($valueNode, ?array $variables = null)
    {
        return $valueNode->value;
    }
}
