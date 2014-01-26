<html>
    <link rel="stylesheet" type="text/css" href="../css/applicationsubmit.css" />
    <a href="../index.php">Click here to return to the website.<br></a>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require('wall_database.php');

// Strip Tags
$post_fields = array();
$firstname = strip_tags($_REQUEST['firstname']);
$lastname = strip_tags($_REQUEST['lastname']);
$email = strip_tags($_REQUEST['email']);
$interest = strip_tags($_REQUEST['interest']);
$extra = strip_tags($_REQUEST['extra']);
$suggestion = strip_tags($_REQUEST['suggestion']);


// Check is form is submitted
if(!empty($firstname) &&
       !empty($lastname) &&
       !empty($email) &&
       !empty($interest) &&
       !empty($extra) &&
       !empty($suggestion)) {
    if ((ctype_alpha($firstname)) &&
    (ctype_alpha($lastname))) {
        if ((strlen($interest)) < 3 ||
        (strlen($extra)) < 3 ||
        (strlen($suggestion)) < 3 ){
            echo "YOUR RESPONSE WAS NOT SUBMITTED: <br> Please make sure your response is longer than 3 characters.";
        }
        else {
            $post_fields['firstname'] = $firstname;
            $post_fields['lastname'] = $lastname;
            $post_fields['email'] = $email;
            $post_fields['interest'] = $interest;
            $post_fields['extra'] = $extra;
            $post_fields['suggestion'] = $suggestion;
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