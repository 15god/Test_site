<?php
if (isset($_COOKIE['userKey'])) {
    require "functions.php";
    if (autoLogin()) {
        $_SESSION["id"] = session_id();
    }
}
?>
<meta charset="UTF-8" lang="ru">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA=Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">