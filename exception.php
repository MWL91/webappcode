<?php

class Example
{
    public function run(): void
    {
        if (false) {
            throw new \Exception("Example exception");
        }
    }
}

try {
    $example = new Example();
    $example->run();
} catch (\Exception $e) {
    echo 'We have an exception: ' . $e->getMessage();
}
