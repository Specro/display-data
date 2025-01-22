<?php
namespace DataDisplay\Readers;

use DataDisplay\Models\User;

/**
 * Read XML file and parse user data.
 */
class XMLReader extends FileReader
{
    public function read($path)
    {
        $users = [];
        $items = \simplexml_load_file($path);

        if ($items === false) {
            throw new \RuntimeException('Failed to load the file');
        }

        foreach ($items->item as $item) {
            $users[] = new User([
                'first_name' => $item->first_name,
                'age' => $item->age,
                'gender' => $item->gender
            ]);
        }

        return $users;
    }
}