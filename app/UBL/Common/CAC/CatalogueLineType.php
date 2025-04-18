<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing CatalogueLineType
 *
 * ABIE
 *  Catalogue Line. Details
 *  A class to define a line in a Catalogue describing a purchasable item.
 *  Catalogue Line
 * XSD Type: CatalogueLineType
 */
class CatalogueLineType
{
    /**
     * BBIE
     *  Catalogue Line. Identifier
     *  An identifier for the line in the catalogue.
     *  1
     *  Catalogue Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Line. Action Code. Code
     *  A code signifying the action required to synchronize this catalogue line. Recommend codes (delete, update, add)
     *  0..1
     *  Catalogue Line
     *  Action Code
     *  Code
     *  Code. Type
     *  Replace , Update , Delete , Add
     *
     * @var \App\UBL\Common\CBC\ActionCode $actionCode
     */
    private $actionCode = null;

    /**
     * BBIE
     *  Catalogue Line. Life Cycle Status Code. Code
     *  A code signifying the life cycle status of this catalogue line. Examples are pre-order, end of production
     *  0..1
     *  Catalogue Line
     *  Life Cycle Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @var \App\UBL\Common\CBC\LifeCycleStatusCode $lifeCycleStatusCode
     */
    private $lifeCycleStatusCode = null;

    /**
     * BBIE
     *  Catalogue Line. Contract Subdivision. Text
     *  A subdivision of a contract or tender covering this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  Installation , Phase One , Support and Maintenance
     *
     * @var \App\UBL\Common\CBC\ContractSubdivision $contractSubdivision
     */
    private $contractSubdivision = null;

    /**
     * BBIE
     *  Catalogue Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Catalogue Line. Orderable_ Indicator. Indicator
     *  An indicator that this catalogue line describes an orderable item (true) or is included for reference purposes only (false).
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means orderable, FALSE means not orderable
     *
     * @var bool $orderableIndicator
     */
    private $orderableIndicator = null;

    /**
     * BBIE
     *  Catalogue Line. Orderable_ Unit. Text
     *  A textual description of the units in which the item described in this catalogue line can be ordered.
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\OrderableUnit $orderableUnit
     */
    private $orderableUnit = null;

    /**
     * BBIE
     *  Catalogue Line. Content Unit. Quantity
     *  The numeric quantity of the ordering unit (and units of measure) of the catalogue line.
     *  0..1
     *  Catalogue Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @var \App\UBL\Common\CBC\ContentUnitQuantity $contentUnitQuantity
     */
    private $contentUnitQuantity = null;

    /**
     * BBIE
     *  Catalogue Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Catalogue Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @var \App\UBL\Common\CBC\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     */
    private $orderQuantityIncrementNumeric = null;

    /**
     * BBIE
     *  Catalogue Line. Minimum_ Order Quantity. Quantity
     *  The minimum amount of the item described in this catalogue line that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @var \App\UBL\Common\CBC\MinimumOrderQuantity $minimumOrderQuantity
     */
    private $minimumOrderQuantity = null;

    /**
     * BBIE
     *  Catalogue Line. Maximum_ Order Quantity. Quantity
     *  The maximum amount of the item described in this catalogue line that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @var \App\UBL\Common\CBC\MaximumOrderQuantity $maximumOrderQuantity
     */
    private $maximumOrderQuantity = null;

    /**
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @var \App\UBL\Common\CBC\WarrantyInformation[] $warrantyInformation
     */
    private $warrantyInformation = [
        
    ];

    /**
     * BBIE
     *  Catalogue Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @var \App\UBL\Common\CBC\PackLevelCode $packLevelCode
     */
    private $packLevelCode = null;

    /**
     * ASBIE
     *  Catalogue Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract with which this catalogue line is associated.
     *  0..1
     *  Catalogue Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \App\UBL\Common\CAC\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract with which this catalogue line is associated.
     *  0..1
     *  Catalogue Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \App\UBL\Common\CAC\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Line. Warranty_ Party. Party
     *  The party responsible for any warranty associated with the item described in this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * ASBIE
     *  Catalogue Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item in this catalogue line is valid.
     *  0..1
     *  Catalogue Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Catalogue Line. Line Validity_ Period. Period
     *  The period for which the information in this catalogue line is valid.
     *  0..1
     *  Catalogue Line
     *  Line Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\LineValidityPeriod $lineValidityPeriod
     */
    private $lineValidityPeriod = null;

