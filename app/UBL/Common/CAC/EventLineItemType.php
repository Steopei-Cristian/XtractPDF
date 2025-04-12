<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing EventLineItemType
 *
 * ABIE
 *  Event Line Item. Details
 *  A class to define a line item describing the expected impacts associated with a retail event involving a specific product at a specific location.
 *  Event Line Item
 * XSD Type: EventLineItemType
 */
class EventLineItemType
{
    /**
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @var \App\UBL\Common\CBC\LineNumberNumeric $lineNumberNumeric
     */
    private $lineNumberNumeric = null;

    /**
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\ParticipatingLocationsLocation $participatingLocationsLocation
     */
    private $participatingLocationsLocation = null;

    /**
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @var \App\UBL\Common\CAC\RetailPlannedImpact[] $retailPlannedImpact
     */
    private $retailPlannedImpact = [
        
    ];

    /**
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @var \App\UBL\Common\CAC\SupplyItem $supplyItem
     */
    private $supplyItem = null;

    /**
     * Gets as lineNumberNumeric
     *
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @return \App\UBL\Common\CBC\LineNumberNumeric
     */
    public function getLineNumberNumeric()
    {
        return $this->lineNumberNumeric;
    }

    /**
     * Sets a new lineNumberNumeric
     *
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @param \App\UBL\Common\CBC\LineNumberNumeric $lineNumberNumeric
     * @return self
     */
    public function setLineNumberNumeric(?\App\UBL\Common\CBC\LineNumberNumeric $lineNumberNumeric = null)
    {
        $this->lineNumberNumeric = $lineNumberNumeric;
        return $this;
    }

    /**
     * Gets as participatingLocationsLocation
     *
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\ParticipatingLocationsLocation
     */
    public function getParticipatingLocationsLocation()
    {
        return $this->participatingLocationsLocation;
    }

    /**
     * Sets a new participatingLocationsLocation
     *
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\ParticipatingLocationsLocation $participatingLocationsLocation
     * @return self
     */
    public function setParticipatingLocationsLocation(?\App\UBL\Common\CAC\ParticipatingLocationsLocation $participatingLocationsLocation = null)
    {
        $this->participatingLocationsLocation = $participatingLocationsLocation;
        return $this;
    }

    /**
     * Adds as retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @return self
     * @param \App\UBL\Common\CAC\RetailPlannedImpact $retailPlannedImpact
     */
    public function addToRetailPlannedImpact(\App\UBL\Common\CAC\RetailPlannedImpact $retailPlannedImpact)
    {
        $this->retailPlannedImpact[] = $retailPlannedImpact;
        return $this;
    }

    /**
     * isset retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetailPlannedImpact($index)
    {
        return isset($this->retailPlannedImpact[$index]);
    }

    /**
     * unset retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetailPlannedImpact($index)
    {
        unset($this->retailPlannedImpact[$index]);
    }

    /**
     * Gets as retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @return \App\UBL\Common\CAC\RetailPlannedImpact[]
     */
    public function getRetailPlannedImpact()
    {
        return $this->retailPlannedImpact;
    }

    /**
     * Sets a new retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param \App\UBL\Common\CAC\RetailPlannedImpact[] $retailPlannedImpact
     * @return self
     */
    public function setRetailPlannedImpact(?array $retailPlannedImpact = null)
    {
        $this->retailPlannedImpact = $retailPlannedImpact;
        return $this;
    }

    /**
     * Gets as supplyItem
     *
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @return \App\UBL\Common\CAC\SupplyItem
     */
    public function getSupplyItem()
    {
        return $this->supplyItem;
    }

    /**
     * Sets a new supplyItem
     *
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @param \App\UBL\Common\CAC\SupplyItem $supplyItem
     * @return self
     */
    public function setSupplyItem(\App\UBL\Common\CAC\SupplyItem $supplyItem)
    {
        $this->supplyItem = $supplyItem;
        return $this;
    }
}

