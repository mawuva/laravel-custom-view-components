<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <x-customponents::partials.seo-tags title="{{ $title }}" description="{{ $description }}" section="{{ $section }}" />
        @yield('styles')
    </head>
    <body @yield('body_attributes')>