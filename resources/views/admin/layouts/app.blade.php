<!doctype html>
<html lang="en">



@include('admin.layouts.head')

<body>
    <!--wrapper-->
    <div class="wrapper">

        <!--sidebar wrapper -->
        @include('admin.layouts.sidebar')
        <!--end sidebar wrapper -->

        <!--start header -->
        @include('admin.layouts.header')
        <!--end header -->

        <!--start page wrapper -->
        <div class="page-wrapper">

            

            {{ $slot }}

        </div>
        <!--end page wrapper -->

        @include('admin.layouts.footer')

    </div>
    <!--end wrapper-->



    @include('admin.layouts.scripts')

</body>

</html>
