<?php 

require('functions/content_text.php');

if(isset($_REQUEST['submit'])){

    $headEl = new Content_text();
    $head = $headEl->GetHeader();
    $pera = $headEl->GetPera();

    $name = $headEl->name;
    $email = $headEl->email;

}else{
    $head ="Submit Your Form";
    $pera = "Submit form for get php docs";

    $name = "Username";
    $email = "Useremail";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/main.css">
    <title>PHP OBJECT</title>
</head>
<body>
    <div class="content">

        <div>
            <h1 class="head"><?php echo $head; ?></h1>
            <p class="pera"><?php echo $pera; ?></p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

            <div>
                <span>
                    Email :    <?php echo $email ?>
                </span>
                <br>
                <input type="text" class="input" name="useremail">
            </div>
            <div>
                <span>
                   Name :    <?php echo $name ?>
                </span>
                <br>
                <input type="text" class="input" name="username">
            </div>
            <input type="submit" class="btn" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>