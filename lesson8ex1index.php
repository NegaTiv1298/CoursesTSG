<?php
require_once 'lesson8ex1.php';

$fileObject = new File();
$uploadFiles = $fileObject->scanUploadDir();

// Ex 1 from 6 lessons

$checkDir = $fileObject->checkDir('backup');

if($checkDir === true) {
    $fileObject->createDir('backup');
} else {
    false;
}

$currDate = new DateTime('now');
$currDate->modify('-3 days');
$currDateResult = $currDate->format('Y-m-d');

foreach ($uploadFiles as $filename) {
    $fileObject->moveFilesInBackupDir($filename, $currDateResult);
}

// Ex 2 from 6 lessons

foreach ($uploadFiles as $filename) {
    $fileObject->deleteFilesInUploadDir($filename);
}

// Ex 3 from 6 lessons

$scanFile = $fileObject->scanFile('sourse.txt');
$fileObject->createFile('dest.txt', $fileObject->reverseWords($scanFile));