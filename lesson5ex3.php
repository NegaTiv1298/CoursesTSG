<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <select name="function">
        <option value="1">Сума чисел</option>
        <option value="2">Середнє значення чисел</option>
        <option value="3">Кількість парних чисел</option>
        <option value="4">Не парні числа</option>
    </select><br>
    Числа: <input type="text" name="numbers">
    <input type="submit">
</form>
<?php
if (!empty($_POST['numbers']) and !empty($_POST['function'])) {
    $numbers = $_POST['numbers'];
    $function = $_POST['function'];
    $arrNumbers = explode(',', trim($numbers));

    if ($function != 4) {
        echo(math($arrNumbers, $function));
    } else {
        $responseFunction = math($arrNumbers, $function);
        foreach ($responseFunction as $value) {
            echo $value . '<br>';
        }
    }
} else {
    echo 'Заповніть поле';
}

function math($arr, $num)
{
    if ($num == 1) {
        $result = array_sum($arr);
    } elseif ($num == 2) {
        $result = (array_sum($arr) / count($arr));
    } elseif ($num == 3) {
        foreach ($arr as $elem) {
            if ($elem % 2 == 0) {
                $arrResult[] = $elem;
                $result = count($arrResult);
            }
        }
    } else {
        foreach ($arr as $elem) {
            if ($elem % 2 != 0) {
                $result[] = $elem;
            }
        }
    }
    return $result;
}

?>
</body>
</html>