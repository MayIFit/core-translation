<?php

namespace App\GraphQL\Scalars\Core;

use GraphQL\Type\Definition\ScalarType;

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