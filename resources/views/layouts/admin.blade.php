<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        {{--  <!-- CSRF Token -->  --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Restaurant') }}</title>

        {{--  <!-- css -->  --}}
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{!! url('css/styles.css') !!}" rel="stylesheet">

        {{--  <!-- Fonts -->  --}}
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
        @include('sweetalert::alert')

        @include('admin.navbar')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('admin.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('main-section')
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{!! url('js/scripts.js') !!}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{!! url('js/datatables-simple-demo.js') !!}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{--  <script src="{!! url('js/bootstrap-wysihtml5.js') !!}"></script>  --}}

    </body>
</html>
