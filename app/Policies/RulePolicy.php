<?php

namespace App\Policies;

use App\Rule;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RulePolicy
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
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function view(User $usera, Rule $rule, $perm=null)
    {
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
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function update(User $user, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function delete(User $user, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function restore(User $user, Rule $rule)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Rule  $rule
     * @return mixed
     */
    public function forceDelete(User $user, Rule $rule)
    {
        //
    }
}
