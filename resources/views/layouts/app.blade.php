<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post || Temp </title>
    <meta content="Fahim Anzam Dip" name="author">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    @include('includes.main-css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="c-app">
    @include('layouts.sidebar')

    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            @include('layouts.header')
            <div class="c-subheader justify-content-between px-3">
                @yield('breadcrumb')
            </div>
        </header>

        <div class="c-body">
            <main class="c-main">
                <div class="container">
                    @yield('content')
                </div>
            </main>
        </div>

        @include('layouts.footer')
    </div>
    @yield('modal')
    @include('includes.main-js')
</body>

</html>
