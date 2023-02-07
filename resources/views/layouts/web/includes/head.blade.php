<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title', config('app.name'))</title>

<meta name="keywords" content="@yield('meta_keywords', config('app.name'))" />
<meta name="description" content="@yield('meta_description', config('app.name'))" />

<!-- styles -->
@stack('global-styles')
@stack('styles')