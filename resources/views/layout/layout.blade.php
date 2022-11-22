<!DOCTYPE html>
<html>
<head>
    <title>Student Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!--
<nav class="navbar" style="background-color: #e3f2fd;">
<nav class="navbar navbar-expand-lg bg-light">
<a class="navbar-brand" href="#">SV</a>

-->
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ route("homeApp") }}>
            <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            S.V.
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('studentFilter') }}>Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('coursesFilter') }}>Courses</a>
                </li>
            </ul>
            <span class="navbar-text">

      </span>
        </div>
    </div>
</nav>

<div class="container">



    @yield('content')
</div>

</body>
</html>
