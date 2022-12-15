<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    @yield('pageCss')
</head>

<body>
    <div class="contents">
        <div class="main">
            @yield('contents')
        </div>
    </div>
</body>
@yield('pageScript')

</html>
