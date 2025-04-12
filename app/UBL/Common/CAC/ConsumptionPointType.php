<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ConsumptionPointType
 *
 * ABIE
 *  Consumption Point. Details
 *  A class to define the point of consumption for a utility, such as a meter.
 *  Consumption Point
 * XSD Type: ConsumptionPointType
 */
class ConsumptionPointType
{
    /**
     * BBIE
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
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
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * BBIE
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
     *
     * @var \App\UBL\Common\CBC\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @var \App\UBL\Common\CBC\TotalDeliveredQuantity $totalDeliveredQuantity
     */
    private $totalDeliveredQuantity = null;

    /**
     * ASBIE
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
     *  Address
     *  Address
     *  Address
     *
     * @var \App\UBL\Common\CAC\Address $address
     */
    private $address = null;

    /**
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @var \App\UBL\Common\CAC\WebSiteAccess $webSiteAccess
     */
    private $webSiteAccess = null;

    /**
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @var \App\UBL\Common\CAC\UtilityMeter[] $utilityMeter
     */
    private $utilityMeter = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
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
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
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
     * Adds as description
     *
     * BBIE
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     * Gets as subscriberID
     *
     * BBIE
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
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
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
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
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
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
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
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
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
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
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
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
     * Gets as totalDeliveredQuantity
     *
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @return \App\UBL\Common\CBC\TotalDeliveredQuantity
     */
    public function getTotalDeliveredQuantity()
    {
        return $this->totalDeliveredQuantity;
    }

    /**
     * Sets a new totalDeliveredQuantity
     *
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @param \App\UBL\Common\CBC\TotalDeliveredQuantity $totalDeliveredQuantity
     * @return self
     */
    public function setTotalDeliveredQuantity(?\App\UBL\Common\CBC\TotalDeliveredQuantity $totalDeliveredQuantity = null)
    {
        $this->totalDeliveredQuantity = $totalDeliveredQuantity;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
     *  Address
     *  Address
     *  Address
     *
     * @return \App\UBL\Common\CAC\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
     *  Address
     *  Address
     *  Address
     *
     * @param \App\UBL\Common\CAC\Address $address
     * @return self
     */
    public function setAddress(?\App\UBL\Common\CAC\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as webSiteAccess
     *
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @return \App\UBL\Common\CAC\WebSiteAccess
     */
    public function getWebSiteAccess()
    {
        return $this->webSiteAccess;
    }

    /**
     * Sets a new webSiteAccess
     *
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param \App\UBL\Common\CAC\WebSiteAccess $webSiteAccess
     * @return self
     */
    public function setWebSiteAccess(?\App\UBL\Common\CAC\WebSiteAccess $webSiteAccess = null)
    {
        $this->webSiteAccess = $webSiteAccess;
        return $this;
    }

    /**
     * Adds as utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @return self
     * @param \App\UBL\Common\CAC\UtilityMeter $utilityMeter
     */
    public function addToUtilityMeter(\App\UBL\Common\CAC\UtilityMeter $utilityMeter)
    {
        $this->utilityMeter[] = $utilityMeter;
        return $this;
    }

    /**
     * isset utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUtilityMeter($index)
    {
        return isset($this->utilityMeter[$index]);
    }

    /**
     * unset utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUtilityMeter($index)
    {
        unset($this->utilityMeter[$index]);
    }

    /**
     * Gets as utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @return \App\UBL\Common\CAC\UtilityMeter[]
     */
    public function getUtilityMeter()
    {
        return $this->utilityMeter;
    }

    /**
     * Sets a new utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param \App\UBL\Common\CAC\UtilityMeter[] $utilityMeter
     * @return self
     */
    public function setUtilityMeter(?array $utilityMeter = null)
    {
        $this->utilityMeter = $utilityMeter;
        return $this;
    }
}

