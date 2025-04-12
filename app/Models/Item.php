<?php

namespace App\Models;

class Item
{
    private string $name;
    private string $description;
    private string $sellersItemIdentification;
    private string $classifiedTaxCategory;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getSellersItemIdentification(): string
    {
        return $this->sellersItemIdentification;
    }

    public function setSellersItemIdentification(string $sellersItemIdentification): void
    {
        $this->sellersItemIdentification = $sellersItemIdentification;
    }

    public function getClassifiedTaxCategory(): string
    {
        return $this->classifiedTaxCategory;
    }

    public function setClassifiedTaxCategory(string $classifiedTaxCategory): void
    {
        $this->classifiedTaxCategory = $classifiedTaxCategory;
    }
} 