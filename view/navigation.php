<?php
    require_once(__DIR__ . "/../model/config.php");//the back slash references our webserver root
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
    ?> 
<nav>
    <ul>
        <li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li> <!--this creates a link in the webpage to post.php-->
    </ul>
</nav>