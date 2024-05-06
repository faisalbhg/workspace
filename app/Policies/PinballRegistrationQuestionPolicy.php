<?php

namespace App\Policies;

use App\Models\Customers;
use App\Models\PinballRegistrationQuestion;
use Illuminate\Auth\Access\Response;

class PinballRegistrationQuestionPolicy
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
    public function view(Customers $customers, PinballRegistrationQuestion $pinballRegistrationQuestion): bool
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
    public function update(Customers $customers, PinballRegistrationQuestion $pinballRegistrationQuestion): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Customers $customers, PinballRegistrationQuestion $pinballRegistrationQuestion): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Customers $customers, PinballRegistrationQuestion $pinballRegistrationQuestion): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Customers $customers, PinballRegistrationQuestion $pinballRegistrationQuestion): bool
    {
        //
    }
}
