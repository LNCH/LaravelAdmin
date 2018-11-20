<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @stack("head_start")
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack("meta")
        <title>@yield("site_title", "Laravel Admin")</title>
        @stack("head_scripts")
        @stack("head_end")
    </head>
    <body id="{{ $laravelAdminBodyID }}" class="{{ $laravelAdminBodyClass }}">
        @stack("body_start")
        @yield("base_content")
        @stack("body_scripts")
        @stack("body_end")
    </body>
</html>
