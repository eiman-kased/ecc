<!doctype html>
<html lang="en-us">

<head>
    <link rel="stylesheet" href="css/eiman_kased.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet" />
    <meta charset="UTF-8" />
    <title>Full Stack Developer</title>
    <!-- <style>
        h2 {
            color: red;
        }
    </style>-->
</head>

<body>

    <div class="topnav">
        <a href="eiman.php">Home</a>
        <a href="hobbies.htm">Hobbies</a>
        <div class="dropdown">
            <button class="dropbtn">References
            </button>
            <div class="dropdown-content">
                <a href="https://www.w3schools.com/" target="_blank">W3schools</a>
                <a href="https://www.freecodecamp.org" target="_blank">FreeCodeCamp</a>
                <a href="https://www.codeacademy.com" target="_blank">Codecademy</a>
            </div>
        </div>
    </div>
    <div name="image" class="image">
        <!--image is linked to womenwhosidehustle newsletter-->

        <a href="https://www.womenwhosidehustle.com" target="_blank" class="image">
            <img src="https://bit.ly/39OWC6g" alt="Female Coder" width="400px">
        </a>

    </div>
    </div>

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

</body>

</html>