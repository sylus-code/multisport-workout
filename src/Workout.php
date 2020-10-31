<?php

namespace SylusCode\MultiSport\Workout;

class Workout
{
    private $time;
    private $type;
    private $distance;
    private $calories;
    private $duration;
    private $points = [];
    private $start;
    private $end;
    private $avgHeartRate;
    private $maxHeartRate;
    private $hashtags = [];
    private $message;

    public function getTime(): \DateTime
    {
        return $this->time;
    }

    public function setTime(\DateTime $time): self
    {
        $this->time = $time;

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

    public function getDistance(): float
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

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

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

    public function getEnd(): \DateTime
    {
        return $this->end;
    }

    public function setEnd($end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getAvgHeartRate(): int
    {
        return $this->avgHeartRate;
    }

    public function setAvgHeartRate(int $avgHeartRate): self
    {
        $this->avgHeartRate = $avgHeartRate;

        return $this;
    }

    public function getMaxHeartRate(): int
    {
        return $this->maxHeartRate;
    }

    public function setMaxHeartRate(int $maxHeartRate): self
    {
        $this->maxHeartRate = $maxHeartRate;

        return $this;
    }

    public function getHashtags(): array
    {
        return $this->hashtags;
    }

    public function setHashtags(array $hashtags): self
    {
        $this->hashtags = $hashtags;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
