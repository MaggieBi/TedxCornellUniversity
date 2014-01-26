<html>
    <link rel="stylesheet" type="text/css" href="../css/applicationsubmit.css" />
    <a href="../index.php">Click here to return to the website.<br></a>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require('wall_database.php');

$post_fields = array();
$email = strip_tags($_REQUEST['email']);

// Check is form is submitted
if(!empty($email)) {
    $email = strip_tags($_REQUEST['email']);
    $post_fields['email'] = $email;
    echo "Thank you for subscribing.<br>";
//Saves the array of current posts
$success_flag = saveCurrentPost($post_fields);

}
else {
    echo "Please provide us with a valid email.";
}


?>
    
</html>