<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ItemLocationQuantityType
 *
 * ABIE
 *  Item Location Quantity. Details
 *  A class for information about pricing structure, lead time, and location associated with an item.
 *  Item Location Quantity
 * XSD Type: ItemLocationQuantityType
 */
class ItemLocationQuantityType
{
    /**
     * BBIE
     *  Item Location Quantity. Lead Time. Measure
     *  The lead time, i.e., the time taken from the time at which an item is ordered to the time of its delivery.
     *  0..1
     *  Item Location Quantity
     *  Lead Time
     *  Measure
     *  Measure. Type
     *  2 days , 24 hours
     *
     * @var \App\UBL\Common\CBC\LeadTimeMeasure $leadTimeMeasure
     */
    private $leadTimeMeasure = null;

    /**
     * BBIE
     *  Item Location Quantity. Minimum_ Quantity. Quantity
     *  The minimum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes , 1 carton , 1000 sheets
     *
     * @var \App\UBL\Common\CBC\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Item Location Quantity. Maximum_ Quantity. Quantity
     *  The maximum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes , 1 carton , 1000 sheets
     *
     * @var \App\UBL\Common\CBC\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Item Location Quantity. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported item, as delivered, in the stated quantity to the stated location, is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Item Location Quantity
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  Text describing trade restrictions on the quantity of this item or on the item itself.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  not for export
     *
     * @var \App\UBL\Common\CBC\TradingRestrictions[] $tradingRestrictions
     */
    private $tradingRestrictions = [
        
    ];

    /**
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  The applicable sales territory.
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @var \App\UBL\Common\CAC\ApplicableTerritoryAddress[] $applicableTerritoryAddress
     */
    private $applicableTerritoryAddress = [
        
    ];

    /**
     * ASBIE
     *  Item Location Quantity. Price
     *  The price associated with the given location.
     *  0..1
     *  Item Location Quantity
     *  Price
     *  Price
     *  Price
     *
     * @var \App\UBL\Common\CAC\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  A delivery unit in which the item is located.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @var \App\UBL\Common\CAC\DeliveryUnit[] $deliveryUnit
     */
    private $deliveryUnit = [
        
    ];

    /**
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  A tax category applicable to this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \App\UBL\Common\CAC\ApplicableTaxCategory[] $applicableTaxCategory
     */
    private $applicableTaxCategory = [
        
    ];

    /**
     * ASBIE
     *  Item Location Quantity. Package
     *  The package to which this price applies.
     *  0..1
     *  Item Location Quantity
     *  Package
     *  Package
     *  Package
     *
     * @var \App\UBL\Common\CAC\Package $package
     */
    private $package = null;

    /**
     * ASBIE
     *  Item Location Quantity. Allowance Charge
     *  An allowance or charge associated with this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \App\UBL\Common\CAC\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Item Location Quantity. Dependent Price Reference
     *  The price of the item as a percentage of the price of some other item.
     *  0..1
     *  Item Location Quantity
     *  Dependent Price Reference
     *  Dependent Price Reference
     *  Dependent Price Reference
     *
     * @var \App\UBL\Common\CAC\DependentPriceReference $dependentPriceReference
     */
    private $dependentPriceReference = null;

    /**
     * Gets as leadTimeMeasure
     *
     * BBIE
     *  Item Location Quantity. Lead Time. Measure
     *  The lead time, i.e., the time taken from the time at which an item is ordered to the time of its delivery.
     *  0..1
     *  Item Location Quantity
     *  Lead Time
     *  Measure
     *  Measure. Type
     *  2 days , 24 hours
     *
     * @return \App\UBL\Common\CBC\LeadTimeMeasure
     */
    public function getLeadTimeMeasure()
    {
        return $this->leadTimeMeasure;
    }

