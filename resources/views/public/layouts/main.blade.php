<!doctype html>
<html lang="en">
@include('public.includes.head')

    <body>

        @include('public.includes.preload')
    
        <main>

            @include('public.includes.navbar')

              @yield('content')

            @include('public.includes.footer')
            @yield('team')
            <!-- JAVASCRIPT FILES -->
            @include('public.includes.footerJs')
        
        </main>    

    </body>
</html>
   