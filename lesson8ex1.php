<?php

class File
{
    private $uploadDir = 'upload';
    private $backupDir = 'upload/backup';

    /**
     * Check directory
     * @param $dirName
     * @return bool
     */
    public function checkDir($dirName)
    {
        if (!is_dir("$this->uploadDir/$dirName")) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Create new directory in upload directory
     * @param $dirName
     * @return bool
     */
    public function createDir($dirName)
    {
        return mkdir("$this->uploadDir/$dirName");
    }

    /**
     * Move files older than 3 days to backup directory
     * @param $filename
     * @param $currDateResult
     * @return bool
     */
    public function moveFilesInBackupDir($filename, $currDateResult)
    {
        $fileTime = date('Y-m-d', filemtime("$this->uploadDir/$filename"));
        if ($fileTime <= $currDateResult) {
            return rename("$this->uploadDir/$filename", "$this->backupDir/$filename");
        }
    }

    /**
     * Delete files with the extension 'txt' if the file contains the word "тест"
     * @param $filename
     * @return bool
     */
    public function deleteFilesInUploadDir($filename)
    {
        $pos = strpos($filename, '.txt');
        if ($pos !== false) {
            $getContent = file_get_contents("./$this->uploadDir/$filename");
            $posContent = strpos($getContent, 'тест');
            if ($posContent !== false) {
                return unlink("$this->uploadDir/$filename");
            }
        }
    }

    /**
     * Create new file in upload directory
     * @param $filename
     * @param null $text
     * @return false|int
     */
    public function createFile($filename, $text = null)
    {
        return file_put_contents("$this->uploadDir/$filename", $text);
    }

    /**
     * ( Reverse words ) Example : "hello world => world hello"
     * @param $string
     * @return string
     */
    public function reverseWords($string)
    {
        $explode = explode(' ', $string);
        $reverse = array_reverse($explode);
        foreach ($reverse as $elem) {
            $reverseResult .= "$elem ";
        }
        return $reverseResult;
    }

    /**
     * @return false|string
     */
    public function scanFile($filename)
    {
        return file_get_contents("./$this->uploadDir/$filename");
    }

    /**
     * Scan upload directory
     * @return array|false
     */
    public function scanUploadDir()
    {
        return scandir($this->uploadDir);
    }
}