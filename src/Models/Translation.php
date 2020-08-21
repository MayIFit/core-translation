<?php

namespace MayIFit\Core\Translation\Models;

use Spatie\TranslationLoader\LanguageLine;

use MayIFit\Core\Permission\Traits\HasUsers;

/**
 * Class Translation
 *
 * @package MayIFit\Core\Translation
 */
class Translation extends LanguageLine
{
    use HasUsers;

    protected $table = "language_lines";
    
    protected function asJson($value) {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
