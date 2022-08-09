<?php

namespace App\Policies;

use App\Distributive;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DistributivePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Distributive  $distributive
     * @return mixed
     */
    public function view(User $usera, Period $period, $perm=null)
    {
        //dd($perm);
        if ($usera->havePermission($perm[0])){
            return true;
        }else
            if ($usera->havePermission($perm[1])){
                return true;
        }    
        else{
            return false;
        } 
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Distributive  $distributive
     * @return mixed
     */
    public function update(User $user, Distributive $distributive)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Distributive  $distributive
     * @return mixed
     */
    public function delete(User $user, Distributive $distributive)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Distributive  $distributive
     * @return mixed
     */
    public function restore(User $user, Distributive $distributive)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Distributive  $distributive
     * @return mixed
     */
    public function forceDelete(User $user, Distributive $distributive)
    {
        //
    }
}
