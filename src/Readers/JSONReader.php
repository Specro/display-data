<?php
namespace DataDisplay\Readers;

use DataDisplay\Models\User;

/**
 * Read JSON file and parse user data.
 */
class JSONReader extends FileReader
{
    public function read(string $path)
    {
        $users = [];
        $json = file_get_contents($path);

        if ($json === false) {
            throw new \RuntimeException('Failed to load the file');
        }

        $data = json_decode($json, true);

        if ($data === null) {
            throw new \RuntimeException('Failed to decode the file');
        }

        foreach ($data as $item) {
            $users[] = new User([
                'first_name' => $item['first_name'],
                'age' => $item['age'],
                'gender' => $item['gender']
            ]);
        }

        return $users;
    }
}