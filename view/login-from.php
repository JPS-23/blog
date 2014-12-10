<?php
    require_once (__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
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