<?php

namespace MayIFit\Core\Translation\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use MayIFit\Core\Translation\Models\Translation;
use App\Models\User;

class TranslationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any translations.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the translation.
     *
     * @param  \App\Models\User  $user
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
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermission('translation.create');
    }

    /**
     * Determine whether the user can update the translation.
     *
     * @param  \App\Models\User  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function update(User $user, Translation $translation)
    {
        return $user->hasPermission('translation.update');

    }

    /**
     * Determine whether the user can delete the translation.
     *
     * @param  \App\Models\User  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function delete(User $user, Translation $translation)
    {
        return $user->hasPermission('translation.delete');

    }

    /**
     * Determine whether the user can restore the translation.
     *
     * @param  \App\Models\User  $user
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
     * @param  \App\Models\User  $user
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return mixed
     */
    public function forceDelete(User $user, Translation $translation)
    {
        return false;
    }
}
