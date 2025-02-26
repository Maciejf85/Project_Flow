@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'form-control__error mt-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
