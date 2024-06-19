<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Student Management System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .sidebar {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            min-height: 100vh;
        }

        .sidebar a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .sidebar a:hover {
            color: #fff;
        }

        .sidebar .btn-custom.active {
            color: #000;
            background-color: #fff;
            border-radius: 5px;
        }

        .navbar {
            background-color: #343a40;
            color: #fff;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .btn-custom {
            background-color: transparent;
            border: none;
            color: #fff;
            padding: 0.5rem 1rem;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            width: 100%;
        }

        .btn-custom.active {
            background-color: #fff;
            color: #000;
        }

        .content {
            margin-top: 20px; /* Menambahkan margin atas pada konten */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand">
                            <i class="bi bi-book me-2"></i>
                            Student Management
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-2">
                <div class="sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link btn-custom {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">
                                <i class="bi bi-house me-2"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-custom {{ Request::is('students*') ? 'active' : '' }}" href="{{ url('/students') }}">
                                <i class="bi bi-people me-2"></i>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-custom {{ Request::is('teachers*') ? 'active' : '' }}" href="{{ url('/teachers') }}">
                                <i class="bi bi-person-workspace me-2"></i>
                                Teachers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-custom {{ Request::is('courses*') ? 'active' : '' }}" href="{{ url('/courses') }}">
                                <i class="bi bi-book me-2"></i>
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-custom {{ Request::is('batches*') ? 'active' : '' }}" href="{{ url('/batches') }}">
                                <i class="bi bi-calendar-week me-2"></i>
                                Batches
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-custom {{ Request::is('enrollments*') ? 'active' : '' }}" href="{{ url('/enrollments') }}">
                                <i class="bi bi-clipboard-data me-2"></i>
                                Enrollments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-custom {{ Request::is('payments*') ? 'active' : '' }}" href="{{ url('/payments') }}">
                                <i class="bi bi-cash me-2"></i>
                                Payments
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-lg-10">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>