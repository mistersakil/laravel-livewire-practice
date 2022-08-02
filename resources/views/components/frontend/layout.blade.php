<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite()



</head>

<body>
    <!-- As a link -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
    <i class="fa-solid fa-user"></i>
    <i class="fa-brands fa-github-square"></i>

    <h1>Circle <i data-feather="circle" class="text-danger"></i> </h1>

    {{ $slot }}

</body>

</html>