    /**
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  A combination of price and quantity used to provide price comparisons based on different sizes of order.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *  Item Comparison
     *
     * @var \App\UBL\Common\CAC\ItemComparison[] $itemComparison
     */
    private $itemComparison = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An item that may be a component of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \App\UBL\Common\CAC\ComponentRelatedItem[] $componentRelatedItem
     */
    private $componentRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An item that may be an optional accessory of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \App\UBL\Common\CAC\AccessoryRelatedItem[] $accessoryRelatedItem
     */
    private $accessoryRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An item that may be required for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \App\UBL\Common\CAC\RequiredRelatedItem[] $requiredRelatedItem
     */
    private $requiredRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An item that may be a replacement for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \App\UBL\Common\CAC\ReplacementRelatedItem[] $replacementRelatedItem
     */
    private $replacementRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An item that may complement the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \App\UBL\Common\CAC\ComplementaryRelatedItem[] $complementaryRelatedItem
     */
    private $complementaryRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Replaced_ Related Item. Related Item
     *  An item in an existing catalogue that is being replaced by the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replaced
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \App\UBL\Common\CAC\ReplacedRelatedItem[] $replacedRelatedItem
     */
    private $replacedRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \App\UBL\Common\CAC\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Document Reference
     *  A reference to a document associated with this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \App\UBL\Common\CAC\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Item
     *  A specification of the item itself.
     *  1
     *  Catalogue Line
     *  Item
     *  Item
     *  Item
     *
     * @var \App\UBL\Common\CAC\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Catalogue Line. Keyword_ Item Property. Item Property
     *  A property of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Keyword
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @var \App\UBL\Common\CAC\KeywordItemProperty[] $keywordItemProperty
     */
    private $keywordItemProperty = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Catalogue Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \App\UBL\Common\CAC\CallForTendersLineReference $callForTendersLineReference
     */
    private $callForTendersLineReference = null;

    /**
     * ASBIE
     *  Catalogue Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Catalogue Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \App\UBL\Common\CAC\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Catalogue Line. Identifier
     *  An identifier for the line in the catalogue.
     *  1
     *  Catalogue Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @return \App\UBL\Common\CBC\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Catalogue Line. Identifier
     *  An identifier for the line in the catalogue.
     *  1
     *  Catalogue Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @param \App\UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(\App\UBL\Common\CBC\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as actionCode
     *
     * BBIE
     *  Catalogue Line. Action Code. Code
     *  A code signifying the action required to synchronize this catalogue line. Recommend codes (delete, update, add)
     *  0..1
     *  Catalogue Line
     *  Action Code
     *  Code
     *  Code. Type
     *  Replace , Update , Delete , Add
     *
     * @return \App\UBL\Common\CBC\ActionCode
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Sets a new actionCode
     *
     * BBIE
     *  Catalogue Line. Action Code. Code
     *  A code signifying the action required to synchronize this catalogue line. Recommend codes (delete, update, add)
     *  0..1
     *  Catalogue Line
     *  Action Code
     *  Code
     *  Code. Type
     *  Replace , Update , Delete , Add
     *
     * @param \App\UBL\Common\CBC\ActionCode $actionCode
     * @return self
     */
    public function setActionCode(?\App\UBL\Common\CBC\ActionCode $actionCode = null)
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    /**
     * Gets as lifeCycleStatusCode
     *
     * BBIE
     *  Catalogue Line. Life Cycle Status Code. Code
     *  A code signifying the life cycle status of this catalogue line. Examples are pre-order, end of production
     *  0..1
     *  Catalogue Line
     *  Life Cycle Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @return \App\UBL\Common\CBC\LifeCycleStatusCode
     */
    public function getLifeCycleStatusCode()
    {
        return $this->lifeCycleStatusCode;
    }

    /**
     * Sets a new lifeCycleStatusCode
     *
     * BBIE
     *  Catalogue Line. Life Cycle Status Code. Code
     *  A code signifying the life cycle status of this catalogue line. Examples are pre-order, end of production
     *  0..1
     *  Catalogue Line
     *  Life Cycle Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @param \App\UBL\Common\CBC\LifeCycleStatusCode $lifeCycleStatusCode
     * @return self
     */
    public function setLifeCycleStatusCode(?\App\UBL\Common\CBC\LifeCycleStatusCode $lifeCycleStatusCode = null)
    {
        $this->lifeCycleStatusCode = $lifeCycleStatusCode;
        return $this;
    }

