@props(['field' => ''])

@php($errors = session('errors'))

@if ($errors && $errors->has($field))
    <p {{ $attributes->merge(['class' => 'mt-1 text-xs text-danger']) }}>{{ $errors->first($field) }}</p>
@endif
