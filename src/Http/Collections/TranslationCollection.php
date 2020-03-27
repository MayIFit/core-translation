<?php

namespace MayIFit\Core\Translation\Http\Collections;

use Illuminate\Http\Resources\Json\ResourceCollection;

use MayIFit\Core\Translation\Http\Resources\TranslationResource;
use MayIFit\Core\Translation\Models\Translation;

class TranslationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Translation $translation) {
            return (new TranslationResource($translation));
        });

        return parent::toArray($request);
    }
}