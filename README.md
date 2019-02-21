# [PHP UK Conference 2019](https://www.phpconference.co.uk/) pthreads example

To demonstrate [pthreads](http://php.net/manual/en/book.pthreads.php) in action we will use simple example task: Generate 10 random numbers and get their average.

## Requirements:
- PHP with ZTS
    ```bash
    $ php -v
    PHP 7.2.5 (cli) (built: Feb  6 2019 09:11:29) ( ZTS )
    Copyright (c) 1997-2018 The PHP Group
    Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    ```
- [pthreads](http://php.net/manual/en/book.pthreads.php) PHP extension:
    ```bash
    php -m | grep --color -E "pthreads"
    pthreads
    ```
## Classes we are going to use:

- [Thread](http://php.net/manual/en/class.thread.php) When the start method of a Thread is invoked, the run method code will be executed in separate Thread, in parallel.
- [Worker](http://php.net/manual/en/class.worker.php) Worker Threads have a persistent context, as such should be used over Threads in most cases. 
- [Pool](http://php.net/manual/en/class.pool.php) A Pool is a container for, and controller of, an adjustable number of Workers.
- [Volatile](http://php.net/manual/en/class.volatile.php) is used to store PHP arrays in Threaded contexts.

## Examples:
- No threads:
    ```bash
    php run_no_threads.php 
    Generating number #1 ...
    Generating number #2 ...
    ...
    Generating number #10 ...
    --------------------------------------------------------------------------------
    Random numbers: 90, 71, 34, 9, 72, 51, 70, 75, 73, 27
    Average number: 57.20
    Execution time: 10.03
    ```
- Using [pthreads](http://php.net/manual/en/book.pthreads.php):
    ```bash
    php run_using_threads.php 5
    --------------------------------------------------------------------------------
    Random numbers: 69, 91, 52, 7, 98, 56, 59, 5, 47, 47
    Average number: 53.10
    Execution time: 2.01

    php run_using_threads.php 10
    --------------------------------------------------------------------------------
    Random numbers: 22, 67, 47, 93, 99, 59, 22, 63, 95, 97
    Average number: 66.40
    Execution time: 1.01
    ```