<?php

namespace MayIFit\Core\Translation\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

/**
 * Class AllLanguage
 *
 * @package MayIFit\Core\Translation
 */
class AllLanguage
{
    /**
     * Return all languages available in the System
     *
     * @return Collection
     */
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): Collection
    {
        $languages = DB::table('languages')->get();
        return $languages ?? [];
    }
}
