<html>
<head>
    <title>Задача 3</title>
    <meta charset="UTF-8">
</head>
<body>

<?php

$time = date('H', time());

if ($time >= 3 and $time < 11) {
    echo "Добрий ранок, світ!";
} else {
    echo "Привіт, світ!";
}
?>

</body>
</html>