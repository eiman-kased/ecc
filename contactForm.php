<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php

    $firstName = '';
    $lastName = '';
    $email = '';
    $message = '';

    if (isset($_POST['submit_btn'])) {
        if (!empty(trim($_POST['firstName']))) {
            $firstName = trim($_POST['firstName']);
        } else {
            echo '<span class="error">*First Name is Required</span> </br>';
        }

        if (!empty(trim($_POST['lastName']))) {
            $lastName = trim($_POST['lastName']);
        } else {
            echo '<span class="error">*Last Name is Required</span></br>';
        }

        if (!empty(trim($_POST['email']))) {
            $email = trim($_POST['email']);
        } else {
            echo '<span class="error">*Enter your Email</span><br/>';
        }

        if (!empty(trim($_POST['message']))) {
            $message = trim($_POST['message']);
        } else {
            echo '<span class="error">*Enter your Message</span><br/>';
        }
    }

    ?>

    <form action="contactForm.php" method="post" id="contact">

        <div class="name">

            First Name:*<input type="text" name="firstName" id="firstName" <?= (isset($_POST['firstName']) ? 'value="' . $_POST['firstName'] . '"' : '') ?> required />

            Middle Initial:<input type="text" name="middleName" id="middleName" <?= (isset($_POST['middleName']) ? 'value="' . $_POST['middleName'] . '"' : '') ?> />

            Last Name:*<input type="text" name="lastName" id="lastName" <?= (isset($_POST['lastName']) ? 'value="' . $_POST['lastName'] . '"' : '') ?> required />
        </div> <br />

        <div class="phone">
            <label for="phone">Phone Number*</br>Format:123-456-7890</label>
            <input type="tel" id="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" <?= (isset($_POST['tel']) ? 'value="' . $_POST['tel'] . '"' : '') ?> />

        </div><br />

        <div class="email">
            Enter an Email<input type="email" id="email" name="email" placeholder="email@example.com" <?= (isset($_POST['email']) ? 'value="' . $_POST['email'] . '"' : '') ?> required />

        </div><br />

        <div class="message">
            <label for="message">Please Leave a Message Here</label></br>
            <textarea id="message" name="message" rows="5" cols="50" required><?= (isset($_POST['message']) ? $_POST['messge'] . $message : '') ?></textarea>
        </div><br />

        <div class="submit">
            <input type="submit" name="submit_btn" value="Submit" />
        </div>
    </form>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>