<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

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
        $this->collection->transform(function (User $user) {
            return (new TranslationResource($user));
        });

        return parent::toArray($request);
    }
}