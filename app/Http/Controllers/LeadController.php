<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LeadController extends Controller
{
    public function index(): View
    {
        return view('landing.index');
    }

    public function store(StoreLeadRequest $request): RedirectResponse
    {
        Lead::create($request->validated());

        return redirect()
            ->route('home')
            ->with('success', __('landing.form_success'));
    }
}