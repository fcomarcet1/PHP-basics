<?php

class Dog
{
    public const BREED = 'Labrador';
    private const TEST = 'test';
}

// Enums
// since php 8.1
enum Status {
    case EATING;
    case SLEEPING;
    case PLAYING;
}

class Doggy {
    public Status $status;
}

$dog = new Doggy();
$dog->status = Status::EATING;
if ($dog->status === Status::EATING) {
    echo 'Eating';
}
