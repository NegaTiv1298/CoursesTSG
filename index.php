<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Кількість елементів піраміди: <input type="text" name="qty_elem">
    <input type="submit">
</form>
<?php
if (empty($_POST['qty_elem'])) {
    echo 'Заповніть поле форми';
} else {
    $qtyElem = $_POST['qty_elem'];
    if ($qtyElem > 15) {
        echo 'Неправильна висота піраміди ( від 1 до 15 )';
    } else {
        $elem = '##';
        for ($i = 1; $i <= $qtyElem; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $elem;
            }
            echo '<br>';
        }
    }
}
?>
</body>
</html>