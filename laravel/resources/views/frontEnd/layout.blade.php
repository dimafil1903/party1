<!DOCTYPE html>
<html lang="uk">
<head>
    <style>.fables-transparent {background-color: #2C3E4F;}</style>
    @include('frontEnd.includes.head')

</head>
<body>

    <!-- start header -->
@include('frontEnd.includes.header')
<!-- end header -->

    <!-- Content Section -->

        @yield('content')

    <!-- end of Content Section -->

    <!-- start footer -->

<!-- end footer -->

@include('frontEnd.includes.foot')
@include('frontEnd.includes.footer')
</body>
</html>