    /**
     * Gets as contractSubdivision
     *
     * BBIE
     *  Catalogue Line. Contract Subdivision. Text
     *  A subdivision of a contract or tender covering this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  Installation , Phase One , Support and Maintenance
     *
     * @return \App\UBL\Common\CBC\ContractSubdivision
     */
    public function getContractSubdivision()
    {
        return $this->contractSubdivision;
    }

    /**
     * Sets a new contractSubdivision
     *
     * BBIE
     *  Catalogue Line. Contract Subdivision. Text
     *  A subdivision of a contract or tender covering this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  Installation , Phase One , Support and Maintenance
     *
     * @param \App\UBL\Common\CBC\ContractSubdivision $contractSubdivision
     * @return self
     */
    public function setContractSubdivision(?\App\UBL\Common\CBC\ContractSubdivision $contractSubdivision = null)
    {
        $this->contractSubdivision = $contractSubdivision;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Catalogue Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Note $note
     */
    public function addToNote(\App\UBL\Common\CBC\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Catalogue Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Catalogue Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Catalogue Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Catalogue Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as orderableIndicator
     *
     * BBIE
     *  Catalogue Line. Orderable_ Indicator. Indicator
     *  An indicator that this catalogue line describes an orderable item (true) or is included for reference purposes only (false).
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means orderable, FALSE means not orderable
     *
     * @return bool
     */
    public function getOrderableIndicator()
    {
        return $this->orderableIndicator;
    }

    /**
     * Sets a new orderableIndicator
     *
     * BBIE
     *  Catalogue Line. Orderable_ Indicator. Indicator
     *  An indicator that this catalogue line describes an orderable item (true) or is included for reference purposes only (false).
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means orderable, FALSE means not orderable
     *
     * @param bool $orderableIndicator
     * @return self
     */
    public function setOrderableIndicator($orderableIndicator)
    {
        $this->orderableIndicator = $orderableIndicator;
        return $this;
    }

    /**
     * Gets as orderableUnit
     *
     * BBIE
     *  Catalogue Line. Orderable_ Unit. Text
     *  A textual description of the units in which the item described in this catalogue line can be ordered.
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\OrderableUnit
     */
    public function getOrderableUnit()
    {
        return $this->orderableUnit;
    }

    /**
     * Sets a new orderableUnit
     *
     * BBIE
     *  Catalogue Line. Orderable_ Unit. Text
     *  A textual description of the units in which the item described in this catalogue line can be ordered.
     *  0..1
     *  Catalogue Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\OrderableUnit $orderableUnit
     * @return self
     */
    public function setOrderableUnit(?\App\UBL\Common\CBC\OrderableUnit $orderableUnit = null)
    {
        $this->orderableUnit = $orderableUnit;
        return $this;
    }

    /**
     * Gets as contentUnitQuantity
     *
     * BBIE
     *  Catalogue Line. Content Unit. Quantity
     *  The numeric quantity of the ordering unit (and units of measure) of the catalogue line.
     *  0..1
     *  Catalogue Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @return \App\UBL\Common\CBC\ContentUnitQuantity
     */
    public function getContentUnitQuantity()
    {
        return $this->contentUnitQuantity;
    }

    /**
     * Sets a new contentUnitQuantity
     *
     * BBIE
     *  Catalogue Line. Content Unit. Quantity
     *  The numeric quantity of the ordering unit (and units of measure) of the catalogue line.
     *  0..1
     *  Catalogue Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @param \App\UBL\Common\CBC\ContentUnitQuantity $contentUnitQuantity
     * @return self
     */
    public function setContentUnitQuantity(?\App\UBL\Common\CBC\ContentUnitQuantity $contentUnitQuantity = null)
    {
        $this->contentUnitQuantity = $contentUnitQuantity;
        return $this;
    }

    /**
     * Gets as orderQuantityIncrementNumeric
     *
     * BBIE
     *  Catalogue Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Catalogue Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @return \App\UBL\Common\CBC\OrderQuantityIncrementNumeric
     */
    public function getOrderQuantityIncrementNumeric()
    {
        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * Sets a new orderQuantityIncrementNumeric
     *
     * BBIE
     *  Catalogue Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Catalogue Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @param \App\UBL\Common\CBC\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     * @return self
     */
    public function setOrderQuantityIncrementNumeric(?\App\UBL\Common\CBC\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric = null)
    {
        $this->orderQuantityIncrementNumeric = $orderQuantityIncrementNumeric;
        return $this;
    }

    /**
     * Gets as minimumOrderQuantity
     *
     * BBIE
     *  Catalogue Line. Minimum_ Order Quantity. Quantity
     *  The minimum amount of the item described in this catalogue line that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @return \App\UBL\Common\CBC\MinimumOrderQuantity
     */
    public function getMinimumOrderQuantity()
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * Sets a new minimumOrderQuantity
     *
     * BBIE
     *  Catalogue Line. Minimum_ Order Quantity. Quantity
     *  The minimum amount of the item described in this catalogue line that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @param \App\UBL\Common\CBC\MinimumOrderQuantity $minimumOrderQuantity
     * @return self
     */
    public function setMinimumOrderQuantity(?\App\UBL\Common\CBC\MinimumOrderQuantity $minimumOrderQuantity = null)
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;
        return $this;
    }

    /**
     * Gets as maximumOrderQuantity
     *
     * BBIE
     *  Catalogue Line. Maximum_ Order Quantity. Quantity
     *  The maximum amount of the item described in this catalogue line that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @return \App\UBL\Common\CBC\MaximumOrderQuantity
     */
    public function getMaximumOrderQuantity()
    {
        return $this->maximumOrderQuantity;
    }

    /**
     * Sets a new maximumOrderQuantity
     *
     * BBIE
     *  Catalogue Line. Maximum_ Order Quantity. Quantity
     *  The maximum amount of the item described in this catalogue line that can be ordered.
     *  0..1
     *  Catalogue Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @param \App\UBL\Common\CBC\MaximumOrderQuantity $maximumOrderQuantity
     * @return self
     */
    public function setMaximumOrderQuantity(?\App\UBL\Common\CBC\MaximumOrderQuantity $maximumOrderQuantity = null)
    {
        $this->maximumOrderQuantity = $maximumOrderQuantity;
        return $this;
    }

    /**
     * Adds as warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return self
     * @param \App\UBL\Common\CBC\WarrantyInformation $warrantyInformation
     */
    public function addToWarrantyInformation(\App\UBL\Common\CBC\WarrantyInformation $warrantyInformation)
    {
        $this->warrantyInformation[] = $warrantyInformation;
        return $this;
    }

    /**
     * isset warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarrantyInformation($index)
    {
        return isset($this->warrantyInformation[$index]);
    }

    /**
     * unset warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarrantyInformation($index)
    {
        unset($this->warrantyInformation[$index]);
    }

    /**
     * Gets as warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return \App\UBL\Common\CBC\WarrantyInformation[]
     */
    public function getWarrantyInformation()
    {
        return $this->warrantyInformation;
    }

    /**
     * Sets a new warrantyInformation
     *
     * BBIE
     *  Catalogue Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param \App\UBL\Common\CBC\WarrantyInformation[] $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(?array $warrantyInformation = null)
    {
        $this->warrantyInformation = $warrantyInformation;
        return $this;
    }

    /**
     * Gets as packLevelCode
     *
     * BBIE
     *  Catalogue Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @return \App\UBL\Common\CBC\PackLevelCode
     */
    public function getPackLevelCode()
    {
        return $this->packLevelCode;
    }

    /**
     * Sets a new packLevelCode
     *
     * BBIE
     *  Catalogue Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @param \App\UBL\Common\CBC\PackLevelCode $packLevelCode
     * @return self
     */
    public function setPackLevelCode(?\App\UBL\Common\CBC\PackLevelCode $packLevelCode = null)
    {
        $this->packLevelCode = $packLevelCode;
        return $this;
    }

    /**
     * Gets as contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract with which this catalogue line is associated.
     *  0..1
     *  Catalogue Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \App\UBL\Common\CAC\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract with which this catalogue line is associated.
     *  0..1
     *  Catalogue Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \App\UBL\Common\CAC\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(?\App\UBL\Common\CAC\ContractorCustomerParty $contractorCustomerParty = null)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract with which this catalogue line is associated.
     *  0..1
     *  Catalogue Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \App\UBL\Common\CAC\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract with which this catalogue line is associated.
     *  0..1
     *  Catalogue Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \App\UBL\Common\CAC\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\App\UBL\Common\CAC\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as warrantyParty
     *
     * ASBIE
     *  Catalogue Line. Warranty_ Party. Party
     *  The party responsible for any warranty associated with the item described in this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\WarrantyParty
     */
    public function getWarrantyParty()
    {
        return $this->warrantyParty;
    }

    /**
     * Sets a new warrantyParty
     *
     * ASBIE
     *  Catalogue Line. Warranty_ Party. Party
     *  The party responsible for any warranty associated with the item described in this catalogue line.
     *  0..1
     *  Catalogue Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\WarrantyParty $warrantyParty
     * @return self
     */
    public function setWarrantyParty(?\App\UBL\Common\CAC\WarrantyParty $warrantyParty = null)
    {
        $this->warrantyParty = $warrantyParty;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Catalogue Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item in this catalogue line is valid.
     *  0..1
     *  Catalogue Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \App\UBL\Common\CAC\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Catalogue Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item in this catalogue line is valid.
     *  0..1
     *  Catalogue Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(?\App\UBL\Common\CAC\WarrantyValidityPeriod $warrantyValidityPeriod = null)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Gets as lineValidityPeriod
     *
     * ASBIE
     *  Catalogue Line. Line Validity_ Period. Period
     *  The period for which the information in this catalogue line is valid.
     *  0..1
     *  Catalogue Line
     *  Line Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \App\UBL\Common\CAC\LineValidityPeriod
     */
    public function getLineValidityPeriod()
    {
        return $this->lineValidityPeriod;
    }

    /**
     * Sets a new lineValidityPeriod
     *
     * ASBIE
     *  Catalogue Line. Line Validity_ Period. Period
     *  The period for which the information in this catalogue line is valid.
     *  0..1
     *  Catalogue Line
     *  Line Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\LineValidityPeriod $lineValidityPeriod
     * @return self
     */
    public function setLineValidityPeriod(?\App\UBL\Common\CAC\LineValidityPeriod $lineValidityPeriod = null)
    {
        $this->lineValidityPeriod = $lineValidityPeriod;
        return $this;
    }

    /**
     * Adds as itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  A combination of price and quantity used to provide price comparisons based on different sizes of order.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *  Item Comparison
     *
     * @return self
     * @param \App\UBL\Common\CAC\ItemComparison $itemComparison
     */
    public function addToItemComparison(\App\UBL\Common\CAC\ItemComparison $itemComparison)
    {
        $this->itemComparison[] = $itemComparison;
        return $this;
    }

    /**
     * isset itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  A combination of price and quantity used to provide price comparisons based on different sizes of order.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *  Item Comparison
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemComparison($index)
    {
        return isset($this->itemComparison[$index]);
    }

    /**
     * unset itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  A combination of price and quantity used to provide price comparisons based on different sizes of order.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *  Item Comparison
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemComparison($index)
    {
        unset($this->itemComparison[$index]);
    }

    /**
     * Gets as itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  A combination of price and quantity used to provide price comparisons based on different sizes of order.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *  Item Comparison
     *
     * @return \App\UBL\Common\CAC\ItemComparison[]
     */
    public function getItemComparison()
    {
        return $this->itemComparison;
    }

    /**
     * Sets a new itemComparison
     *
     * ASBIE
     *  Catalogue Line. Item Comparison
     *  A combination of price and quantity used to provide price comparisons based on different sizes of order.
     *  0..n
     *  Catalogue Line
     *  Item Comparison
     *  Item Comparison
     *  Item Comparison
     *
     * @param \App\UBL\Common\CAC\ItemComparison[] $itemComparison
     * @return self
     */
    public function setItemComparison(?array $itemComparison = null)
    {
        $this->itemComparison = $itemComparison;
        return $this;
    }

    /**
     * Adds as componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An item that may be a component of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\ComponentRelatedItem $componentRelatedItem
     */
    public function addToComponentRelatedItem(\App\UBL\Common\CAC\ComponentRelatedItem $componentRelatedItem)
    {
        $this->componentRelatedItem[] = $componentRelatedItem;
        return $this;
    }

    /**
     * isset componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An item that may be a component of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponentRelatedItem($index)
    {
        return isset($this->componentRelatedItem[$index]);
    }

    /**
     * unset componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An item that may be a component of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponentRelatedItem($index)
    {
        unset($this->componentRelatedItem[$index]);
    }

    /**
     * Gets as componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An item that may be a component of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \App\UBL\Common\CAC\ComponentRelatedItem[]
     */
    public function getComponentRelatedItem()
    {
        return $this->componentRelatedItem;
    }

    /**
     * Sets a new componentRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Component_ Related Item. Related Item
     *  An item that may be a component of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Component
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \App\UBL\Common\CAC\ComponentRelatedItem[] $componentRelatedItem
     * @return self
     */
    public function setComponentRelatedItem(?array $componentRelatedItem = null)
    {
        $this->componentRelatedItem = $componentRelatedItem;
        return $this;
    }

    /**
     * Adds as accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An item that may be an optional accessory of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\AccessoryRelatedItem $accessoryRelatedItem
     */
    public function addToAccessoryRelatedItem(\App\UBL\Common\CAC\AccessoryRelatedItem $accessoryRelatedItem)
    {
        $this->accessoryRelatedItem[] = $accessoryRelatedItem;
        return $this;
    }

    /**
     * isset accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An item that may be an optional accessory of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccessoryRelatedItem($index)
    {
        return isset($this->accessoryRelatedItem[$index]);
    }

    /**
     * unset accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An item that may be an optional accessory of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccessoryRelatedItem($index)
    {
        unset($this->accessoryRelatedItem[$index]);
    }

    /**
     * Gets as accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An item that may be an optional accessory of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \App\UBL\Common\CAC\AccessoryRelatedItem[]
     */
    public function getAccessoryRelatedItem()
    {
        return $this->accessoryRelatedItem;
    }

    /**
     * Sets a new accessoryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Accessory_ Related Item. Related Item
     *  An item that may be an optional accessory of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Accessory
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \App\UBL\Common\CAC\AccessoryRelatedItem[] $accessoryRelatedItem
     * @return self
     */
    public function setAccessoryRelatedItem(?array $accessoryRelatedItem = null)
    {
        $this->accessoryRelatedItem = $accessoryRelatedItem;
        return $this;
    }

    /**
     * Adds as requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An item that may be required for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\RequiredRelatedItem $requiredRelatedItem
     */
    public function addToRequiredRelatedItem(\App\UBL\Common\CAC\RequiredRelatedItem $requiredRelatedItem)
    {
        $this->requiredRelatedItem[] = $requiredRelatedItem;
        return $this;
    }

    /**
     * isset requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An item that may be required for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredRelatedItem($index)
    {
        return isset($this->requiredRelatedItem[$index]);
    }

    /**
     * unset requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An item that may be required for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredRelatedItem($index)
    {
        unset($this->requiredRelatedItem[$index]);
    }

    /**
     * Gets as requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An item that may be required for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \App\UBL\Common\CAC\RequiredRelatedItem[]
     */
    public function getRequiredRelatedItem()
    {
        return $this->requiredRelatedItem;
    }

    /**
     * Sets a new requiredRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Required_ Related Item. Related Item
     *  An item that may be required for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \App\UBL\Common\CAC\RequiredRelatedItem[] $requiredRelatedItem
     * @return self
     */
    public function setRequiredRelatedItem(?array $requiredRelatedItem = null)
    {
        $this->requiredRelatedItem = $requiredRelatedItem;
        return $this;
    }

    /**
     * Adds as replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An item that may be a replacement for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\ReplacementRelatedItem $replacementRelatedItem
     */
    public function addToReplacementRelatedItem(\App\UBL\Common\CAC\ReplacementRelatedItem $replacementRelatedItem)
    {
        $this->replacementRelatedItem[] = $replacementRelatedItem;
        return $this;
    }

    /**
     * isset replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An item that may be a replacement for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacementRelatedItem($index)
    {
        return isset($this->replacementRelatedItem[$index]);
    }

    /**
     * unset replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An item that may be a replacement for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacementRelatedItem($index)
    {
        unset($this->replacementRelatedItem[$index]);
    }

    /**
     * Gets as replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An item that may be a replacement for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \App\UBL\Common\CAC\ReplacementRelatedItem[]
     */
    public function getReplacementRelatedItem()
    {
        return $this->replacementRelatedItem;
    }

    /**
     * Sets a new replacementRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replacement_ Related Item. Related Item
     *  An item that may be a replacement for the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \App\UBL\Common\CAC\ReplacementRelatedItem[] $replacementRelatedItem
     * @return self
     */
    public function setReplacementRelatedItem(?array $replacementRelatedItem = null)
    {
        $this->replacementRelatedItem = $replacementRelatedItem;
        return $this;
    }

    /**
     * Adds as complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An item that may complement the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\ComplementaryRelatedItem $complementaryRelatedItem
     */
    public function addToComplementaryRelatedItem(\App\UBL\Common\CAC\ComplementaryRelatedItem $complementaryRelatedItem)
    {
        $this->complementaryRelatedItem[] = $complementaryRelatedItem;
        return $this;
    }

    /**
     * isset complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An item that may complement the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComplementaryRelatedItem($index)
    {
        return isset($this->complementaryRelatedItem[$index]);
    }

    /**
     * unset complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An item that may complement the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComplementaryRelatedItem($index)
    {
        unset($this->complementaryRelatedItem[$index]);
    }

    /**
     * Gets as complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An item that may complement the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \App\UBL\Common\CAC\ComplementaryRelatedItem[]
     */
    public function getComplementaryRelatedItem()
    {
        return $this->complementaryRelatedItem;
    }

    /**
     * Sets a new complementaryRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Complementary_ Related Item. Related Item
     *  An item that may complement the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Complementary
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \App\UBL\Common\CAC\ComplementaryRelatedItem[] $complementaryRelatedItem
     * @return self
     */
    public function setComplementaryRelatedItem(?array $complementaryRelatedItem = null)
    {
        $this->complementaryRelatedItem = $complementaryRelatedItem;
        return $this;
    }

    /**
     * Adds as replacedRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replaced_ Related Item. Related Item
     *  An item in an existing catalogue that is being replaced by the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replaced
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\ReplacedRelatedItem $replacedRelatedItem
     */
    public function addToReplacedRelatedItem(\App\UBL\Common\CAC\ReplacedRelatedItem $replacedRelatedItem)
    {
        $this->replacedRelatedItem[] = $replacedRelatedItem;
        return $this;
    }

    /**
     * isset replacedRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replaced_ Related Item. Related Item
     *  An item in an existing catalogue that is being replaced by the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replaced
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacedRelatedItem($index)
    {
        return isset($this->replacedRelatedItem[$index]);
    }

    /**
     * unset replacedRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replaced_ Related Item. Related Item
     *  An item in an existing catalogue that is being replaced by the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replaced
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacedRelatedItem($index)
    {
        unset($this->replacedRelatedItem[$index]);
    }

    /**
     * Gets as replacedRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replaced_ Related Item. Related Item
     *  An item in an existing catalogue that is being replaced by the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replaced
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \App\UBL\Common\CAC\ReplacedRelatedItem[]
     */
    public function getReplacedRelatedItem()
    {
        return $this->replacedRelatedItem;
    }

    /**
     * Sets a new replacedRelatedItem
     *
     * ASBIE
     *  Catalogue Line. Replaced_ Related Item. Related Item
     *  An item in an existing catalogue that is being replaced by the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Replaced
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \App\UBL\Common\CAC\ReplacedRelatedItem[] $replacedRelatedItem
     * @return self
     */
    public function setReplacedRelatedItem(?array $replacedRelatedItem = null)
    {
        $this->replacedRelatedItem = $replacedRelatedItem;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \App\UBL\Common\CAC\RequiredItemLocationQuantity $requiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantity(\App\UBL\Common\CAC\RequiredItemLocationQuantity $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * isset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredItemLocationQuantity($index)
    {
        return isset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * unset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredItemLocationQuantity($index)
    {
        unset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * Gets as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \App\UBL\Common\CAC\RequiredItemLocationQuantity[]
     */
    public function getRequiredItemLocationQuantity()
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * Sets a new requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \App\UBL\Common\CAC\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(?array $requiredItemLocationQuantity = null)
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Catalogue Line. Document Reference
     *  A reference to a document associated with this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \App\UBL\Common\CAC\DocumentReference $documentReference
     */
    public function addToDocumentReference(\App\UBL\Common\CAC\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Catalogue Line. Document Reference
     *  A reference to a document associated with this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Catalogue Line. Document Reference
     *  A reference to a document associated with this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Catalogue Line. Document Reference
     *  A reference to a document associated with this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \App\UBL\Common\CAC\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Catalogue Line. Document Reference
     *  A reference to a document associated with this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \App\UBL\Common\CAC\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Catalogue Line. Item
     *  A specification of the item itself.
     *  1
     *  Catalogue Line
     *  Item
     *  Item
     *  Item
     *
     * @return \App\UBL\Common\CAC\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Catalogue Line. Item
     *  A specification of the item itself.
     *  1
     *  Catalogue Line
     *  Item
     *  Item
     *  Item
     *
     * @param \App\UBL\Common\CAC\Item $item
     * @return self
     */
    public function setItem(\App\UBL\Common\CAC\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as keywordItemProperty
     *
     * ASBIE
     *  Catalogue Line. Keyword_ Item Property. Item Property
     *  A property of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Keyword
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return self
     * @param \App\UBL\Common\CAC\KeywordItemProperty $keywordItemProperty
     */
    public function addToKeywordItemProperty(\App\UBL\Common\CAC\KeywordItemProperty $keywordItemProperty)
    {
        $this->keywordItemProperty[] = $keywordItemProperty;
        return $this;
    }

    /**
     * isset keywordItemProperty
     *
     * ASBIE
     *  Catalogue Line. Keyword_ Item Property. Item Property
     *  A property of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Keyword
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywordItemProperty($index)
    {
        return isset($this->keywordItemProperty[$index]);
    }

    /**
     * unset keywordItemProperty
     *
     * ASBIE
     *  Catalogue Line. Keyword_ Item Property. Item Property
     *  A property of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Keyword
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywordItemProperty($index)
    {
        unset($this->keywordItemProperty[$index]);
    }

    /**
     * Gets as keywordItemProperty
     *
     * ASBIE
     *  Catalogue Line. Keyword_ Item Property. Item Property
     *  A property of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Keyword
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return \App\UBL\Common\CAC\KeywordItemProperty[]
     */
    public function getKeywordItemProperty()
    {
        return $this->keywordItemProperty;
    }

    /**
     * Sets a new keywordItemProperty
     *
     * ASBIE
     *  Catalogue Line. Keyword_ Item Property. Item Property
     *  A property of the item in this catalogue line.
     *  0..n
     *  Catalogue Line
     *  Keyword
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param \App\UBL\Common\CAC\KeywordItemProperty[] $keywordItemProperty
     * @return self
     */
    public function setKeywordItemProperty(?array $keywordItemProperty = null)
    {
        $this->keywordItemProperty = $keywordItemProperty;
        return $this;
    }

    /**
     * Gets as callForTendersLineReference
     *
     * ASBIE
     *  Catalogue Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Catalogue Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \App\UBL\Common\CAC\CallForTendersLineReference
     */
    public function getCallForTendersLineReference()
    {
        return $this->callForTendersLineReference;
    }

    /**
     * Sets a new callForTendersLineReference
     *
     * ASBIE
     *  Catalogue Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Catalogue Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \App\UBL\Common\CAC\CallForTendersLineReference $callForTendersLineReference
     * @return self
     */
    public function setCallForTendersLineReference(?\App\UBL\Common\CAC\CallForTendersLineReference $callForTendersLineReference = null)
    {
        $this->callForTendersLineReference = $callForTendersLineReference;
        return $this;
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * ASBIE
     *  Catalogue Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Catalogue Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \App\UBL\Common\CAC\CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * ASBIE
     *  Catalogue Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Catalogue Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \App\UBL\Common\CAC\CallForTendersDocumentReference $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(?\App\UBL\Common\CAC\CallForTendersDocumentReference $callForTendersDocumentReference = null)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }
}

