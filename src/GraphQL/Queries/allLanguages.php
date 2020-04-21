<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Illuminate\Support\Facades\DB;

class allLanguages
{
    public function resolve($rootValue,array $args, GraphQLContext $context, ResolveInfo $resolveInfo) {
        $languages = DB::table('language_list')->get();
        return $languages;
    }
}