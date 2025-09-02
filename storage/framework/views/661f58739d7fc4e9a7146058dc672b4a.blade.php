<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['config'])
<x-wire-text-field :config="$config" {{ $attributes }}>
<x-slot name="append" >{{ $append }}</x-slot>
{{ $slot ?? "" }}
</x-wire-text-field>