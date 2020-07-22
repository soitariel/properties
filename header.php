<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Properties</title>

    <!-- Css Files  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:400,500,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/mobile.css">
</head>
<body>  

    <div class="mobile-overlay"></div>

    <!-- Mobile Menu  -->
    <section class="mobile-menu-div">
        <div class="close-btn">
            <img src="images/cancel.png" alt="close panel">
        </div>
        <div class="menu-itms">
            <ul class="list-unstyled m-0 p-0 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">find a property</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">blog</a>
                </li>
            </ul>
        </div>
    </section>

    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo-mobile-toggle-btn">
                        <a class="navbar-brand" href="#">
                            <span>LOGO</span>
                        </a>

                        <!-- Mobile toggle button  -->
                        <div class="mobile-toggle-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
                <div class="col offset-1">
                    <div class="my-account text-right">
                        <!-- <button class="btn bg-transparent dropdown-toggle position-relative p-0" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i><span>Username</span>
                            <span class="not-logged-in">Username</span>
                        </button> -->

    <div class="btn-group" role="group">
        <button id="dropdownId" type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i><span class="not-logged-in">Username</span>
        </button>
        <div class="dropdown-menu rounded-0" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">My Account</a>
            <a class="dropdown-item" href="#">Sign Out</a>
        </div>
    </div>
                        
                    </div>
                    <nav class="navbar navbar-expand-sm p-0">
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav text-uppercase w-100 justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">find a property</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">blog</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>