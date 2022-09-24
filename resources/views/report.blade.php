<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="./app.css" rel="stylesheet">
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="navbar-brand btn btn-outline-success" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand btn btn-outline-success" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="navbar-brand btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact Us</button>
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
            </div>
        <ul class="navbar-nav sm-icons"> 
            <li><a class="nav-links" href="www.facebook.com">
                <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>
            <li><a class="nav-links" href="www.facebook.com">
                <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li><a class="nav-links" href="www.facebook.com">
                <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
        </ul>
        </nav>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/report.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </header>
    <main>
    <body class="container-fluid">

<form class="col sm-6">
    <div class="row-md-3">
        <label for="text" class="col-form-label">Victim's Full Name</label>
        <input type="text" class="form-control" id="text">
    </div><br>
    <div class="col g-12">
        <label for="place" class="form-label">Incident place</label>
        <input type="place" class="form-control" id="place" placeholder="">
    </div><br>
    <div class="col g-12">
        <label for="email" class="form-label">Email</nav></label>
        <input type="email" class="form-control" id="email" placeholder="">
    </div><br>
    <div class="col g-12">
        <label for="time" class="form-label">Time</label>
        <input type="time" class="form-control" id="time">
    </div><br>
    <div class="col g-12">
        <label for="date" class="form-label">Date</nav></label>
        <input type="date" class="form-control" id="date" placeholder="">
    </div><br>
    <div class="col g-12">
        <label for="inputState" class="form-label">Gender</label>
        <select id="inputState" class="form-select">
            <option>Choose Gender ...</option>
            <option>Male</option>
            <option>Female</option>
        </select>
    </div><br>
    <div class="mb-3">
        <label for="message" class="form-label">Your Report</label>
        <textarea class="form-control" id="message-text"></textarea>
    </div><br>
<div class="rol-md-3 text-black-800">
        <label for="formFileLg" class="form-label">Evidence</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file">
    </div>
<br><br>
<div class="text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div><br>
</form>
    </main>
<footer>
    <div class="text-left">
        <p><ul>All rights reserved | Copyright © 2014 - 2022 | Designed & Developed by :<a href="#">w3explorers</a></ul></p>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>