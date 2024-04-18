<?php

namespace App\Policies;

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GalleryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): Response
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Gallery $gallery): Response
    {
        return Response::allow();
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): Response
    {
        return $user->hasPermissionTo('create galleries')
            ? Response::allow()
            : Response::deny('You do not have permission to view galleries.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Gallery $gallery): Response
    {
        return $user->hasPermissionTo('update galleries') || $user->id === $gallery->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to update galleries.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Gallery $gallery): Response
    {
        return $user->hasPermissionTo('delete galleries') || $user->id === $gallery->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to delete galleries.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Gallery $gallery): Response
    {
        return $user->hasPermissionTo('restore galleries')
            ? Response::allow()
            : Response::deny('You do not have permission to restore galleries.');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Gallery $gallery): Response
    {
        return $user->hasPermissionTo('force delete galleries')
            ? Response::allow()
            : Response::deny('You do not have permission to permanently delete galleries.');
    }
}
