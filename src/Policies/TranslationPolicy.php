<?php

namespace MayIFit\Core\Translation\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use MayIFit\Core\Translation\Models\Translation;
use MayIFit\Core\Permission\Models\User;

class TranslationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any translations.
     *
     * @param  \MayIFit\Core\Permission\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the translation.
     *
     * @param  \MayIFit\Core\Permission\Models\User  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function view(User $user, Translation $translation)
    {
        return true;
    }

    /**
     * Determine whether the user can create translations.
     *
     * @param  \MayIFit\Core\Permission\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermission('admin.translation.view-create-screen');
    }

    /**
     * Determine whether the user can update the translation.
     *
     * @param  \MayIFit\Core\Permission\Models\User  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function update(User $user, Translation $translation)
    {
        return $user->hasPermission('admin.translation.view-edit-screen');

    }

    /**
     * Determine whether the user can delete the translation.
     *
     * @param  \MayIFit\Core\Permission\Models\User  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function delete(User $user, Translation $translation)
    {
        return $user->hasPermission('admin.translation.delete');

    }

    /**
     * Determine whether the user can restore the translation.
     *
     * @param  \MayIFit\Core\Permission\Models\User  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function restore(User $user, Translation $translation)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the translation.
     *
     * @param  \MayIFit\Core\Permission\Models\User  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function forceDelete(User $user, Translation $translation)
    {
        return false;
    }
}
