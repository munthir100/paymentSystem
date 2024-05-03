<?php

namespace App\Observers;

use App\Models\SubscriptionPlan;

class SubscriptionPlanObserver
{
    public function saving(SubscriptionPlan $subscriptionPlan)
    {
        $subscriptionPlan->prices = json_encode($subscriptionPlan->prices);
    }
}
