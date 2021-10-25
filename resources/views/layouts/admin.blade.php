<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
   @include('includes.head')
</head>
<body>
       @include('includes.header')
       @include('includes.sidebar')
        @yield('content')
       @include('includes.footer')
</body>
</html>