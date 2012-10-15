<?php
//assoc. array $_POST with an element name of 'name' retreives the info in the form
//isset tests whether $_POST['name'] has been assigned a value...else...
//"not entered" is assigned
if(isset($_POST['name'])) $name = $_POST['name'];
else $name ="(Not entered)";

echo <<<_END
<html>
    <head>
        <title>Form Test 2</title>
    </head>
    <body>
    Your name is $name <br>
    <form method="post" action="forms2.php">
        What is your name?
        <input type="text" name="name" />
        <input type="submit"/>
     </form>
     </body>
</html>
_END;




?>
