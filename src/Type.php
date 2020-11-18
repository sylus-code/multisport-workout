<?php

namespace SylusCode\MultiSport\Workout;

class Type
{
    const TYPE_RUNNING = 1;
    const TYPE_INDOOR_RUN = 2;
    const TYPE_BIKE = 3;
    const TYPE_INDOOR_BIKE = 4;
    const TYPE_GYM = 5;
    const TYPE_SWIMMING = 6;
    const TYPE_FREESTYLE = 7;
    const TYPE_YOGA = 8;
    const TYPE_OTHER = 101;

    const NAMES = [
        self::TYPE_RUNNING => 'Bieganie',
        self::TYPE_INDOOR_RUN => 'Bieżnia',
        self::TYPE_BIKE => 'Rower',
        self::TYPE_INDOOR_BIKE => 'Rower stacjonarny',
        self::TYPE_GYM => 'Siłownia',
        self::TYPE_SWIMMING => 'Pływanie',
        self::TYPE_FREESTYLE => 'W plenerze',
        self::TYPE_YOGA => 'Joga',
        self::TYPE_OTHER => 'Inny'

    ];

    private $id;
    private $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function createFromTypeId(int $id): self
    {
        return new self($id, self::NAMES[$id]);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
