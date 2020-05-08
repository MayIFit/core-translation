<?php

namespace MayIFit\Core\Translation\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\TranslationLoader\LanguageLine;

use MayIFit\Core\Permission\Traits\HasUsers;

class Translation extends LanguageLine
{
    use HasUsers;

    protected $table = "language_lines";
    
    protected function asJson($value) {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function save(array $options = array()) {
        $this->created_by = auth()->id() ?? 1;
        $this->updated_by = auth()->id();
        parent::save($options);
    }
}
