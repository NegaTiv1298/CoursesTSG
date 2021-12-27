<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Числа: <input type="text" name="value" placeholder="5,8,12,18">
    <input type="submit">
</form>
<?php
if (empty($_POST['value'])) {
    echo 'Поле обов\'язкове';
} else {
    $arrValue = explode(',', $_POST['value']);
    foreach ($arrValue as $elem) {
        if ($elem < 1 or $elem > 100) {
            echo 'Неправильний діапазон чисел';
        } else {
            echo "<hr align='left' width='$elem%' size='12' color='red' />";
        }

    }
}
?>
</body>
</html>