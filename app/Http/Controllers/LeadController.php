<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Mail\LeadConfirmation;
use App\Mail\LeadNotification;
use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class LeadController extends Controller
{
    public function index(): View
    {
        return view('landing.index');
    }

    public function store(StoreLeadRequest $request): RedirectResponse
    {
        $lead = Lead::create($request->validated());

        try {
            Mail::to($lead->email)->send(new LeadConfirmation($lead));
        } catch (\Exception $e) {
            Log::error('Error enviando confirmación al usuario: ' . $e->getMessage());
        }

        try {
            Mail::to(config('mail.admin_address'))->send(new LeadNotification($lead));
        } catch (\Exception $e) {
            Log::error('Error enviando notificación al admin: ' . $e->getMessage());
        }

        return redirect()
            ->route('home')
            ->with('success', __('landing.form_success'));
    }
}