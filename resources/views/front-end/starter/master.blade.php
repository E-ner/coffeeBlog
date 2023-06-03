<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Coffee Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    @include('front-end.layout.styles')
</head>

<body>
@include('front-end.layout.header')
@yield('header')
@yield('content')
@include('front-end.layout.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
 @include('front-end.layout.scripts')
</body>

</html>