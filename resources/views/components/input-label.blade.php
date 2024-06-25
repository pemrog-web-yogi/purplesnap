@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label pt-2']) }}>
    {{ $value ?? $slot }}
</label>
