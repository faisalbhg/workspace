<?php

namespace App\Policies;

use App\Models\BusinessHubs;
use App\Models\Customers;
use Illuminate\Auth\Access\Response;

class BusinessHubsPolicy
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
    public function view(Customers $customers, BusinessHubs $businessHubs): bool
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
    public function update(Customers $customers, BusinessHubs $businessHubs): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Customers $customers, BusinessHubs $businessHubs): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Customers $customers, BusinessHubs $businessHubs): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Customers $customers, BusinessHubs $businessHubs): bool
    {
        //
    }
}
