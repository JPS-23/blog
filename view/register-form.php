<?php
    require_once (__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>"><!-- this is to send information to the database -->
    <div>
        <label for="email">Email: </label><!-- this label is for the email's -->
        <input type="text" name="email" />
    </div>
    
    <div>
        <label for="username">Username: </label><!-- this label is for the usernames -->
        <input type="text" name="username" />
    </div>
    
    <div>
        <label for="password">Password: </label><!-- this label is for the passwords -->
        <input type="password" name="password" />
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

