<?php

namespace MayIFit\Core\Translation\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use MayIFit\Core\Translation\Models\Translation;

/**
 * Class TranslationPolicy
 *
 * @package MayIFit\Core\Translation
 */
class TranslationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the can view any translations.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @return mixed
     */
    public function viewAny($model)
    {
        return true;
    }

    /**
     * Determine whether the can view the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function view($model, Translation $translation)
    {
        return true;
    }

    /**
     * Determine whether the can create translations.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @return mixed
     */
    public function create($model)
    {
        return $model->hasPermission('translation.create');
    }

    /**
     * Determine whether the can update the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function update($model, Translation $translation)
    {
        return $model->hasPermission('translation.update');
    }

    /**
     * Determine whether the can delete the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function delete($model, Translation $translation)
    {
        return $model->hasPermission('translation.delete');
    }

    /**
     * Determine whether the can restore the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function restore($model, Translation $translation)
    {
        return false;
    }

    /**
     * Determine whether the can permanently delete the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function forceDelete($model, Translation $translation)
    {
        return false;
    }
}
