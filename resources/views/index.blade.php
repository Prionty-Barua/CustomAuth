<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <header>
         <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="navbar-brand btn btn-sm" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand btn btn-outline-success btn-sm me-2" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand btn btn-outline-success btn-sm me-2" href="report">Report</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="navbar-brand btn btn-outline-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact Us</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input type="text" class="form-control" id="recipient-name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Your concern:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 ">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators ">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner opacity-50">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="img/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="img/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="img/3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</header>
<main>
    <div class="text-center">
        <h2><strong>About Bangladesh Police</strong></h2>
            <p>The Bangladesh Police (Bengali: বাংলাদেশ পুলিশ) of the People's Republic of Bangladesh is a law
                enforcement agency, operating under the Ministry of Home Affairs. It plays a crucial role in maintaining
                peace, and enforcement of law and order within Bangladesh. Though the police are primarily concerned
                with the maintenance of law and order and security of persons and property of individuals, they also
                play a big role in the criminal justice system.Bangladesh police played an important role during the
                Bangladesh's liberation war.The Bangladesh Police (Bengali: বাংলাদেশ পুলিশ) of the People's Republic of
                Bangladesh is a law enforcement agency, operating under the Ministry of Home Affairs.It plays a crucial
                role in maintaining peace, and enforcement of law and order within Bangladesh. Though the police are
                primarily concerned with the maintenance of law and order and security of persons and property of
                individuals, they also play a big role in the criminal justice system.Bangladesh police played an
                important role during the Bangladesh's liberation war.
            </p>
        <h3><strong>History</strong></h3>
            <p>Details of policing activities during the middle age are challenging to find. However, during the periods of
            the great sultans, an official holding the position of Muhtasib used to perform the duties of policing. This
            person was the chief of police, in charge of public works, and the inspector of public ethics
            simultaneously.

            A Fouzdar was appointed to every administrative unit of the government (district), under whom there were
            some artillery and cavalry forces. There was a disciplined police system during the Mughal period, though
            there was no professional police force like that in the British period.</p>
    </div>
</main>
<footer>
    <div class="text-left">
        <p>
            <ul>
                All rights reserved | Copyright © 2014 - 2022 | Designed & Developed by :<a href="#">w3explorers</a>
            </ul>
        </p>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>