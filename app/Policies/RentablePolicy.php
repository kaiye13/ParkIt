<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Rentable;
use Illuminate\Auth\Access\HandlesAuthorization;

class RentablePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Rentable  $rentable
     * @return mixed
     */
    public function view(User $user, Rentable $rentable)
    {
        return $user->id === $rentable->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Rentable  $rentable
     * @return mixed
     */
    public function update(User $user, Rentable $rentable)
    {
        return $user->id === $rentable->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Rentable  $rentable
     * @return mixed
     */
    public function delete(User $user, Rentable $rentable)
    {
        return $user->id === $rentable->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Rentable  $rentable
     * @return mixed
     */
    public function restore(User $user, Rentable $rentable)
    {
        return $user->id === $rentable->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Rentable  $rentable
     * @return mixed
     */
    public function forceDelete(User $user, Rentable $rentable)
    {
        return false;
    }
}