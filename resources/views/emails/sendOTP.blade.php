@component('mail::message')
# Hi ,{{ $name }}

Thanks for visiting our website. Please use the below OTP to access our page
##{{ $otp }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
