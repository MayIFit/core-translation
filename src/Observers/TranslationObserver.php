<?php

namespace MayIFit\Core\Translation\Observers;

use Illuminate\Support\Facades\Auth;

use MayIFit\Core\Translation\Models\Translation;

class TranslationObserver
{
    /**
     * Handle the Translation "creating" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return void
     */
    public function creating(Translation $model)
    {
        $model->createdBy()->associate(Auth::user());
    }

    /**
     * Handle the Translation "created" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return void
     */
    public function created(Translation $model)
    {
        //
    }

    /**
     * Handle the Translation "saving" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return void
     */
    public function saving(Translation $model): void
    {
        //
    }

    /**
     * Handle the Translation "saved" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return void
     */
    public function saved(Translation $model): void
    {
        //
    }

    /**
     * Handle the Translation "updating" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return mixed
     */
    public function updating(Translation $model)
    {
        $model->updatedBy()->associate(Auth::user());
    }

    /**
     * Handle the Translation "updated" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return void
     */
    public function updated(Translation $model): void
    {
        //
    }

    /**
     * Handle the Translation "deleting" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return mixed
     */
    public function deleting(Translation $model)
    {
        //
    }

    /**
     * Handle the Translation "deleted" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return void
     */
    public function deleted(Translation $model): void
    {
        //
    }

    /**
     * Handle the Translation "forceDeleted" event.
     *
     * @param  \MayIFit\Extension\Shop\Models\Translation  $model
     * @return void
     */
    public function forceDeleted(Translation $model): void
    {
        //
    }
}
