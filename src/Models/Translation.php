<?php

namespace MayIFit\Core\Translation\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\TranslationLoader\LanguageLine;

class Translation extends LanguageLine
{
    //
    protected $table = "translations";

    protected function asJson($value) {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
