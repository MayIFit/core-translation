<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Illuminate\Support\Facades\DB;

class AllLanguage
{
    public function __invoke($rootValue,array $args, GraphQLContext $context, ResolveInfo $resolveInfo) {
        $languages = DB::table('languages')->get();
        return $languages ?? [];
    }
}