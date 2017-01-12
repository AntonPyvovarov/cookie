<?php
include_once "flow.php";
include_once "function.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $color ?>">

<?php if(!isSetColor()){?>
<form action="" method="post">
    <select  name="action" value="setColor">
        <?php foreach ($arrColors as $value) {?>
            <option name="<?php $value ?>"><?php echo $value ?></option><?php
        } ?>
    </select>
        <input type="submit">
</form>
<?php }else echo "Ви вибрали колір $color"?>
    <footer>You've visited to this page <?php echo $visits ?> times</footer>
</body>
</html>