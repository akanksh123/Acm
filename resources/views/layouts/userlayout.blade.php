<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--animate.css-->
    <link rel="stylesheet" href="animate.css-master/animate.css-master/animate.css">
    <!--animate on scroll-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    @yield('linking')
   
    <!--font awesome icons-->
    <script src="https://use.fontawesome.com/7fa0c56c95.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body onload="myFunc()">
    <div id="loader">
    </div>
    <!--navbar-->
    <div>
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top  navbar-default" style="@yield('navbar')">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="https://s3.gifyu.com/images/logo4d35ef779e64f54a.gif"
                            width="30" height="30" class="d-inline-block align-top"></a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item @yield('navbar-active')">
                                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item @yield('navbar-team')">
                                <a class="nav-link" href="{{url('/team')}}">Team</a>
                            </li>
                            <li class="nav-item @yield('navbar-contact')">
                                <a class="nav-link" href="#footer">Contact</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle  @yield('navbar-dropdown')" href="#"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Events
                                </a>
                                <div class="dropdown-menu dropbox" aria-labelledby="navbarDropdownMenuLink">
                                    <div class="row">
                                        <div class="col">
                                        <a class="dropdown-item" href="{{url('/events')}}">Upcoming Events</a>
                                            <a class="dropdown-item" href="#">.</a>
                                            <a class="dropdown-item" href="#">.</a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item" href="{{url('/events')}}">Events Conducted</a>
                                            <a class="dropdown-item" href="#">.</a>
                                            <a class="dropdown-item" href="#">.</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        {{-- <span class="nav-item dropdown">
                            <a class="navbar-text dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="silver">
                                Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </span> --}}
                    </div>
                </div>
            </nav>
        </div>
    </div>
    @yield('content');


    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="/images/acm.png" style="height:100px;width : 100px">
                </div>

                <div class="col-sm-4 text-center">
                    <i class="fa fa-twitter pad text-white" aria-hidden="true"></i>
                    <i class="fa fa-instagram pad text-white" aria-hidden="true"></i>
                    <i class="fa fa-facebook pad text-white" aria-hidden="true"></i>
                </div>

                <div class="col-sm-4 text-center">
                    <p class="text-white"> <i class="fa fa-phone" aria-hidden="true"></i> +91 - 8258 - 281039<br>
                        Nitte, Karkala Taluk,<br>
                        Udupi - 574110<br>
                        Karnataka, India</p>
                </div>
            </div>

        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(window).scroll(function () {
                    $('nav').toggleClass('navbar-default', $(this).scrollTop() > 100);
                });
    </script>
    <script>
        $('.dropdown').hover(function () {
                    $('.dropdown-toggle', this).trigger('click');
                });
    </script>



    <script>
        var preloader = document.getElementById('loader');
                var myVar;
                function myFunc() {
                    myVar = setTimeout(showPage, 1000);
                }
                function showPage() {
                    preloader.style.opacity = 0;
                    preloader.style.display = "none";
                }
    </script>
</body>

</html>