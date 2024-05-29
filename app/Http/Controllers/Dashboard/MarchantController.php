<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Marchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarchantController extends Controller
{
    public function index()
    {
        $this->authorize('read Marchant');
        $marchants = Marchant::useFilters()->dynamicPaginate();

        return view('dashboard.marchants.index', compact('marchants'));
    }

    public function show(Marchant $marchant)
    {
        $this->authorize('read Marchant');
        return view('dashboard.marchants.show', compact('payment'));
    }

    public function destroy(Marchant $marchant)
    {
        $this->authorize('delete Marchant');
        $marchant->delete();

        return to_route('dashboard.marchants.index')->with('success', __('deleted successfully'));
    }
}
