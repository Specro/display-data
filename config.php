<?php

$config = [
    'file_types' => [
        'application/json' => 'JSONReader',
        'application/xml' => 'XMLReader',
        'text/xml' => 'XMLReader',
        'application/csv' => 'CSVReader',
        'text/csv' => 'CSVReader'
    ],
    'base_template_path' => __DIR__.'/templates'
];