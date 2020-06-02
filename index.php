<!DOCTYPE html>
<html lang="en">
<head>
    <title>Robert Hampton Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        .carousel-item {
            overflow: hidden;
        }
    </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Robert A. Hampton</h1>
    <p>portfolio</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="dashboard/about.php">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard/experience.php">experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard/contact.php">contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4">
            <h2>About Me</h2>
            <h5>Photos of me:</h5>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/photo1.jpg" alt="photo1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/photo2.jpg" alt="photo2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/photo3.jpg" alt="photo3">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <p>my wife, my baby girl, and my brothers</p>
            <h3>more links</h3>
            <p>github/heroku/linkedin</p>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="https://github.com/robbzzilla">github</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://byu308.herokuapp.com/">heroku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/robertahampton/">linkedin</a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
            <h2>Software Engineer and Full Stack Developer</h2>
            <h5>student of Brigham Young University - Idaho</h5>
            <div class="container"><img src="/images/byui.jpg" alt="byui" class="img-fluid" width="600" height="345"></div>
            <p>as a student..</p>
            <p>I am currently pursuing a bachelor's degree in Software Engineering with a focus in Full Stack
                Development. I intend on graduating May 2023.</p>
            <br>
            <h2>Scholar of all Trades</h2>
            <h5>mechanic, student, father, son</h5>
            <div class="container"><img src="/images/multiple.png" alt="coding languages" class="img-fluid"width="600" height="345"></div>
            <p>seeker of knowledge</p>
            <p>In all things. Papa bless us with more papadia. We are who we choose to reveal.</p>
        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>thanks for visiting</p>
</div>

</body>
</html>