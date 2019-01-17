<?php

namespace App\Policies;

use App\User;
use App\products;
use Illuminate\Auth\Access\HandlesAuthorization;

class productsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the products.
     *
     * @param  \App\User  $user
     * @param  \App\products  $products
     * @return mixed
     */
    public function view(User $user, products $products)
    {
        //
    }

    /**
     * Determine whether the user can create products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the products.
     *
     * @param  \App\User  $user
     * @param  \App\products  $products
     * @return mixed
     */
    public function update(User $user, products $products)
    {
        //
        return $products->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the products.
     *
     * @param  \App\User  $user
     * @param  \App\products  $products
     * @return mixed
     */
    public function delete(User $user, products $products)
    {
        //
    }

    /**
     * Determine whether the user can restore the products.
     *
     * @param  \App\User  $user
     * @param  \App\products  $products
     * @return mixed
     */
    public function restore(User $user, products $products)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the products.
     *
     * @param  \App\User  $user
     * @param  \App\products  $products
     * @return mixed
     */
    public function forceDelete(User $user, products $products)
    {
        //
    }
}
