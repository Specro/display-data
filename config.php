<?php

$config = [
    // map mime types to file reader classes
    'file_types' => [
        'application/json' => 'JSONReader',
        'application/xml' => 'XMLReader',
        'text/xml' => 'XMLReader',
        'application/csv' => 'CSVReader',
        'text/csv' => 'CSVReader'
    ],
    // base path for php view templates
    'base_template_path' => __DIR__.'/templates'
];