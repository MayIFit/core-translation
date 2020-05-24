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

    protected static function booted() {
        static::creating(function ($model) {
            $model->createdBy()->associate(auth()->id());
            $model->updatedBy()->associate(auth()->id());
        });
    }
}
