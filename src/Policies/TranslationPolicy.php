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
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $authModel
     * @return mixed
     */
    public function viewAny($authModel)
    {
        return true;
    }

    /**
     * Determine whether the can view the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $authModel
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function view($authModel, Translation $translation)
    {
        return true;
    }

    /**
     * Determine whether the can create translations.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $authModel
     * @return mixed
     */
    public function create($authModel)
    {
        return $authModel->hasPermission('translation.create');
    }

    /**
     * Determine whether the can update the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $authModel
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function update($authModel, Translation $translation)
    {
        return $authModel->hasPermission('translation.update');
    }

    /**
     * Determine whether the can delete the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $authModel
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function delete($authModel, Translation $translation)
    {
        return $authModel->hasPermission('translation.delete');
    }

    /**
     * Determine whether the can restore the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $authModel
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function restore($authModel, Translation $translation)
    {
        return false;
    }

    /**
     * Determine whether the can permanently delete the translation.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $authModel
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function forceDelete($authModel, Translation $translation)
    {
        return false;
    }
}
