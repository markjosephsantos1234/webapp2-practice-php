<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST - Contains information about variables passed through a form.
*/

if (isset($_GET['username'])) {
    echo '<h3>' . $_GET['username'] . '</h3>';
}

if (isset($_POST['submit'])) {
    // echo '<h3>' . $GET['username'] . '</h3>';
    echo '<h3>' . $_POST['name'] . '</h3>';
    // echo '<h3>' . $_POST['password'] . '</h3>';
} ?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Elmer">Link</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label>Password: </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>