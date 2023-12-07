<?php
session_start();

// check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valid_username = "shauqi"; // replace with your username/email/id
    $valid_password = "abc123"; // replace with your password

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;

        // set remember me cookie 5 mins
        if (!empty($_POST['remember'])) {
            setcookie ("user_login",$_POST["username"],time() + (5 * 60));
        }

        header("Location: home.php");
        exit();
    } else {
        ?>
        <script>
            alert("Incorrect Username/Password!")
            window.location = "index.php";
        </script>
        <?php
    }
}