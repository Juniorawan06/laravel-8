<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield('title') - JA_Solutions</title>
</head>
<body>
    <header class="jumbotron p-3 bg-secondary text-white text-center">
        <h1 class="display-4" style="font-family: 'Delinda Agatha';">JA_Solutions</h1>
        <h3 class="lead" style="font-family: 'Road Rage';">For all software solutions</h3>
    </header>
    <section class="p-3 ">
        @yield('mainarea')
    </section>
    <footer class="bg-dark text-center text-white p-3">
        Copyright &copy; 2022: <strong> JA_Solutions.com </strong>&nbsp;
        Developed by: <a href="mailto:haseebawan.1560@gmail.com" style="font-family: 'Love Signature'; text-decoration:none; color:#0083ca;">Junior Awan</a>
    </footer>
</body>
</html>