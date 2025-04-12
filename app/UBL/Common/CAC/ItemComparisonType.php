<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ItemComparisonType
 *
 * ABIE
 *  Item Comparison. Details
 *  A class to provide information about price and quantity of an item for use in price comparisons based on price, quantity, or measurements.
 *  Item Comparison
 * XSD Type: ItemComparisonType
 */
class ItemComparisonType
{
    /**
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
     *
     * @var \UBL\Common\CBC\Quantity $quantity
     */
    private $quantity = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(?\UBL\Common\CBC\PriceAmount $priceAmount = null)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
     *
     * @return \UBL\Common\CBC\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
     *
     * @param \UBL\Common\CBC\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\UBL\Common\CBC\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }
}


