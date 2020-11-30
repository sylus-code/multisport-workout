<?php

namespace SylusCode\MultiSport\Workout;

class Type
{
    private $name;

    public function __construct( string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
