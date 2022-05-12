@component('mail::message')
# Your post was likes

{{$liker->name}} likes one of your posts

@component('mail::button', ['url' => route('user.posts.show', $post)])
    View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
