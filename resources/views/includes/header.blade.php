<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Admin</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tasks</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('tasks') }}">My Tasks</a>
                        <a class="dropdown-item" href="{{ url('tasks/completed') }}">Completed Tasks</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profiles</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('myprofile') }}">My Profile</a>
                        <a class="dropdown-item" href="{{ url('profiles') }}">All profiles</a>
                        <a class="dropdown-item" href="{{ url('profile/create') }}">Create New Profile</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Customers</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('customers') }}">View Customers</a>
                        <a class="dropdown-item" href="{{ url('customers/create') }}">Create Customer</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('reports') }}">Reports</a>
                </li>
            </ul>

                <div class="user-time">
                 {{ Auth::user()->time_left }}
                </div>

            <div class="col-hidden-sm-down">
                <div class="header-time">
                    <div id="timediv"></div>
                </div>
            </div>
            <a href="{{route('logout')}}" id="logout">Log Out</a>
        </div>
    </nav>
</header>