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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{ asset("vendor/lnch/laravel-admin/css/laravel-admin.core.css") }}" />
        @stack("head_scripts")
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        @stack("head_end")
    </head>
    <body id="{{ $laravelAdminBodyID }}" class="{{ $laravelAdminBodyClass }}">
        @stack("body_start")
        @yield("base_content")
        <script src="{{ asset("vendor/lnch/laravel-admin/js/laravel-admin.core.js") }}"></script>
        @stack("body_scripts")
        @stack("body_end")
    </body>
</html>
