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
<h2>Choose your theme color </h2>
<form action="" method="post">
    <input type="hidden" name="action" value="changeColor">
    <label for="color">Choose your color</label>
    <input type="text" name="color" id="color">
    <div style="clear:both"></div>
    <input type="submit">
</form>
<h2>Login form</h2>
<form action="" method="post" id="loginForm">
    <input type="hidden" name="action" value="login">
    <label for="login">Login</label>
    <input type="text" name="login" id="login">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="login">
</form>
<form action="" method="post">
    <select  name="action" value="setColor">
        <?php foreach ($arrColors as $value) {?>
            <option name="<?php $value ?>"><?php echo $value ?></option><?php
        } ?>
    </select>
        <input type="submit">
</form>
    <footer>You've visited to this page <?php echo $visits ?> times</footer>
</body>
</html>