<!DOCTYPE html>
<html lang="en">
@include('frontend.common.header')
<body>
<main>
    <div id="loader-overlay" class="loader_overlay">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    @include('frontend.common.header_navigation')

    {{--Start Content--}}
    @yield('content')

    {{--Ends Content--}}

    <div id="copydiv" class="display-none"></div>
    @include('frontend.common.footer')
</main>
</body>
</html>