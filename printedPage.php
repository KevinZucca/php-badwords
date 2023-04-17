<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printed Page</title>
</head>
<body>
    <strong>Paragraph:</strong>
    <br>
    <p><?php echo $_POST["paragraph"]; ?></p>
    <strong>Length: <?php echo strlen($_POST["paragraph"]) ?> </strong>

    <hr>

    <strong>New Paragraph:</strong>
    <br>
    <?php 
       $newParagraph = str_replace($_POST["cutted-word"], "***", $_POST["paragraph"])
    ?>
    <p><?php echo $newParagraph; ?></p>
    <strong>Length: <?php echo strlen($newParagraph) ?> </strong>


</body>
</html>