<?php
    require_once(__DIR__ . "/../model/config.php");//the back slash references our webserver root
//we require files here
    ?> 
<nav>
    <ul>
        <li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li> <!--this creates a link in the webpage to post.php-->
    </ul>
</nav>