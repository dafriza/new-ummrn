<!DOCTYPE html>
<html lang="en">

@include('template.head')

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    @include('template.navbar')
    @yield('content')
    <!-- end of navbar -->
    @include('template.footer')
    <!-- end of copyright -->
    @include('sweetalert::alert')
    @include('template.script')
</body>

</html>
