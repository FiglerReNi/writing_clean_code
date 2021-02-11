<?php
/**
 * @author Figler Renáta
 * @version v.1.0 (2021/02/11)
 * @copyright Copyright (c.) 2021, Figler Renáta
 */

include 'path.php';
include 'makedirs.php';

class DiskStorage
{

    /**
     * @var String
     */
    private string $directoryName;

    /**
     * DiskStorage constructor.
     * @param String $directoryName
     */
    public function __construct(string $directoryName)
    {
        $this->directoryName = $directoryName;
    }

    /**
     * @return String
     */
    public function getDirectoryName(): string
    {
        return $this->directoryName;
    }

    private function createDirectory(): void
    {
        if (!file_exists($this->directoryName)) {
            mkdir($this->directoryName);
        }
    }

    /**
     * @param string $fileName
     * @param string $content
     */
    public function insertFile(string $fileName, string $content)
    {
        $this->createDirectory();
        $filePath = $this->directoryName . $fileName;
        $file = fopen($filePath, "w");
        fwrite($file, $content);
        fclose($file);
        # Todo: Add proper error handling
    }
}

$logStorage = new DiskStorage('/logs/');
$logStorage->insertFile('text.txt', 'Test');


