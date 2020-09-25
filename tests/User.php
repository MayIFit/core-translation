<?php

namespace MayIFit\Core\Translation\Tests;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Laravel\Sanctum\HasApiTokens;

class User extends Model implements AuthorizableContract, AuthenticatableContract
{
    use HasApiTokens;
    use Authorizable;
    use Authenticatable;

    protected $guarded = [];

    protected $table = 'users';

    protected $morphClass = 'user';
}
