<?php
    require_once (__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1><!--this indicates what the folder is for-->

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>"><!--the form code sends information-->
    <div>
        <label for="title">Title: </label><!--this is for the title-->
        <input type="text" name="title" /> <!--the input box is usually on one line-->
    </div>
    
    <div>
        <label for="post">Post: </label><!--this is just one small area to type in-->
        <textarea name="post"></textarea><!--you can resize this on the webpage-->    
    </div>
    
    <div>
        <button type="submit">Submit</button><!--this creates a submit button-->
    </div>
</form>