    /**
     * Sets a new leadTimeMeasure
     *
     * BBIE
     *  Item Location Quantity. Lead Time. Measure
     *  The lead time, i.e., the time taken from the time at which an item is ordered to the time of its delivery.
     *  0..1
     *  Item Location Quantity
     *  Lead Time
     *  Measure
     *  Measure. Type
     *  2 days , 24 hours
     *
     * @param \App\UBL\Common\CBC\LeadTimeMeasure $leadTimeMeasure
     * @return self
     */
    public function setLeadTimeMeasure(?\App\UBL\Common\CBC\LeadTimeMeasure $leadTimeMeasure = null)
    {
        $this->leadTimeMeasure = $leadTimeMeasure;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Item Location Quantity. Minimum_ Quantity. Quantity
     *  The minimum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes , 1 carton , 1000 sheets
     *
     * @return \App\UBL\Common\CBC\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Item Location Quantity. Minimum_ Quantity. Quantity
     *  The minimum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes , 1 carton , 1000 sheets
     *
     * @param \App\UBL\Common\CBC\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?\App\UBL\Common\CBC\MinimumQuantity $minimumQuantity = null)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Item Location Quantity. Maximum_ Quantity. Quantity
     *  The maximum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes , 1 carton , 1000 sheets
     *
     * @return \App\UBL\Common\CBC\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Item Location Quantity. Maximum_ Quantity. Quantity
     *  The maximum quantity that can be ordered to qualify for a specific price.
     *  0..1
     *  Item Location Quantity
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes , 1 carton , 1000 sheets
     *
     * @param \App\UBL\Common\CBC\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?\App\UBL\Common\CBC\MaximumQuantity $maximumQuantity = null)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Item Location Quantity. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported item, as delivered, in the stated quantity to the stated location, is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Item Location Quantity
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Item Location Quantity. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported item, as delivered, in the stated quantity to the stated location, is subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Item Location Quantity
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }

    /**
     * Adds as tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  Text describing trade restrictions on the quantity of this item or on the item itself.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  not for export
     *
     * @return self
     * @param \App\UBL\Common\CBC\TradingRestrictions $tradingRestrictions
     */
    public function addToTradingRestrictions(\App\UBL\Common\CBC\TradingRestrictions $tradingRestrictions)
    {
        $this->tradingRestrictions[] = $tradingRestrictions;
        return $this;
    }

    /**
     * isset tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  Text describing trade restrictions on the quantity of this item or on the item itself.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  not for export
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTradingRestrictions($index)
    {
        return isset($this->tradingRestrictions[$index]);
    }

    /**
     * unset tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  Text describing trade restrictions on the quantity of this item or on the item itself.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  not for export
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTradingRestrictions($index)
    {
        unset($this->tradingRestrictions[$index]);
    }

    /**
     * Gets as tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  Text describing trade restrictions on the quantity of this item or on the item itself.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  not for export
     *
     * @return \App\UBL\Common\CBC\TradingRestrictions[]
     */
    public function getTradingRestrictions()
    {
        return $this->tradingRestrictions;
    }

    /**
     * Sets a new tradingRestrictions
     *
     * BBIE
     *  Item Location Quantity. Trading Restrictions. Text
     *  Text describing trade restrictions on the quantity of this item or on the item itself.
     *  0..n
     *  Item Location Quantity
     *  Trading Restrictions
     *  Text
     *  Text. Type
     *  not for export
     *
     * @param \App\UBL\Common\CBC\TradingRestrictions[] $tradingRestrictions
     * @return self
     */
    public function setTradingRestrictions(?array $tradingRestrictions = null)
    {
        $this->tradingRestrictions = $tradingRestrictions;
        return $this;
    }

    /**
     * Adds as applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  The applicable sales territory.
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @return self
     * @param \App\UBL\Common\CAC\ApplicableTerritoryAddress $applicableTerritoryAddress
     */
    public function addToApplicableTerritoryAddress(\App\UBL\Common\CAC\ApplicableTerritoryAddress $applicableTerritoryAddress)
    {
        $this->applicableTerritoryAddress[] = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * isset applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  The applicable sales territory.
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableTerritoryAddress($index)
    {
        return isset($this->applicableTerritoryAddress[$index]);
    }

    /**
     * unset applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  The applicable sales territory.
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableTerritoryAddress($index)
    {
        unset($this->applicableTerritoryAddress[$index]);
    }

    /**
     * Gets as applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  The applicable sales territory.
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @return \App\UBL\Common\CAC\ApplicableTerritoryAddress[]
     */
    public function getApplicableTerritoryAddress()
    {
        return $this->applicableTerritoryAddress;
    }

    /**
     * Sets a new applicableTerritoryAddress
     *
     * ASBIE
     *  Item Location Quantity. Applicable Territory_ Address. Address
     *  The applicable sales territory.
     *  0..n
     *  Item Location Quantity
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @param \App\UBL\Common\CAC\ApplicableTerritoryAddress[] $applicableTerritoryAddress
     * @return self
     */
    public function setApplicableTerritoryAddress(?array $applicableTerritoryAddress = null)
    {
        $this->applicableTerritoryAddress = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Item Location Quantity. Price
     *  The price associated with the given location.
     *  0..1
     *  Item Location Quantity
     *  Price
     *  Price
     *  Price
     *
     * @return \App\UBL\Common\CAC\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Item Location Quantity. Price
     *  The price associated with the given location.
     *  0..1
     *  Item Location Quantity
     *  Price
     *  Price
     *  Price
     *
     * @param \App\UBL\Common\CAC\Price $price
     * @return self
     */
    public function setPrice(?\App\UBL\Common\CAC\Price $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Adds as deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  A delivery unit in which the item is located.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return self
     * @param \App\UBL\Common\CAC\DeliveryUnit $deliveryUnit
     */
    public function addToDeliveryUnit(\App\UBL\Common\CAC\DeliveryUnit $deliveryUnit)
    {
        $this->deliveryUnit[] = $deliveryUnit;
        return $this;
    }

    /**
     * isset deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  A delivery unit in which the item is located.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryUnit($index)
    {
        return isset($this->deliveryUnit[$index]);
    }

    /**
     * unset deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  A delivery unit in which the item is located.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryUnit($index)
    {
        unset($this->deliveryUnit[$index]);
    }

    /**
     * Gets as deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  A delivery unit in which the item is located.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return \App\UBL\Common\CAC\DeliveryUnit[]
     */
    public function getDeliveryUnit()
    {
        return $this->deliveryUnit;
    }

    /**
     * Sets a new deliveryUnit
     *
     * ASBIE
     *  Item Location Quantity. Delivery Unit
     *  A delivery unit in which the item is located.
     *  0..n
     *  Item Location Quantity
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param \App\UBL\Common\CAC\DeliveryUnit[] $deliveryUnit
     * @return self
     */
    public function setDeliveryUnit(?array $deliveryUnit = null)
    {
        $this->deliveryUnit = $deliveryUnit;
        return $this;
    }

    /**
     * Adds as applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  A tax category applicable to this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param \App\UBL\Common\CAC\ApplicableTaxCategory $applicableTaxCategory
     */
    public function addToApplicableTaxCategory(\App\UBL\Common\CAC\ApplicableTaxCategory $applicableTaxCategory)
    {
        $this->applicableTaxCategory[] = $applicableTaxCategory;
        return $this;
    }

    /**
     * isset applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  A tax category applicable to this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableTaxCategory($index)
    {
        return isset($this->applicableTaxCategory[$index]);
    }

    /**
     * unset applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  A tax category applicable to this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableTaxCategory($index)
    {
        unset($this->applicableTaxCategory[$index]);
    }

    /**
     * Gets as applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  A tax category applicable to this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \App\UBL\Common\CAC\ApplicableTaxCategory[]
     */
    public function getApplicableTaxCategory()
    {
        return $this->applicableTaxCategory;
    }

    /**
     * Sets a new applicableTaxCategory
     *
     * ASBIE
     *  Item Location Quantity. Applicable_ Tax Category. Tax Category
     *  A tax category applicable to this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Applicable
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \App\UBL\Common\CAC\ApplicableTaxCategory[] $applicableTaxCategory
     * @return self
     */
    public function setApplicableTaxCategory(?array $applicableTaxCategory = null)
    {
        $this->applicableTaxCategory = $applicableTaxCategory;
        return $this;
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Item Location Quantity. Package
     *  The package to which this price applies.
     *  0..1
     *  Item Location Quantity
     *  Package
     *  Package
     *  Package
     *
     * @return \App\UBL\Common\CAC\Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Item Location Quantity. Package
     *  The package to which this price applies.
     *  0..1
     *  Item Location Quantity
     *  Package
     *  Package
     *  Package
     *
     * @param \App\UBL\Common\CAC\Package $package
     * @return self
     */
    public function setPackage(?\App\UBL\Common\CAC\Package $package = null)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Item Location Quantity. Allowance Charge
     *  An allowance or charge associated with this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \App\UBL\Common\CAC\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\App\UBL\Common\CAC\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Item Location Quantity. Allowance Charge
     *  An allowance or charge associated with this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Item Location Quantity. Allowance Charge
     *  An allowance or charge associated with this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Item Location Quantity. Allowance Charge
     *  An allowance or charge associated with this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \App\UBL\Common\CAC\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Item Location Quantity. Allowance Charge
     *  An allowance or charge associated with this item location quantity.
     *  0..n
     *  Item Location Quantity
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \App\UBL\Common\CAC\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as dependentPriceReference
     *
     * ASBIE
     *  Item Location Quantity. Dependent Price Reference
     *  The price of the item as a percentage of the price of some other item.
     *  0..1
     *  Item Location Quantity
     *  Dependent Price Reference
     *  Dependent Price Reference
     *  Dependent Price Reference
     *
     * @return \App\UBL\Common\CAC\DependentPriceReference
     */
    public function getDependentPriceReference()
    {
        return $this->dependentPriceReference;
    }

    /**
     * Sets a new dependentPriceReference
     *
     * ASBIE
     *  Item Location Quantity. Dependent Price Reference
     *  The price of the item as a percentage of the price of some other item.
     *  0..1
     *  Item Location Quantity
     *  Dependent Price Reference
     *  Dependent Price Reference
     *  Dependent Price Reference
     *
     * @param \App\UBL\Common\CAC\DependentPriceReference $dependentPriceReference
     * @return self
     */
    public function setDependentPriceReference(?\App\UBL\Common\CAC\DependentPriceReference $dependentPriceReference = null)
    {
        $this->dependentPriceReference = $dependentPriceReference;
        return $this;
    }
}

