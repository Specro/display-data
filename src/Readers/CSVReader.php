<?php
namespace DataDisplay\Readers;

use DataDisplay\Models\User;

/**
 * Read CSV file and parse user data.
 */
class CSVReader extends FileReader
{
    public function read(string $path)
    {
        $users = [];
        $handle = fopen($path, 'r');

        if ($handle === false) {
            throw new \RuntimeException('Failed to load the file');
        }

        // read csv header before reading data
        $header = fgetcsv($handle, enclosure: '\'');
        $data = fgetcsv($handle, enclosure:'\'');
        while ($data !== false) {
            $users[] = new User([
                'first_name' => $data[0],
                'age' => $data[1],
                'gender' => $data[2]
            ]);
            $data = fgetcsv($handle, enclosure:'\'');
        }

        fclose($handle);
        return $users;
    }
}