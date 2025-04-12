<?php

namespace App\Models;

class Party
{
    private string $id;
    private string $name;
    private Address $postalAddress;
    private array $partyTaxScheme;
    private array $partyLegalEntity;

    public function __construct()
    {
        $this->partyTaxScheme = [];
        $this->partyLegalEntity = [];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPostalAddress(): Address
    {
        return $this->postalAddress;
    }

    public function setPostalAddress(Address $postalAddress): void
    {
        $this->postalAddress = $postalAddress;
    }

    public function getPartyTaxScheme(): array
    {
        return $this->partyTaxScheme;
    }

    public function addPartyTaxScheme(PartyTaxScheme $partyTaxScheme): void
    {
        $this->partyTaxScheme[] = $partyTaxScheme;
    }

    public function getPartyLegalEntity(): array
    {
        return $this->partyLegalEntity;
    }

    public function addPartyLegalEntity(PartyLegalEntity $partyLegalEntity): void
    {
        $this->partyLegalEntity[] = $partyLegalEntity;
    }
} 