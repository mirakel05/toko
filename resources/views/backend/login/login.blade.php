<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin | Kaloka Bagstore</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend') }}/src/assets/images/logos/logotoko.png" />
    <link rel="stylesheet" href="{{ asset('backend') }}/src/assets/css/styles.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="/login" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('backend') }}/src/assets/images/logos/logokaloka.png"
                                        width="180" alt="">
                                </a>
                                <p class="text-center">Berganti Hari Berganti Gaya</p>
                                <form action="/login" method="post">
                                    @csrf
                                    {{-- @if (Session::has('status'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif --}}
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Username</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            aria-describedby="emailHelp" autofocus required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            required>
                                    </div>
                                    <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend') }}/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            text: '{{ session('success') }}'
        })
    </script>
@endif
</body>

</html>
