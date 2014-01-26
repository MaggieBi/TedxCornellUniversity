<html>
    <link rel="stylesheet" type="text/css" href="../css/applicationsubmit.css" />
    <a href="../index.php">Click here to return to the website.<br></a>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require('wall_database.php');

// Strip tags
$post_fields = array();
$firstname = strip_tags($_REQUEST['firstname']);
$lastname = strip_tags($_REQUEST['lastname']);
$email = strip_tags($_REQUEST['email']);
$improve = strip_tags($_REQUEST['improve']);
$favorite = strip_tags($_REQUEST['favorite']);
$additional = strip_tags($_REQUEST['additional']);


// Check is form is submitted
if(!empty($firstname) &&
       !empty($lastname) &&
       !empty($email) &&
       !empty($improve) &&
       !empty($favorite) &&
       !empty($additional)) {
    if ((ctype_alpha($firstname)) &&
    (ctype_alpha($lastname))) {
        if ((strlen($improve)) < 3 ||
        (strlen($favorite)) < 3 ||
        (strlen($additional)) < 3 ){
            echo "YOUR RESPONSE WAS NOT SUBMITTED: <br> Please make sure your response is longer than 3 characters.";
        }
        else {
            $post_fields['firstname'] = $firstname;
            $post_fields['lastname'] = $lastname;
            $post_fields['email'] = $email;
            $post_fields['improve'] = $improve;
            $post_fields['favorite'] = $favorite;
            $post_fields['additional'] = $additional;
                    echo "Thank you for your submission.<br>";
            //Saves the array of current posts
            $success_flag = saveCurrentPost($post_fields);
        }
    }
    else {
        echo "YOUR RESPONSE WAS NOT SUBMITTED: <br> Please resubmit your form with valid information.";
    }
}
else {
    echo "YOUR RESPONSE WAS NOT SUBMITTED: <br> Please resubmit your form with all fields completed.";
}

?>
    
</html>