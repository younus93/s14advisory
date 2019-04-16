@component('mail::message')
# Dear S14Admin,

You have received a message via contact form on the website www.s14advisory.com at {{ now()->toDayDateTimeString() }}.

### Name : {{ $data['name'] }}
### Email : {{ $data['email'] }}
### Phone : {{ $data['phone'] }}
### Subject : {{ $data['subject'] }}
### Message : {{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }} BOT
@endcomponent
