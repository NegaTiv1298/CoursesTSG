<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Email: <input type="text" name="email"><br>
    <input type="submit">
</form>
<?php
if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $searchSymbol = strpos($email, '@');
    $searchDot = strpos($email, '.', $searchSymbol);
    $searchEndDot = strpos($email, '.', -1);
    if ($searchSymbol === false or $searchDot === false or $searchEndDot !== false) {
        echo 'Email не коректний';
    } else {
        echo 'Email коректний';
    }
}
?>