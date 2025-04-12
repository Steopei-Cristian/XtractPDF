<?php

namespace App\Models;

class Address
{
    private string $streetName;
    private string $buildingNumber;
    private string $cityName;
    private string $postalZone;
    private string $country;

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function setStreetName(string $streetName): void
    {
        $this->streetName = $streetName;
    }

    public function getBuildingNumber(): string
    {
        return $this->buildingNumber;
    }

    public function setBuildingNumber(string $buildingNumber): void
    {
        $this->buildingNumber = $buildingNumber;
    }

    public function getCityName(): string
    {
        return $this->cityName;
    }

    public function setCityName(string $cityName): void
    {
        $this->cityName = $cityName;
    }

    public function getPostalZone(): string
    {
        return $this->postalZone;
    }

    public function setPostalZone(string $postalZone): void
    {
        $this->postalZone = $postalZone;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
} 