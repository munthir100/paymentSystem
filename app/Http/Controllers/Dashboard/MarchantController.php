<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Marchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMarchantRequest;
use App\Http\Requests\UpdateMarchantRequest;

class MarchantController extends Controller
{
    public function index()
    {
        $this->authorize('read Marchant');
        $marchants = Marchant::useFilters()->dynamicPaginate();

        return view('dashboard.marchants.index', compact('marchants'));
    }

    public function create()
    {
        $this->authorize('create Marchant');
        return view('dashboard.marchants.create');
    }

    public function store(CreateMarchantRequest $request)
    {
        $marchant = Marchant::create($request->validated());
        $marchant->addMediaFromRequest('commercial_registration_file')->toMediaCollection('commercial_registration_files');
        $marchant->addMediaFromRequest('tax_file')->toMediaCollection('tax_files');

        return to_route('dashboard.marchants.index')->with('success', __('created successfully'));
    }

    public function edit(Marchant $marchant)
    {
        $this->authorize('update Marchant');
        return view('dashboard.marchants.edit', compact('marchant'));
    }

    public function show(Marchant $marchant)
    {
        $this->authorize('read Marchant');
        return view('dashboard.marchants.show', compact('marchant'));
    }

    public function update(UpdateMarchantRequest $request, Marchant $marchant)
    {
        $marchant->update($request->validated());
        if ($request->hasFile('commercial_registration_file')) {
            $marchant->clearMediaCollection('commercial_registration_files');
            $marchant->addMediaFromRequest('commercial_registration_file')->toMediaCollection('commercial_registration_files');
        }
        if ($request->hasFile('tax_file')) {
            $marchant->clearMediaCollection('tax_files');
            $marchant->addMediaFromRequest('tax_file')->toMediaCollection('tax_files');
        }

        return to_route('dashboard.marchants.index')->with('success', 'updated successfully');
    }

    public function destroy(Marchant $marchant)
    {
        $this->authorize('delete Marchant');
        $marchant->delete();

        return to_route('dashboard.marchants.index')->with('success', __('deleted successfully'));
    }
}
