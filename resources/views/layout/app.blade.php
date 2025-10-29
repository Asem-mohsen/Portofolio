<!DOCTYPE html>
<html lang="en">

    @include('layout.header.head')

    <body class="index-page">

        @include('layout.header.header')

        <main class="main">

            @yield('content')

        </main>

        @include('layout.footer.footer')
        
    </body>
</html>