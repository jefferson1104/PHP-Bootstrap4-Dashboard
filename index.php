<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Dashboard</title>

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <nav
        class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top"
    >
        <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">FrontEndFunn</a>
        <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle p-0"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                <i class="material-icons icon">
                person
                </i>
                <span class="text">Account</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
        </ul>
        </div>
    </nav>
    <div class="wrapper d-flex">
        <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link px-2">
                <i class="material-icons icon">
                    dashboard
                </i>
                <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2">
                <i class="material-icons icon">
                    person
                </i>
                <span class="text">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2">
                <i class="material-icons icon"> insert_chart </i
                ><span class="text">Charts</span></a
                >
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2">
                <i class="material-icons icon">
                    settings
                </i>
                <span class="text">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2">
                <i class="material-icons icon">
                    pages
                </i>
                <span class="text">Pages</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2">
                <i class="material-icons icon">
                    computer
                </i>
                <span class="text">Demo</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 sideMenuToggler">
                <i class="material-icons icon expandView ">
                    view_list
                </i>
                <span class="text">Resize</span>
                </a>
            </li>
            </ul>
        </div>
        </div>
        <div class="content">
        
        <main>
            <div class="container-fluid">
            <div class="alert alert-success my-5">
                <strong class="d-flex justify-content-center text-center"> A like is always appreciated</strong>
            </div>
            <div class="row">
                <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                    <h4 class="mb-2">New Clients</h4>
                    <div class="progress" style="height: 16px;">
                    <div
                        class="progress-bar bg-warning text-mattBlackDark"
                        role="progressbar"
                        style="width: 25%;"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    >
                        25
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                    <h4 class="mb-2">New Projects</h4>
                    <div class="progress" style="height: 16px;">
                    <div
                        class="progress-bar bg-info text-mattBlackDark"
                        role="progressbar"
                        style="width: 50%;"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    >
                        50
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight p-3">
                    <h4 class="mb-2">Completed</h4>
                    <div class="progress" style="height: 16px;">
                    <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 80%;"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    >
                        80
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="bg-mattBlackLight my-2 p-3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                    in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                    sunt earum tempora veniam.
                </div>
                </div>
                <div class="col-md-6">
                <div class="bg-mattBlackLight my-2 p-3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                    in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                    sunt earum tempora veniam.
                </div>
                </div>
            </div>
            </div>
        </main>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <script src="js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        </body>
</html>