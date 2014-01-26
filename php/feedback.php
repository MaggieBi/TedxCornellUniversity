<?php

?>
<form action="php/feedbacksubmit.php" method="GET">
    <h1>Feedback</h1>
    <p>First Name: <input type="text" name="firstname" required></p>
    <p>Last Name: <input type="text" name="lastname" required></p>
    <p>Email Address: <input type="email" name="email" required></p>
    <p>What are some ways we can improve this club?<textarea rows="4" cols="10" name="improve" required></textarea></p>
    <p>Which was your favorite TEDxCornellUniversity talk? Why?<textarea rows="4" cols="10" name="favorite" required></textarea></p>
    <p>Additional suggestions, comments, or questions: <textarea rows="4" cols="10" name="additional" required></textarea></p>
    <button type="submit" value="Submit">Submit</button>
    
</form>