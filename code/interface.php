<?php

class Human implements Walking, Calculating
{
    public function walk(): void
    {
        // do walk like a human!
    }

    public function calculate(float ...$numbers): float
    {
        return array_sum($numbers);
    }
}

class Calculator implements Calculating
{
    public function calculate(float ...$numbers): float
    {
        return array_sum($numbers);
    }
}

class Cat implements Walking
{
    public function walk(): void
    {
        // do walk like a cat!
    }
}

interface Walking
{
    public function walk(): void;
}

interface Calculating
{
    public function calculate(float ...$numbers): float;
}

interface Talking
{
    public function talk(): void;
}

interface Thinking extends Calculating, Talking
{
}

abstract class Think implements Thinking
{
    public function calculate(float ...$numbers): float
    {
        return array_sum($numbers);
    }

    abstract public function sayHello(): void;
}

final class Man extends Think
{
    use Talkative;
}

// declaration of this class will be an error - Man is final class
class WillBeAnError extends Man
{
}

trait Talkative
{
    public function sayHello(): void
    {
        echo 'Hello!';
    }

    public function talk(): void
    {
        echo 'ble';
    }
}
