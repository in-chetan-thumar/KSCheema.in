<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front/images/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/images/favicon_io/favicon-32x32.png')}}/">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/images/favicon_io/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('front/images/favicon_io/site.webmanifest')}}">
    <!-- <title>@yield('title') | KS CHEEMA</title> -->
    {!! SEOMeta::generate() !!}
    @include('front.layouts.vendor-css')
    @yield('css')
</head>

<body>
@include('front.layouts.header')
@yield('content')
@include('front.layouts.footer')
@include('front.layouts.vendor-script')

</body>

</html>
