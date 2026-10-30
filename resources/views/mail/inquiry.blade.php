<x-branded-mail :brand="$brand" title="Website inquiry" ribbon="Website inquiry" :preheader="$inquiry['name'].' asked about '.$about.' on your website.'" :footnote="'You are receiving this because it was sent from the inquiry form on '.$brand['name'].'\'s website.'">
    <h1 class="heading" style="margin:0 0 20px;font-family:Georgia,'Times New Roman',serif;font-size:29px;line-height:36px;font-weight:700;color:#17150f;">{{ $inquiry['name'] }} asked about {{ $about }}</h1>

    <p style="margin:0 0 16px;">Someone filled in the inquiry form on your website. Reply to this email to write back to them.</p>

    <x-branded-mail.box :accent="$brand['accent']" title="Their message">
        <p style="margin:0;font-size:15px;line-height:24px;color:#17150f;white-space:pre-line;">{{ $inquiry['message'] }}</p>
    </x-branded-mail.box>

    <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;width:100%;margin:0 0 24px;">
        <tr>
            <td class="stack" style="padding:0 16px 6px 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Name</td>
            <td class="stack" style="padding:0 0 6px;font-size:15px;line-height:22px;color:#17150f;font-weight:600;">{{ $inquiry['name'] }}</td>
        </tr>
        <tr>
            <td class="stack" style="padding:0 16px 6px 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Email</td>
            <td class="stack" style="padding:0 0 6px;font-size:15px;line-height:22px;color:#17150f;word-break:break-all;"><a href="mailto:{{ $inquiry['email'] }}" style="color:{{ $brand['accent'] }};">{{ $inquiry['email'] }}</a></td>
        </tr>
        <tr>
            <td class="stack" style="padding:0 16px 6px 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">Mobile</td>
            <td class="stack" style="padding:0 0 6px;font-size:15px;line-height:22px;color:#17150f;">{{ $inquiry['phone'] ?? 'Not given' }}</td>
        </tr>
        <tr>
            <td class="stack" style="padding:0 16px 0 0;font-size:14px;line-height:22px;color:#6b665d;white-space:nowrap;" valign="top">About</td>
            <td class="stack" style="padding:0;font-size:15px;line-height:22px;color:#17150f;">{{ $about }}</td>
        </tr>
    </table>

    <x-branded-mail.button :url="'mailto:'.$inquiry['email'].'?subject='.rawurlencode('Re: '.$about)" :accent="$brand['accent']">Reply to {{ \Illuminate\Support\Str::of($inquiry['name'])->before(' ') }}</x-branded-mail.button>
</x-branded-mail>
