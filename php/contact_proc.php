<?php

if (isset($_POST['submit'])) {
    //this is just a dummy/sample data 
    $sampleEmail = "johndoe@gmail.com";
    $sampleMessage = "Bossing!!!";

    //Retrieving the data the are submitting in the form
    //sanitizing credentials essentials to mitigitate the threats

    $email = htmlspecialchars(trim($_POST['email'])); // Sanitize email. in php sanitizing function helps to convert html entities from intercepting
    $message = $_POST['message'];

    //checking the sample data
    if ($email === $sampleEmail || $message === $sampleMessage) {
        $recaptcha_secret = "YOUR_SECRET_KEY"; //recaptcha secret key
        $recaptcha_response = $_POST['g-recaptcha-response']; //this is the token from the form submission

        //checking if the recaptcha is being done
        if (!$recaptcha_response) {
            echo "<script>
                alert('please complet the recaptcha');
                window.location.href = '../pages/contact.php';
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
                window.location.href = '../pages/contact.php';
            </script>";
        }
        //else the system will display this to use the captcha 
        else {
            echo "<script>
                alert('reCAPTCHA verification failed. Please try again.');
                window.location.href = '../pages/contact.php';
            </script>";
        }
    } 
    //if the user inputted a invalid information 
    else {
        echo "<script>
        alert('Invalid Credentials');
        window.location.href = '../pages/contact.php';
    </script>";
    }

} 
//redirecting of a page
else {
    header("Location: ../pages/contact.php");
    exit();
}
