<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Kaloka Bagstore</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend') }}/src/assets/images/logos/logotoko.png" />
    <link rel="stylesheet" href="{{ asset('backend') }}/src/assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('backend/layouts/sidebar')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('backend/layouts/header')
            <div class="container-fluid">
                <!--  Row 1 -->
                @yield('content')
                @include('backend/layouts/footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('backend') }}/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/src/assets/js/sidebarmenu.js"></script>
    <script src="{{ asset('backend') }}/src/assets/js/app.min.js"></script>
    <script src="{{ asset('backend') }}/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('backend') }}/src/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="{{ asset('backend') }}/src/assets/js/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        let table = new DataTable('#table');
    </script>
</body>

</html>
