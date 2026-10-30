<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use App\Models\Project;
use App\Models\Realty;
use App\Support\QuietMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * The inquiry form on the realty's website (its landing page): checked here and emailed to the
 * realty's inbox, with the sender as reply-to. Nothing is stored: the email is the record, and the
 * inquiry is logged in full so one is never lost when the mail server is down.
 */
class InquiryController extends Controller
{
    public function store(Request $request, string $slug): JsonResponse
    {
        $realty = Realty::where('slug', $slug)->where('status', Realty::STATUS_ACTIVE)->firstOrFail();
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:40'],
            'topic' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:2000'],
        ]);
        // The topic is a project's slug from the form's list, or free text ("Partnering as a broker").
        $project = ! empty($data['topic']) ? Project::where('realty_id', $realty->id)->where('slug', $data['topic'])->first() : null;
        $about = $project?->name ?? (! empty($data['topic']) ? $data['topic'] : 'General inquiry');
        $inquiry = ['name' => trim($data['name']), 'email' => strtolower(trim($data['email'])), 'phone' => isset($data['phone']) ? trim($data['phone']) : null, 'message' => trim($data['message'])];

        Log::info('Website inquiry', ['realty' => $realty->slug, 'about' => $about] + $inquiry);
        $sent = $realty->email ? QuietMail::send($realty->email, new InquiryMail($realty, $inquiry, $about), "inquiry {$realty->slug}") : false;
        if (! $realty->email) {
            Log::warning('Website inquiry with nowhere to go: the realty has no email', ['realty' => $realty->slug]);
        }

        return response()->json(['ok' => true, 'sent' => $sent], 201);
    }
}
