<?php 
$lorem ='Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis sint, asperiores tempora sapiente consequuntur inventore dolorem eligendi voluptate fugit iure harum temporibus rem tenetur impedit explicabo. Ut commodi excepturi incidunt?';
$lenString = strlen($lorem);
$strUser = $_GET['str'];
$modifier = str_replace("$strUser", "***", $lorem);
$lenModifier = strlen($modifier);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $modifier ?> </h1>
    <p><?php echo $lenModifier; ?></p>
</body>
</html>