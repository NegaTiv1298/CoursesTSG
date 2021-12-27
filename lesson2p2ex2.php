<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Текст: <input type="text" name="text"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['text'])) {
    $text = $_POST['text'];
    $resultTest = preg_replace('"\b(https?://\S+)"', "<a href='$1'>$1</a>", $text);
    echo $resultTest;
} else {
    echo 'Заповніть форму';
}