<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

@include('theme.partials.head')

<body>

    <!-- Start Header/Navigation -->
    @include('theme.partials.nav')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    @include('theme.partials.hero')
    <!-- End Hero Section -->

    <!-- Different Content -->
    @yield('content')

    <!-- Start Footer Section -->
   @include('theme.partials.footer')
    <!-- End Footer Section -->
    
   @include('theme.partials.script')

</body>

</html>
