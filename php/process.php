<?php

if (isset($_POST['submit'])) {

    //this is just a dummy/sample data 
    $sampleUser = "JohnDoe123";
    $samplePass = "pogiako123";

    //Retrieving the data the are submitting in the form
    //sanitizing credentials essentials to mitigitate the threats
    $username = htmlspecialchars(trim($_POST['username'])); // Sanitize username. in php sanitizing function helps to convert html entities from intercepting
    $password = htmlspecialchars(trim($_POST['password'])); // Sanitize passord

    if ($username === $sampleUser && $password === $samplePass) {
        $recaptcha_secret = "YOUR_SECRET_KEY"; //recaptcha secret key
        $recaptcha_response = $_POST['g-recaptcha-response']; //this is the response from the form submission captcha key

        //checking if the recaptcha is being done
        if (!$recaptcha_response) {
            echo "<script>
                alert('please complet the recaptcha');
                window.location.href = '../pages/login.php';
            </script>";
        }

        //this response is to verify by sending a request into the google api
        $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $response_data = json_decode($verify_response);

        //if the response is success
        if ($response_data->success) {
            // reCAPTCHA validation successful it will display this
            echo "
            <script>
                alert('Login Successfully!');
                window.location.href = '../pages/login.php';
            </script>";
        }
        //else the system will display this to use the captcha 
        else {
            echo "<script>
                alert('reCAPTCHA verification failed. Please try again.');
                window.location.href = '../pages/login.php';
            </script>";
        }
    } 
    //Invalid inputted credentials
    else {
        echo "<script>
        alert('Invalid Credentials');
        window.location.href = '../pages/login.php';
    </script>";
    }
} 
//redirecting page
else {
    header("Location: ../pages/login.php");
    exit();
}
