<?php

namespace SylusCode\MultiSport\Workout;

class Workout
{
    private $type;
    private $distance;
    private $calories;
    private $durationTotal;
    private $points = [];
    private $start;
    private $avgHeartRate;
    private $maxHeartRate;
    private $hashtags = [];
    private $message;
    private $avgSpeed;
    private $maxSpeed;
    private $durationActive;
    private $steps;

    public function getMaxSpeed(): ?float
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): self
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    public function getSteps(): ?int
    {
        return $this->steps;
    }

    public function setSteps($steps): self
    {
        $this->steps = $steps;
        return $this;
    }

    public function getAvgSpeed(): ?float
    {
        return $this->avgSpeed;
    }

    public function setAvgSpeed($avgSpeed): self
    {
        $this->avgSpeed = $avgSpeed;
        return $this;
    }

    public function getDurationActive(): ?int
    {
        return $this->durationActive;
    }

    public function setDurationActive($durationActive): self
    {
        $this->durationActive = $durationActive;
        return $this;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function setType(Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getCalories(): int
    {
        return $this->calories;
    }

    public function setCalories(int $calories): self
    {
        $this->calories = $calories;

        return $this;
    }

    public function getDurationTotal(): int
    {
        return $this->durationTotal;
    }

    public function setDurationTotal(int $durationTotal): self
    {
        $this->durationTotal = $durationTotal;

        return $this;
    }

    /**
     * @return Point[]
     */
    public function getPoints(): array
    {
        return $this->points;
    }

    /**
     * @param Point[] $points
     * @return $this
     */
    public function setPoints(array $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getStart(): \DateTime
    {
        return $this->start;
    }

    public function setStart(\DateTime $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getAvgHeartRate(): ?int
    {
        return $this->avgHeartRate;
    }

    public function setAvgHeartRate(int $avgHeartRate): self
    {
        $this->avgHeartRate = $avgHeartRate;

        return $this;
    }

    public function getMaxHeartRate(): ?int
    {
        return $this->maxHeartRate;
    }

    public function setMaxHeartRate(int $maxHeartRate): self
    {
        $this->maxHeartRate = $maxHeartRate;

        return $this;
    }

    public function getHashtags(): ?array
    {
        return $this->hashtags;
    }

    public function setHashtags(array $hashtags): self
    {
        $this->hashtags = $hashtags;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
