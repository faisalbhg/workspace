<?php

namespace App\Policies;

use App\Models\Customers;
use App\Models\PinballRegistration;
use Illuminate\Auth\Access\Response;

class PinballRegistrationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Customers $customers): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Customers $customers, PinballRegistration $pinballRegistration): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Customers $customers): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Customers $customers, PinballRegistration $pinballRegistration): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Customers $customers, PinballRegistration $pinballRegistration): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Customers $customers, PinballRegistration $pinballRegistration): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Customers $customers, PinballRegistration $pinballRegistration): bool
    {
        //
    }
}
