
<form action="submit.php"method="post">
    <label for="name">Name <span>*</span></label>
    <input type="text" name="name" placeholder="Your name" required><br><br>
    <label for="email">Email <span>*</span></label>
    <input type="email" name="email" placeholder="Your email" required><br><br>
    <label for="pwd">Password:</label>
    <input type="password" id="pwd" name="pwd" minlength="8"><br><br>
    <label for="avatar">Choose a profile picture:</label>
    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
    <input type="submit" value="Submit">
</form>
<?php

?>
