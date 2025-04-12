<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing RelatedItemType
 *
 * ABIE
 *  Related Item. Details
 *  A class to describe the relationship to an item different from the item associated with the item line in which RelatedItem is used.
 *  Related Item
 * XSD Type: RelatedItemType
 */
class RelatedItemType
{
    /**
     * BBIE
     *  Related Item. Identifier
     *  An identifier for the related item.
     *  0..1
     *  Related Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  First , Second
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Related Item. Quantity
     *  The quantity that applies to the relationship.
     *  0..1
     *  Related Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  6 , 10mg per Kilo
     *
     * @var \UBL\Common\CBC\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @var \UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Related Item. Identifier
     *  An identifier for the related item.
     *  0..1
     *  Related Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  First , Second
     *
     * @return \UBL\Common\CBC\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Related Item. Identifier
     *  An identifier for the related item.
     *  0..1
     *  Related Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  First , Second
     *
     * @param \UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(?\UBL\Common\CBC\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Related Item. Quantity
     *  The quantity that applies to the relationship.
     *  0..1
     *  Related Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  6 , 10mg per Kilo
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
     *  Related Item. Quantity
     *  The quantity that applies to the relationship.
     *  0..1
     *  Related Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  6 , 10mg per Kilo
     *
     * @param \UBL\Common\CBC\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\UBL\Common\CBC\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @return self
     * @param \UBL\Common\CBC\Description $description
     */
    public function addToDescription(\UBL\Common\CBC\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @return \UBL\Common\CBC\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @param \UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}


