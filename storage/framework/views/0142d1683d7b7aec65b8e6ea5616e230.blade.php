<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['name'])
<x-wire-icon :name="$name" {{ $attributes }}>

{{ $slot ?? "" }}
</x-wire-icon>