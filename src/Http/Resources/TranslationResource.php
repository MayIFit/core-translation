<?php

namespace MayIFit\Core\Translation\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TranslationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'group' => $this->group,
            'key'   => $this->key,
            'translations'  => $this->text,
        ];
    }
}