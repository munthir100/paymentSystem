<?php

namespace App\Observers;

use App\Models\Marchant;

class MarchantObserver
{
    public function deleted(Marchant $marchant)
    {
        $marchant->clearMediaCollection();
    }
}
