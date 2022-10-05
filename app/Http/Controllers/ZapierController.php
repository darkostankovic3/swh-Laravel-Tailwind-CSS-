<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZapierController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'step' => ['required', 'numeric', 'min:1'],
            'full_name' => ['nullable', 'required_if:step,1'],
            'email' => ['nullable', 'required_if:step,1'],
            'mobile' => ['nullable', 'required_if:step,1'],
            'violations' => ['nullable', 'required_if:step,1'],

            'annual_compensation' => ['nullable'],
            'workplace_hostile' => ['nullable'],
            'workplace_discriminated' => ['nullable'],
            'first_name' => ['nullable'],
            'last_name' => ['nullable'],
            'email' => ['nullable'],
            'mobile' => ['nullable'],

            'workplace_remarks' => ['nullable'],
            'described_as' => ['nullable'],
            'gender' => ['nullable'],
            'age' => ['nullable'],
            'race' => ['nullable'],
            'company_name' => ['nullable'],
            'price' => ['nullable'],

            'medical_conditions' => ['nullable'],
            'employee_total' => ['nullable'],
            'specific_memo' => ['nullable'],

            'preferred_method' => ['nullable'],
        ]);

        if (session()->has('utm_source')) {
            $data['utm_source'] = $request->utm_source;
        }

        if (session()->has('utm_campaign')) {
            $data['utm_campaign'] = $request->utm_campaign;
        }

        if (session()->has('utm_content')) {
            $data['utm_content'] = $request->utm_content;
        }

        if (session()->has('utm_medium')) {
            $data['utm_medium'] = $request->utm_medium;
        }

        if (session()->has('gclid')) {
            $data['gclid'] = $request->gclid;
        }

        $lead = session()->has('lead') ? session('lead') : Lead::create($data);

        $lead->update($data);
        $lead->refresh();
        session(['lead' => $lead]);

        if ($data['step'] === 1) {
            return Http::post('https://hooks.zapier.com/hooks/catch/6831382/b19qs19', [
                'step' => $data['step'],
                'session_id' => $lead->id,
                'name' => $lead->full_name,
                'email' => $lead->email,
                'mobile' => $lead->mobile,
                'violations' => $lead->violations,
                'utm_source' => $lead->utm_source,
                'utm_campaign' => $lead->utm_campaign,
                'utm_content' => $lead->utm_content,
                'utm_medium' => $lead->utm_medium,
                'gclid' => $lead->gclid,
            ]);
        }

        if ($data['step'] === 2) {
            return Http::post('https://hooks.zapier.com/hooks/catch/6831382/b19qs19', [
                'step' => $data['step'],
                'session_id' => $lead->id,
                'annual_compensation' => $lead->annual_compensation,
                'workplace_hostile' => $lead->workplace_hostile,
                'workplace_discriminated' => $lead->workplace_discriminated,
                'first_name' => $lead->first_name,
                'last_name' => $lead->last_name,
                'email' => $lead->email,
                'mobile' => $lead->mobile,
                'utm_source' => $lead->utm_source,
                'utm_campaign' => $lead->utm_campaign,
                'utm_content' => $lead->utm_content,
                'utm_medium' => $lead->utm_medium,
                'gclid' => $lead->gclid,
            ]);
        }

        if ($data['step'] === 3) {
            return Http::post('https://hooks.zapier.com/hooks/catch/6831382/b19qs19', [
                'step' => $data['step'],
                'session_id' => $lead->id,
                'workplace_remarks' => $lead->workplace_remarks,
                'described_as' => $lead->described_as,
                'gender' => $lead->gender,
                'age' => $lead->age,
                'race' => $lead->race,
                'company_name' => $lead->company_name,
                'price' => $lead->price,
                'name' => $lead->full_name,
                'email' => $lead->email,
                'mobile' => $lead->mobile,
            ]);
        }

        if ($data['step'] === 4) {
            return Http::post('https://hooks.zapier.com/hooks/catch/6831382/b19qs19', [
                'step' => $data['step'],
                'session_id' => $lead->id,
                'medical_conditions' => $lead->medical_conditions,
                'employee_total' => $lead->employee_total,
                'specific_memo' => $lead->specific_memo,
                'name' => $lead->full_name,
                'email' => $lead->email,
                'mobile' => $lead->mobile,
            ]);
        }

        if ($data['step'] === 5) {
            return Http::post('https://hooks.zapier.com/hooks/catch/6831382/b19qs19', [
                'step' => $data['step'],
                'session_id' => $lead->id,
                'preferred_method' => $lead->preferred_method,
                'name' => $lead->full_name,
                'email' => $lead->email,
                'mobile' => $lead->mobile,
            ]);
        }

        return response()->json([
            'data' => $data,
        ]);
    }
}
