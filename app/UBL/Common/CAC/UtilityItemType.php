<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing UtilityItemType
 *
 * ABIE
 *  Utility Item. Details
 *  A class to describe the consumption of a utility product.
 *  Utility Item
 * XSD Type: UtilityItemType
 */
class UtilityItemType
{
    /**
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
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
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @var \App\UBL\Common\CBC\SubscriberID $subscriberID
     */
    private $subscriberID = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @var \App\UBL\Common\CBC\PackQuantity $packQuantity
     */
    private $packQuantity = null;

    /**
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @var \App\UBL\Common\CBC\PackSizeNumeric $packSizeNumeric
     */
    private $packSizeNumeric = null;

    /**
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @var \App\UBL\Common\CBC\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @var \App\UBL\Common\CBC\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\CurrentChargeType $currentChargeType
     */
    private $currentChargeType = null;

    /**
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\CurrentChargeTypeCode $currentChargeTypeCode
     */
    private $currentChargeTypeCode = null;

    /**
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\OneTimeChargeType $oneTimeChargeType
     */
    private $oneTimeChargeType = null;

    /**
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     */
    private $oneTimeChargeTypeCode = null;

    /**
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \App\UBL\Common\CAC\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \App\UBL\Common\CAC\Contract $contract
     */
    private $contract = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
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
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
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
     * Gets as subscriberID
     *
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @return \App\UBL\Common\CBC\SubscriberID
     */
    public function getSubscriberID()
    {
        return $this->subscriberID;
    }

    /**
     * Sets a new subscriberID
     *
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @param \App\UBL\Common\CBC\SubscriberID $subscriberID
     * @return self
     */
    public function setSubscriberID(?\App\UBL\Common\CBC\SubscriberID $subscriberID = null)
    {
        $this->subscriberID = $subscriberID;
        return $this;
    }

    /**
     * Gets as subscriberType
     *
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Sets a new subscriberType
     *
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\SubscriberType $subscriberType
     * @return self
     */
    public function setSubscriberType(?\App\UBL\Common\CBC\SubscriberType $subscriberType = null)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Gets as subscriberTypeCode
     *
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\SubscriberTypeCode
     */
    public function getSubscriberTypeCode()
    {
        return $this->subscriberTypeCode;
    }

    /**
     * Sets a new subscriberTypeCode
     *
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\SubscriberTypeCode $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(?\App\UBL\Common\CBC\SubscriberTypeCode $subscriberTypeCode = null)
    {
        $this->subscriberTypeCode = $subscriberTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @return self
     * @param \App\UBL\Common\CBC\Description $description
     */
    public function addToDescription(\App\UBL\Common\CBC\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @return \App\UBL\Common\CBC\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @param \App\UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as packQuantity
     *
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @return \App\UBL\Common\CBC\PackQuantity
     */
    public function getPackQuantity()
    {
        return $this->packQuantity;
    }

    /**
     * Sets a new packQuantity
     *
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @param \App\UBL\Common\CBC\PackQuantity $packQuantity
     * @return self
     */
    public function setPackQuantity(?\App\UBL\Common\CBC\PackQuantity $packQuantity = null)
    {
        $this->packQuantity = $packQuantity;
        return $this;
    }

    /**
     * Gets as packSizeNumeric
     *
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @return \App\UBL\Common\CBC\PackSizeNumeric
     */
    public function getPackSizeNumeric()
    {
        return $this->packSizeNumeric;
    }

    /**
     * Sets a new packSizeNumeric
     *
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @param \App\UBL\Common\CBC\PackSizeNumeric $packSizeNumeric
     * @return self
     */
    public function setPackSizeNumeric(?\App\UBL\Common\CBC\PackSizeNumeric $packSizeNumeric = null)
    {
        $this->packSizeNumeric = $packSizeNumeric;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @return \App\UBL\Common\CBC\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @param \App\UBL\Common\CBC\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(?\App\UBL\Common\CBC\ConsumptionType $consumptionType = null)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @return \App\UBL\Common\CBC\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @param \App\UBL\Common\CBC\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?\App\UBL\Common\CBC\ConsumptionTypeCode $consumptionTypeCode = null)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as currentChargeType
     *
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\CurrentChargeType
     */
    public function getCurrentChargeType()
    {
        return $this->currentChargeType;
    }

    /**
     * Sets a new currentChargeType
     *
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\CurrentChargeType $currentChargeType
     * @return self
     */
    public function setCurrentChargeType(?\App\UBL\Common\CBC\CurrentChargeType $currentChargeType = null)
    {
        $this->currentChargeType = $currentChargeType;
        return $this;
    }

    /**
     * Gets as currentChargeTypeCode
     *
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\CurrentChargeTypeCode
     */
    public function getCurrentChargeTypeCode()
    {
        return $this->currentChargeTypeCode;
    }

    /**
     * Sets a new currentChargeTypeCode
     *
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\CurrentChargeTypeCode $currentChargeTypeCode
     * @return self
     */
    public function setCurrentChargeTypeCode(?\App\UBL\Common\CBC\CurrentChargeTypeCode $currentChargeTypeCode = null)
    {
        $this->currentChargeTypeCode = $currentChargeTypeCode;
        return $this;
    }

    /**
     * Gets as oneTimeChargeType
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\OneTimeChargeType
     */
    public function getOneTimeChargeType()
    {
        return $this->oneTimeChargeType;
    }

    /**
     * Sets a new oneTimeChargeType
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\OneTimeChargeType $oneTimeChargeType
     * @return self
     */
    public function setOneTimeChargeType(?\App\UBL\Common\CBC\OneTimeChargeType $oneTimeChargeType = null)
    {
        $this->oneTimeChargeType = $oneTimeChargeType;
        return $this;
    }

    /**
     * Gets as oneTimeChargeTypeCode
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\OneTimeChargeTypeCode
     */
    public function getOneTimeChargeTypeCode()
    {
        return $this->oneTimeChargeTypeCode;
    }

    /**
     * Sets a new oneTimeChargeTypeCode
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     * @return self
     */
    public function setOneTimeChargeTypeCode(?\App\UBL\Common\CBC\OneTimeChargeTypeCode $oneTimeChargeTypeCode = null)
    {
        $this->oneTimeChargeTypeCode = $oneTimeChargeTypeCode;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \App\UBL\Common\CAC\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \App\UBL\Common\CAC\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(?\App\UBL\Common\CAC\TaxCategory $taxCategory = null)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \App\UBL\Common\CAC\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \App\UBL\Common\CAC\Contract $contract
     * @return self
     */
    public function setContract(?\App\UBL\Common\CAC\Contract $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }
}

