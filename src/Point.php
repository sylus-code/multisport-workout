<?php

namespace SylusCode\MultiSport\Workout;

class Point
{
    private $time;
    private $latitude;
    private $longtitude;
    private $altitude;
    private $distance;
    private $heartRate;
    private $speed;

    public function getTime(): \DateTime
    {
        return $this->time;
    }

    public function setTime(\DateTime $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongtitude(): ?float
    {
        return $this->longtitude;
    }

    public function setLongtitude($longtitude): self
    {
        $this->longtitude = $longtitude;

        return $this;
    }

    public function getAltitude(): ?float
    {
        return $this->altitude;
    }

    public function setAltitude(float $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance($distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getHeartRate(): ?int
    {
        return $this->heartRate;
    }

    public function setHeartRate(int $heartRate): self
    {
        $this->heartRate = $heartRate;

        return $this;
    }

    public function getSpeed(): ?float
    {
        return $this->speed;
    }

    public function setSpeed(float $speed): self
    {
        $this->speed = $speed;

        return $this;
    }
}
