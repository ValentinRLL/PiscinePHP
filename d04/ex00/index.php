<?php
session_start();
if ($_GET['login'] != NULL && $_GET['passwd'] != NULL && $_GET['submit'] == "OK") {
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}

?>
<html>
<head>
    <style>
        .loginform { text-align:center; }
        .submitbutton { margin-top: 15px; }
    </style>
</head>
<body>
<div class="loginform">
    <form method="get">
        <p>Identifiant:</p><input type="text" name="login" value="<?php echo $_SESSION['login'];?>"><br />
        <p>Mot de passe:</p><input type="password" name="passwd" value="<?php echo $_SESSION['passwd'];?>"><br />
        <input class="submitbutton" type="submit" name="submit" value="OK">
    </form>
</div>
</body>
</html>