<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    Names: <input type="text" name="names">
    <input type="submit">
</form>
<?php
if(!empty($_POST['names'])) {
    $names = $_POST['names'];

    $arr = sortUk($names);
    foreach ($arr as $key => $elem) {
        echo $key.'<br>';
    }
} else {
    echo 'Заповніть поле';
}

function sortUk($post)
{
    $alphabet = [
        'А' => 1, 'Б' => 2, 'В' => 3, 'Г' => 4, 'Д' => 5, 'Е' => 6, 'Є' => 7, 'Ж' => 8, 'З' => 9, 'И' => 10, 'І' => 11,
        'Ї' => 12, 'Й' => 13, 'К' => 14, 'Л' => 15, 'М' => 16, 'Н' => 17, 'О' => 18, 'П' => 19, 'Р' => 20, 'С' => 21, 'Т' => 22,
        'У' => 23, 'Ф' => 24, 'Х' => 25, 'Ц' => 26, 'Ч' => 27, 'Ш' => 28, 'Щ' => 29, 'Ь' => 30, 'Ю' => 31, 'Я' => 32
    ];

    $arrNames = explode(',', trim($post));
    $arrResult = [];
    foreach ($arrNames as $key => $elem) {
        $first = mb_substr(mb_strtoupper(trim($elem)), 0, 1);
        foreach ($alphabet as $aKey => $aElem) {
            if($first == $aKey) {
                $arrResult[mb_convert_case($elem, MB_CASE_TITLE)] = $aElem;
            }
        }

    }
    asort($arrResult);
    return $arrResult;
}
?>
</body>
</html>
