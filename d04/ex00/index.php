<?php
	session_start();
    if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] === "OK") {
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <style>
            body {background-color: #7B68EE;}
            .indexform{ width: 430px;}
    </style>
</head>
<body><center>
    <div class="indexform">
    <form name = "index.php" method = "GET" action = "index.php">
        <fieldset>
            <legend>ex00 </legend><br>
            Логин: <input type = "text" name = "login" value = "<?php echo $_SESSION['login']; ?>"><br><br>
            Пароль: <input type = "password" name = "passwd" value = "<?php echo $_SESSION['passwd']; ?>">
            <br><br><input type = "submit" name = "submit" value = "OK">
        </fieldset>
        </form>
    </div>
    </form></center>
</body>
</html>
