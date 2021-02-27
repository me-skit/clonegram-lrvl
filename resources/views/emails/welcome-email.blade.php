@component('mail::message')
# Welcome to CloneGram

This is a community of fellow developers and we love that you have joined us.

The check e-mail button doesn't work.

@component('mail::button', ['url' => ''])
Check e-mail
@endcomponent

All the best,<br>
CloneGram team.
@endcomponent
