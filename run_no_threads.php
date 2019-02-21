<?php

require 'autoload.php';

// Init variables
$numberToGenerate = 10;
$numbers = [];
$start = microtime(true);

// Generate numbers
for ($i = 1; $i <= $numberToGenerate; $i++) {
    echo 'Generating number #' . $i . ' ...' . PHP_EOL;
    $numbers[] = Job::run();
}

// Output results
$runtime = microtime(true) - $start;
$avg = array_sum($numbers) / count($numbers);
echo str_repeat('-', 80) . PHP_EOL;
echo 'Random numbers: ' . implode(', ', $numbers) . PHP_EOL;
echo 'Average number: ' . number_format($avg, 2) . PHP_EOL;
echo 'Execution time: ' . number_format($runtime, 2) . PHP_EOL;