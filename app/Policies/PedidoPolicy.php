<?php

namespace App\Policies;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Rol;

class PedidoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return in_array($user->rol_id, [    ROL::IS_ADMIN,
                                            ROL::IS_EDITOR]);
    }

    public function viewTimeStamps(User $user)
    {
        return in_array($user->rol_id, [    ROL::IS_ADMIN]);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Pedido $pedido)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array($user->rol_id, [    ROL::IS_ADMIN,
                                            ROL::IS_EDITOR]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return in_array($user->rol_id, [    ROL::IS_ADMIN,
                                            ROL::IS_EDITOR]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        return in_array($user->rol_id, [    ROL::IS_ADMIN,
                                            ROL::IS_EDITOR]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Pedido $pedido)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Pedido $pedido)
    {
        //
    }
}
