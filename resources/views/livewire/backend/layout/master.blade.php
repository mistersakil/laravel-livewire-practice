<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin is super flexible">
    <meta name="keywords" content="admin template">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('backend') }}/assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon/favicon.png" type="image/x-icon">
    <title>{{ $pageTitle }} | Octapia Admin</title>
    {{-- @includeIf('livewire.backend.layout.styles') --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- @vite() --}}

</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        @includeIf('livewire.backend.layout.page-main-header')

        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            @includeIf('livewire.backend.layout.navbar')
            <!-- Page Sidebar Ends-->


            <div class="page-body">

                {{ $slot }}

            </div>

            <!-- footer start-->
            @includeIf('livewire.backend.layout.footer')
            <!-- footer end-->

        </div>

    </div>
    {{-- @includeIf('livewire.backend.layout.scripts') --}}

</body>


</html>
