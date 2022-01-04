<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Text: <input type="text" name="text"><br>
    <input type="submit">
</form>
<?php
$text = $_POST['text'];

echo wordwrap($text, 40, "<br />\n");
?>
</body>
</html>
