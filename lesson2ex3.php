<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Прізвище: <input type="text" name="surname"><br>
    Ім'я: <input type="text" name="name"><br>
    По-батькові: <input type="text" name="patronymic"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['patronymic'])) {
    $name = mb_strtoupper(trim($_POST['name']));
    $surname = mb_strtoupper(trim($_POST['surname']));
    $patronymic = mb_strtoupper(trim($_POST['patronymic']));

    $firstLetterName = mb_substr($name, 0, 1);
    $firstLetterSurname = mb_substr($surname, 0, 1);
    $firstLetterPatronymic = mb_substr($patronymic, 0, 1);

    echo $firstLetterSurname.$firstLetterName.$firstLetterPatronymic;
} else {
    echo 'Заповніть форму';
}
?>
