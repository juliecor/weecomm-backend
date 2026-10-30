<?php

namespace Tests\Feature;

use App\Mail\InquiryMail;
use App\Models\Project;
use App\Models\Realty;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

/** The website's inquiry form: checked, emailed to the realty with the sender as reply-to, and only for a live realty. */
class InquiryTest extends TestCase
{
    use RefreshDatabase;

    public function test_an_inquiry_is_emailed_to_the_realty_with_the_sender_as_reply_to(): void
    {
        Mail::fake();
        $realty = Realty::create(['name' => 'Wee Community Developers, Inc.', 'slug' => 'weecomm', 'email' => 'inquiries@example.com', 'status' => Realty::STATUS_ACTIVE, 'registered_at' => now()]);
        Project::create(['realty_id' => $realty->id, 'name' => 'Baron Lvxe', 'slug' => 'baron-lvxe', 'status' => 'active', 'is_public' => true]);

        $this->postJson('/api/realties/weecomm/inquiries', ['name' => 'Rosa Cruz', 'email' => 'Rosa@Example.com', 'phone' => '0917 000 0000', 'topic' => 'baron-lvxe', 'message' => "How much is a 2-bedroom unit?\nThanks."])
            ->assertCreated()->assertJson(['ok' => true, 'sent' => true]);
        Mail::assertSent(InquiryMail::class, fn (InquiryMail $m) => $m->hasTo('inquiries@example.com') && $m->hasReplyTo('rosa@example.com') && $m->envelope()->subject === 'Website inquiry: Baron Lvxe — Rosa Cruz');

        // A topic that isn't a project is kept as typed; no topic is a general inquiry.
        $this->postJson('/api/realties/weecomm/inquiries', ['name' => 'Ben', 'email' => 'ben@example.com', 'topic' => 'Partnering as a broker or agent', 'message' => 'Hi'])->assertCreated();
        Mail::assertSent(InquiryMail::class, fn (InquiryMail $m) => $m->about === 'Partnering as a broker or agent');
        $this->postJson('/api/realties/weecomm/inquiries', ['name' => 'Ben', 'email' => 'ben@example.com', 'message' => 'Hi'])->assertCreated();
        Mail::assertSent(InquiryMail::class, fn (InquiryMail $m) => $m->about === 'General inquiry');
    }

    public function test_the_form_is_checked_and_only_a_live_realty_takes_inquiries(): void
    {
        Mail::fake();
        Realty::create(['name' => 'Wee Community Developers, Inc.', 'slug' => 'weecomm', 'email' => 'inquiries@example.com', 'status' => Realty::STATUS_ACTIVE, 'registered_at' => now()]);
        $this->postJson('/api/realties/weecomm/inquiries', ['name' => 'x'])->assertUnprocessable()->assertJsonValidationErrors(['email', 'message']);
        $this->postJson('/api/realties/weecomm/inquiries', ['name' => 'x', 'email' => 'not-an-email', 'message' => 'Hi'])->assertUnprocessable()->assertJsonValidationErrors(['email']);
        $this->postJson('/api/realties/nobody/inquiries', ['name' => 'x', 'email' => 'x@example.com', 'message' => 'Hi'])->assertNotFound();
        Mail::assertNothingSent();
    }
}
