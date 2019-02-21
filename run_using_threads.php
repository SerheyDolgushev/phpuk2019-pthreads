<?php

require 'autoload.php';

// Init variables
$numberToGenerate = 10;
$numbers = new ThreadsExample\Volatile();
$start = microtime(true);

// Init pool
$poolSize = isset($argv[1]) ? (int) $argv[1] : 10;
$pool = new ThreadsExample\Pool(
    $poolSize,
    ThreadsExample\Worker::class,
    [$numbers]
);

// Generate numbers
for ($i = 1; $i <= $numberToGenerate; $i++) {
    $thread = new ThreadsExample\Thread();
    $pool->submit($thread);
}
$pool->process();

// Convert Volatile to array
$numbers = (array) $numbers;

// Output results
$runtime = microtime(true) - $start;
$avg = array_sum($numbers) / count($numbers);
echo str_repeat('-', 80) . PHP_EOL;
echo 'Random numbers: ' . implode(', ', $numbers) . PHP_EOL;
echo 'Average number: ' . number_format($avg, 2) . PHP_EOL;
echo 'Execution time: ' . number_format($runtime, 2) . PHP_EOL;
