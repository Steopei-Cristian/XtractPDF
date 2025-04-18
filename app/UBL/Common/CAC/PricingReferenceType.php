<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing PricingReferenceType
 *
 * ABIE
 *  Pricing Reference. Details
 *  A reference to the basis for pricing. This may be based on a catalogue or a quoted amount from a price list and include some alternative pricing conditions.
 *  Pricing Reference
 * XSD Type: PricingReferenceType
 */
class PricingReferenceType
{
    /**
     * ASBIE
     *  Pricing Reference. Original_ Item Location Quantity. Item Location Quantity
     *  An original set of location-specific properties (e.g., price and quantity) associated with this item.
     *  0..1
     *  Pricing Reference
     *  Original
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \App\UBL\Common\CAC\OriginalItemLocationQuantity $originalItemLocationQuantity
     */
    private $originalItemLocationQuantity = null;

    /**
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *  Price
     *
     * @var \App\UBL\Common\CAC\AlternativeConditionPrice[] $alternativeConditionPrice
     */
    private $alternativeConditionPrice = [
        
    ];

    /**
     * Gets as originalItemLocationQuantity
     *
     * ASBIE
     *  Pricing Reference. Original_ Item Location Quantity. Item Location Quantity
     *  An original set of location-specific properties (e.g., price and quantity) associated with this item.
     *  0..1
     *  Pricing Reference
     *  Original
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \App\UBL\Common\CAC\OriginalItemLocationQuantity
     */
    public function getOriginalItemLocationQuantity()
    {
        return $this->originalItemLocationQuantity;
    }

    /**
     * Sets a new originalItemLocationQuantity
     *
     * ASBIE
     *  Pricing Reference. Original_ Item Location Quantity. Item Location Quantity
     *  An original set of location-specific properties (e.g., price and quantity) associated with this item.
     *  0..1
     *  Pricing Reference
     *  Original
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \App\UBL\Common\CAC\OriginalItemLocationQuantity $originalItemLocationQuantity
     * @return self
     */
    public function setOriginalItemLocationQuantity(?\App\UBL\Common\CAC\OriginalItemLocationQuantity $originalItemLocationQuantity = null)
    {
        $this->originalItemLocationQuantity = $originalItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *  Price
     *
     * @return self
     * @param \App\UBL\Common\CAC\AlternativeConditionPrice $alternativeConditionPrice
     */
    public function addToAlternativeConditionPrice(\App\UBL\Common\CAC\AlternativeConditionPrice $alternativeConditionPrice)
    {
        $this->alternativeConditionPrice[] = $alternativeConditionPrice;
        return $this;
    }

    /**
     * isset alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *  Price
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternativeConditionPrice($index)
    {
        return isset($this->alternativeConditionPrice[$index]);
    }

    /**
     * unset alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *  Price
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternativeConditionPrice($index)
    {
        unset($this->alternativeConditionPrice[$index]);
    }

    /**
     * Gets as alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *  Price
     *
     * @return \App\UBL\Common\CAC\AlternativeConditionPrice[]
     */
    public function getAlternativeConditionPrice()
    {
        return $this->alternativeConditionPrice;
    }

    /**
     * Sets a new alternativeConditionPrice
     *
     * ASBIE
     *  Pricing Reference. Alternative Condition_ Price. Price
     *  The price expressed in terms other than the actual price, e.g., the list price v. the contracted price, or the price in bags v. the price in kilos, or the list price in bags v. the contracted price in kilos.
     *  0..n
     *  Pricing Reference
     *  Alternative Condition
     *  Price
     *  Price
     *  Price
     *
     * @param \App\UBL\Common\CAC\AlternativeConditionPrice[] $alternativeConditionPrice
     * @return self
     */
    public function setAlternativeConditionPrice(?array $alternativeConditionPrice = null)
    {
        $this->alternativeConditionPrice = $alternativeConditionPrice;
        return $this;
    }
}

