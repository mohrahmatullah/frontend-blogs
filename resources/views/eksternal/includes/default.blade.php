<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->    
        @include('eksternal.includes.essentialmeta')

        <!-- Import CSS -->
        @include('eksternal.includes.essentialcss')
        
    </head>
    <body>
        <!-- Header  -->
        @include('eksternal.includes.nav')
        <!--Sidebar-->
        @include('eksternal.includes.header')

        <!-- Content -->
        @yield('content')
        
        <!-- Footer -->
        @include('eksternal.includes.footer')

        <!-- Import JS -->
        @include('eksternal.includes.essentialjs')

    </body>
</html>


