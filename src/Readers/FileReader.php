<?php
namespace DataDisplay\Readers;

/**
 * Abstract class for file readers.
 */
abstract class FileReader
{
    /**
     * Read file from provided path and return the data.
     * @param string $path
     * @return array
     */
    abstract public function read(string $path);
}