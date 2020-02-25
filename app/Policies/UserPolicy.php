<?php

namespace App\Policies;

use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    public function before(Admin $admin, $ability){
        return $user->role_id == 1;
     }

    /**
     * Determine whether the user can view any admins.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function view(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        //
        return $admin->role_id == 1;
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function update(Admin $admin)
    {
        //
        return $admin->role_id == 1;
    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function delete(Admin $admin)
    {
        //
        return $admin->role_id == 1;
    }

    /**
     * Determine whether the user can restore the admin.
     *
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function restore(Admin $admin)
    {
        //
        return $admin->role_id == 1;
    }

    /**
     * Determine whether the user can permanently delete the admin.
     *
     * @param  \App\Models\Admin  $admin
     * @return mixed
     */
    public function forceDelete(Admin $admin)
    {
        //
        return $admin->role_id == 1;
    }
}
