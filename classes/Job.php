<?php

class Job
{
    public static function run(): int
    {
        $randomNumber = rand(0, 100);
        sleep(1);
        return $randomNumber;
    }
}