<?php

namespace App\Policies;

use App\User;
use App\Contribution;
use Illuminate\Auth\Access\HandlesAuthorization;

class CnbPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the contribution.
     *
     * @param  \App\User  $user
     * @param  \App\Contribution  $contribution
     * @return mixed
     */
    public function view(User $user, Contribution $contribution)
    {
     return true;
    }

    /**
     * Determine whether the user can create contributions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
       return true;
    }

    /**
     * Determine whether the user can update the contribution.
     *
     * @param  \App\User  $user
     * @param  \App\Contribution  $contribution
     * @return mixed
     */
    public function update(User $user, Contribution $contribution)
    {
        return $user->id ===$Contribution->id_user;
    }

    /**
     * Determine whether the user can delete the contribution.
     *
     * @param  \App\User  $user
     * @param  \App\Contribution  $contribution
     * @return mixed
     */
    public function delete(User $user, Contribution $contribution)
    {
        return $user->id ===$Contribution->id_user;
    }
}
