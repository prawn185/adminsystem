<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('tasks') }}">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('tasks/completed') }}">Completed Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Invoices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Other Stuff</a>
                </li>
            </ul>
            <div class="col-hidden-sm-down">
                <div class="header-time">
                    <div id="timediv"></div>
                </div>
            </div>
            <a href="{{route('logout')}}" id="logout">Log Out</a>
        </div>
    </nav>
</header>