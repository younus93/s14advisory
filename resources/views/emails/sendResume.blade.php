@component('mail::message')
# Dear S14Admin,

You have received a new careers entry.

### Name : {{ $data->name }}
### Email : {{ $data->email }}
### Phone : {{ $data->phone }}

@component('mail::button', ['url' => asset('/resumes/'.$file)])
    Resume
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
