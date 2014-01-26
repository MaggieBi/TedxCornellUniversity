<?php
?>
<form action="php/applicationsubmit.php" method="GET">
    <h1>Speak at TEDxCornellUniversity!</h1>
    <p>First Name: <input type="text" name="firstname" required></p>
    <p>Last Name: <input type="text" name="lastname" required></p>
    <p>Email Address: <input type="email" name="email" required></p>
    <p>Topic of talk:
        <input type="text" name="topic" required></p>
    <p>Brief description of talk: <textarea rows="4" cols="10" name="description" required></textarea></p>
    <button type="submit" value="Submit">Submit</button>
    
</form>


