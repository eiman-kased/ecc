<!doctype html>
<html lang="en-us">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/eiman_kased.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <meta charset="UTF-8" />
    <title>Full Stack Developer</title>
</head>

<body>
    <nav class="navbar container-fluid sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Welcome</a>
            <button class="navbar-toggler btn btn-outline-secondary active" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="eiman.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hobbies.htm">Hobbies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="madlibs.php">Madlibs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">References</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://www.w3schools.com/" target="_blank">W3Schools</a></li>
                            <li> <a class="dropdown-item" href="https://www.freecodecamp.org" target="_blank">FreeCodeCamp</a></li>
                            <li> <a class="dropdown-item" href="https://www.codeacademy.com" target="_blank">Codeacademy</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/homeTech.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/techCollab.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/code.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr />
    <div name="intro">
        <!--This is my intro to about me-->
        <h1>About Me</h1>
        <p id="statement">I <strong>am</strong> going to be a developer!</p>
        <p id="me">My name is Eiman. I am originally from Illinois. Moved out to Buffalo about 9 years ago. As a
            stay-at-home
            mom of two, I needed
            something to do for myself while remaining, well, at home! Being a web developer offers that opportunity
            along with challenges that will keep things interesting.</p>
    </div>
    <div name="hope">
        <h2>What I Hope to Gain</h2>
        <ul id="skills">
            <li>Front-End and Back-End Programming Skills</li>
            <li>Skills in SEO</li>
            <li>Proficiency in a Back End language</li>
        </ul>
    </div>
    <div name="link">
        <h2>List of Web Dev Resources</h2>
        <!--links to resources-->
        <p>
            <ol id="reference">
                <li> <a id="ws" href="https://www.w3schools.com/" target=_blank">W3Schools</a>
                </li>
                <li> <a id="free" href="https://www.freecodecamp.org" target="_blank">FreeCodeCamp</a>
                </li>
                <li>
                    <a id="code" href="https://www.codeacademy.com" target="_blank">CodeAcademy</a>
                </li>
            </ol>
            <!--link to second page:hobbies-->
            <a href="hobbies.htm">My hobbies page.</a>
        </p>
    </div>

    <div name="comment">
        <form action="#">
            <input type="text" placeholder="Send a Message" required />
            <input type="submit" value="submit" />
        </form>
    </div>

    <form action="eiman.php" method="post" name="contact">
        First Name:<input type="text" name="first" placeholder="First Name" /> </br>
        Last Name:<input type"text" name="last" placeholder="Last Name" />
        Phone Number:<input type="tel" name="tel" placeholder="Phone Number" />
        <input type="submit" value="submit" />
    </form>
    </br>
    <?php
    $first = $_POST['first'];
    $last = $_POST['last'];
    $tel = $_POST['tel'];
    function sayHi($first, $last, $tel)
    {
        echo "Hello $first $last, your number is $tel";
    }
    sayHi($first, $last, $tel);
    ?>

    <form action="eiman.php" method="post">
        PHP:<input type="checkbox" name="resource[]" value="php" /> </br>
        CSS:<input type="checkbox" name="resource[]" value="css" /> </br>
        <input type="submit" value="submit" />
    </form>
    </br>
    <?php
    $php = $_POST['php'];
    $css = $_POST['css'];
    $resource = array("php" => "php.net", "css" => "w3schools.com");
    /*echo $resource[$_POST["resource"]];
    foreach ($_POST['resource'] as $key => $value) {
        echo "<li>" . $value . "</li>";}*/


    foreach ($resource as $key => $value) {
        echo "$value" . "<br>";
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>