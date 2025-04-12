<?php

namespace App\Models;

class InvoiceLine
{
    private string $id;
    private float $invoicedQuantity;
    private string $lineExtensionAmount;
    private Item $item;
    private Price $price;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getInvoicedQuantity(): float
    {
        return $this->invoicedQuantity;
    }

    public function setInvoicedQuantity(float $invoicedQuantity): void
    {
        $this->invoicedQuantity = $invoicedQuantity;
    }

    public function getLineExtensionAmount(): string
    {
        return $this->lineExtensionAmount;
    }

    public function setLineExtensionAmount(string $lineExtensionAmount): void
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
    }

    public function getItem(): Item
    {
        return $this->item;
    }

    public function setItem(Item $item): void
    {
        $this->item = $item;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(Price $price): void
    {
        $this->price = $price;
    }
} 