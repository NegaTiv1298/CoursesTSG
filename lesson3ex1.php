<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <select name="fuel">
        <option value="diesel">Дизель</option>
        <option value="petrol">Бензин</option>
    </select><br>
    Об'єм двигуна: <input type="text" name="volume" placeholder="см.куб"><br>
    Рік випуску автомобіля: <input type="number" min="1970" max="2022" name="graduation"><br>
    Вартість автомобіля: <input type="text" name="price"><br>
    <input type="submit">
</form>
<?php
if (empty($_POST['fuel']) || empty($_POST['volume']) || empty($_POST['graduation']) || empty($_POST['price'])) {
    echo 'Всі поля обов\'язкові';
} else {
    $volume = $_POST['volume'];
    $graduation = $_POST['graduation'];
    $price = $_POST['price'];
    if ($volume < '500') {
        echo 'Не правильний об\'єм двигуна';
    } else {
        if ($_POST['fuel'] == 'diesel') {
            $baseRate = 75;
        } else {
            $baseRate = 50;
        }
        $currDate = date('Y', time());
        $diff = $currDate - $graduation - 1;
        $engineRatio = round($volume / 1000);

        if ($diff == 1) {
            $ageRatio = 1;
        } else {
            $ageRatio = $diff;
        }
        $customsClearance = $baseRate * $engineRatio * $ageRatio;
        $resultPriceCar = $price + $customsClearance;

        echo "Розмитнення автомобіля = $customsClearance євро" . "<br>";
        echo "Загальна вартість автомобіля = $resultPriceCar євро";
    }
}
?>
<body>
</html>