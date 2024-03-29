<!doctype html>
<html lang="en">

<head>
    <title>about page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1 class="text-uppercase text-center mt-4">about</h1>
        <nav class="nav justify-content-center  ">
            <a class="nav-link active" href="/" aria-current="page">Home</a>
            <a class="nav-link" href="{{route('about')}}">About</a>
            <a class="nav-link" href="{{route('contact')}}">Contacts</a>
        </nav>
    </header>
    <main>
        <ul>
            <li>
                user name: {{$user}}
            </li>
            <li>user age: {{$age}}</li>
            <li>user email: {{$email}}</li>
            <li>user gender: {{$gender}}</li>
        </ul>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>