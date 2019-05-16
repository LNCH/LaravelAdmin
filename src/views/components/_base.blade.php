<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @stack("head_start")
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @stack("meta")
        <title>@yield("site_title", "Laravel Admin")</title>
        <link rel="stylesheet" href="{{ config("laravel-admin.bootstrap_url", "") }}" />
        @if(config("laravel-admin.use_boostrap_cdn", true))
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        @endif
        @if (config("laravel-admin.use_fontawesome", false))
            <link rel="stylesheet" href="{{ config("laravel-admin.fontawesome_url", "") }}" />
        @endif
        <link rel="stylesheet" href="{{ asset("vendor/lnch/laravel-admin/css/laravel-admin.core.css") }}" />
        @stack("head_scripts")
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        @stack("head_end")
    </head>
    <body id="{{ $laravelAdminBodyID }}" class="{{ $laravelAdminBodyClass }}">
        @stack("body_start")
        @yield("base_content")
        <script src="{{ asset("vendor/lnch/laravel-admin/js/laravel-admin.core.js") }}"></script>
        @if(config("laravel-admin.use_boostrap_cdn", true))
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @endif
        @stack("body_scripts")
        @stack("body_end")
    </body>
</html>
