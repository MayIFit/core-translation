<?php

namespace App\GraphQL\Queries\Core;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Illuminate\Support\Facades\DB;

class AllLanguages
{
    public function __invoke($rootValue,array $args, GraphQLContext $context, ResolveInfo $resolveInfo) {
        $languages = DB::table('language_list')->get();
        return $languages ?? [];
    }
}