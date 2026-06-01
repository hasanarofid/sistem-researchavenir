<?php

$csvDir = __DIR__ . '/public/csv-supabase';
$jsonDir = __DIR__ . '/database/legacy_data';

if (!is_dir($jsonDir)) {
    mkdir($jsonDir, 0755, true);
}

$files = scandir($csvDir);

foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'csv') {
        $csvFile = $csvDir . '/' . $file;
        $jsonFile = $jsonDir . '/' . str_replace('_rows.csv', '.json', $file);
        $jsonFile = str_replace('.csv', '.json', $jsonFile); // Fallback for other csv files
        
        $data = [];
        $header = null;
        
        if (($handle = fopen($csvFile, 'r')) !== false) {
            while (($row = fgetcsv($handle, 0, ',')) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    if (count($header) === count($row)) {
                        $data[] = array_combine($header, $row);
                    } else {
                        // Handle mismatch, e.g., missing columns at the end of the line
                        $temp = [];
                        foreach ($header as $i => $h) {
                            $temp[$h] = $row[$i] ?? null;
                        }
                        $data[] = $temp;
                    }
                }
            }
            fclose($handle);
        }
        
        file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        echo "Converted $file to " . basename($jsonFile) . "\n";
    }
}
