<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>share your pain</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<form action="" method="POST">

    <label>Name:
       <input type="text" name="Name" required /></label>
    <label>Comment:<br /> 
       <textarea name="Comment" required></textarea></label><br />
    <input type="submit" name="Submit" value="Submit" />   
</form>

</body>
</html>

<?php 
   if(isset($_POST["Submit"])) {
    print "<h2>Tanii chat ilgeegdlee!</h2>";

    $Name = $_POST["Name"];
    $Comment = $_POST["Comment"];

    // Old Comments
$Old = fopen("comments.txt","r+t");
$Old_Comments = fread($Old, 1024);
// Add New Comment
$Write = fopen("comments.txt", "w+");

$String =
    "<div class='comment'><span>".$Name."</span><br />
    <span>".date("Y/m/d")." | ".date("h:i A")."</span><br />
    <span>".$Comment."</span></div>\n".$Old_Commments;

    fwrite($Write, $String);
    fclose($Write);
    fclose($Old);
    
   } 
?>