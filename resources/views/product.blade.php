<!DOCTYPE html>
<html>

<head>
    <title>{{ __('messages.title') }}</title>
</head>

<body>
    <h1>{{ __('messages.title') }}</h1>
    <p>{{ __('messages.description') }}</p>

    <p><strong>{{ __('messages.price') }}</strong>: {{__('messages.currency')}}</p>

    <hr>
    <p>{{__('messages.language_choice')}}</p>
    <a href="{{ route('product', ['lang' => 'id']) }}">🇮🇩 Bahasa Indonesia</a> |
    <a href="{{ route('product', ['lang' => 'en']) }}">🇬🇧 English</a>
</body>

</html>
