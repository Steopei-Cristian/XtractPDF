<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ItemInstanceType
 *
 * ABIE
 *  Item Instance. Details
 *  A class to describe a specific, trackable instance of an item.
 *  Item Instance
 * XSD Type: ItemInstanceType
 */
class ItemInstanceType
{
    /**
     * BBIE
     *  Item Instance. Product Trace_ Identifier. Identifier
     *  An identifier used for tracing this item instance, such as the EPC number used in RFID.
     *  0..1
     *  Item Instance
     *  Product Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ProductTraceID $productTraceID
     */
    private $productTraceID = null;

    /**
     * BBIE
     *  Item Instance. Manufacture Date. Date
     *  The date on which this item instance was manufactured.
     *  0..1
     *  Item Instance
     *  Manufacture Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $manufactureDate
     */
    private $manufactureDate = null;

    /**
     * BBIE
     *  Item Instance. Manufacture Time. Time
     *  The time at which this item instance was manufactured.
     *  0..1
     *  Item Instance
     *  Manufacture Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $manufactureTime
     */
    private $manufactureTime = null;

    /**
     * BBIE
     *  Item Instance. Best Before Date. Date
     *  The date before which it is best to use this item instance.
     *  0..1
     *  Item Instance
     *  Best Before Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $bestBeforeDate
     */
    private $bestBeforeDate = null;

    /**
     * BBIE
     *  Item Instance. Registration Identifier. Identifier
     *  The registration identifier of this item instance.
     *  0..1
     *  Item Instance
     *  Registration Identifier
     *  Identifier
     *  Identifier. Type
     *  car registration or licensing number
     *
     * @var \App\UBL\Common\CBC\RegistrationID $registrationID
     */
    private $registrationID = null;

    /**
     * BBIE
     *  Item Instance. Serial Identifier. Identifier
     *  The serial number of this item instance.
     *  0..1
     *  Item Instance
     *  Serial Identifier
     *  Identifier
     *  Identifier. Type
     *  chassis number of a car
     *
     * @var \App\UBL\Common\CBC\SerialID $serialID
     */
    private $serialID = null;

    /**
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An additional property of this item instance.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @var \App\UBL\Common\CAC\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
    ];

    /**
     * ASBIE
     *  Item Instance. Lot Identification
     *  The lot identifier of this item instance (the identifier that allows recall of the item if necessary).
     *  0..1
     *  Item Instance
     *  Lot Identification
     *  Lot Identification
     *  Lot Identification
     *
     * @var \App\UBL\Common\CAC\LotIdentification $lotIdentification
     */
    private $lotIdentification = null;

    /**
     * Gets as productTraceID
     *
     * BBIE
     *  Item Instance. Product Trace_ Identifier. Identifier
     *  An identifier used for tracing this item instance, such as the EPC number used in RFID.
     *  0..1
     *  Item Instance
     *  Product Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\ProductTraceID
     */
    public function getProductTraceID()
    {
        return $this->productTraceID;
    }

    /**
     * Sets a new productTraceID
     *
     * BBIE
     *  Item Instance. Product Trace_ Identifier. Identifier
     *  An identifier used for tracing this item instance, such as the EPC number used in RFID.
     *  0..1
     *  Item Instance
     *  Product Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\ProductTraceID $productTraceID
     * @return self
     */
    public function setProductTraceID(?\App\UBL\Common\CBC\ProductTraceID $productTraceID = null)
    {
        $this->productTraceID = $productTraceID;
        return $this;
    }

    /**
     * Gets as manufactureDate
     *
     * BBIE
     *  Item Instance. Manufacture Date. Date
     *  The date on which this item instance was manufactured.
     *  0..1
     *  Item Instance
     *  Manufacture Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }

    /**
     * Sets a new manufactureDate
     *
     * BBIE
     *  Item Instance. Manufacture Date. Date
     *  The date on which this item instance was manufactured.
     *  0..1
     *  Item Instance
     *  Manufacture Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $manufactureDate
     * @return self
     */
    public function setManufactureDate(?\DateTime $manufactureDate = null)
    {
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * Gets as manufactureTime
     *
     * BBIE
     *  Item Instance. Manufacture Time. Time
     *  The time at which this item instance was manufactured.
     *  0..1
     *  Item Instance
     *  Manufacture Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getManufactureTime()
    {
        return $this->manufactureTime;
    }

    /**
     * Sets a new manufactureTime
     *
     * BBIE
     *  Item Instance. Manufacture Time. Time
     *  The time at which this item instance was manufactured.
     *  0..1
     *  Item Instance
     *  Manufacture Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $manufactureTime
     * @return self
     */
    public function setManufactureTime(?\DateTime $manufactureTime = null)
    {
        $this->manufactureTime = $manufactureTime;
        return $this;
    }

    /**
     * Gets as bestBeforeDate
     *
     * BBIE
     *  Item Instance. Best Before Date. Date
     *  The date before which it is best to use this item instance.
     *  0..1
     *  Item Instance
     *  Best Before Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getBestBeforeDate()
    {
        return $this->bestBeforeDate;
    }

    /**
     * Sets a new bestBeforeDate
     *
     * BBIE
     *  Item Instance. Best Before Date. Date
     *  The date before which it is best to use this item instance.
     *  0..1
     *  Item Instance
     *  Best Before Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $bestBeforeDate
     * @return self
     */
    public function setBestBeforeDate(?\DateTime $bestBeforeDate = null)
    {
        $this->bestBeforeDate = $bestBeforeDate;
        return $this;
    }

    /**
     * Gets as registrationID
     *
     * BBIE
     *  Item Instance. Registration Identifier. Identifier
     *  The registration identifier of this item instance.
     *  0..1
     *  Item Instance
     *  Registration Identifier
     *  Identifier
     *  Identifier. Type
     *  car registration or licensing number
     *
     * @return \App\UBL\Common\CBC\RegistrationID
     */
    public function getRegistrationID()
    {
        return $this->registrationID;
    }

    /**
     * Sets a new registrationID
     *
     * BBIE
     *  Item Instance. Registration Identifier. Identifier
     *  The registration identifier of this item instance.
     *  0..1
     *  Item Instance
     *  Registration Identifier
     *  Identifier
     *  Identifier. Type
     *  car registration or licensing number
     *
     * @param \App\UBL\Common\CBC\RegistrationID $registrationID
     * @return self
     */
    public function setRegistrationID(?\App\UBL\Common\CBC\RegistrationID $registrationID = null)
    {
        $this->registrationID = $registrationID;
        return $this;
    }

    /**
     * Gets as serialID
     *
     * BBIE
     *  Item Instance. Serial Identifier. Identifier
     *  The serial number of this item instance.
     *  0..1
     *  Item Instance
     *  Serial Identifier
     *  Identifier
     *  Identifier. Type
     *  chassis number of a car
     *
     * @return \App\UBL\Common\CBC\SerialID
     */
    public function getSerialID()
    {
        return $this->serialID;
    }

    /**
     * Sets a new serialID
     *
     * BBIE
     *  Item Instance. Serial Identifier. Identifier
     *  The serial number of this item instance.
     *  0..1
     *  Item Instance
     *  Serial Identifier
     *  Identifier
     *  Identifier. Type
     *  chassis number of a car
     *
     * @param \App\UBL\Common\CBC\SerialID $serialID
     * @return self
     */
    public function setSerialID(?\App\UBL\Common\CBC\SerialID $serialID = null)
    {
        $this->serialID = $serialID;
        return $this;
    }

    /**
     * Adds as additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An additional property of this item instance.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return self
     * @param \App\UBL\Common\CAC\AdditionalItemProperty $additionalItemProperty
     */
    public function addToAdditionalItemProperty(\App\UBL\Common\CAC\AdditionalItemProperty $additionalItemProperty)
    {
        $this->additionalItemProperty[] = $additionalItemProperty;
        return $this;
    }

    /**
     * isset additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An additional property of this item instance.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemProperty($index)
    {
        return isset($this->additionalItemProperty[$index]);
    }

    /**
     * unset additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An additional property of this item instance.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemProperty($index)
    {
        unset($this->additionalItemProperty[$index]);
    }

    /**
     * Gets as additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An additional property of this item instance.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return \App\UBL\Common\CAC\AdditionalItemProperty[]
     */
    public function getAdditionalItemProperty()
    {
        return $this->additionalItemProperty;
    }

    /**
     * Sets a new additionalItemProperty
     *
     * ASBIE
     *  Item Instance. Additional_ Item Property. Item Property
     *  An additional property of this item instance.
     *  0..n
     *  Item Instance
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param \App\UBL\Common\CAC\AdditionalItemProperty[] $additionalItemProperty
     * @return self
     */
    public function setAdditionalItemProperty(?array $additionalItemProperty = null)
    {
        $this->additionalItemProperty = $additionalItemProperty;
        return $this;
    }

    /**
     * Gets as lotIdentification
     *
     * ASBIE
     *  Item Instance. Lot Identification
     *  The lot identifier of this item instance (the identifier that allows recall of the item if necessary).
     *  0..1
     *  Item Instance
     *  Lot Identification
     *  Lot Identification
     *  Lot Identification
     *
     * @return \App\UBL\Common\CAC\LotIdentification
     */
    public function getLotIdentification()
    {
        return $this->lotIdentification;
    }

    /**
     * Sets a new lotIdentification
     *
     * ASBIE
     *  Item Instance. Lot Identification
     *  The lot identifier of this item instance (the identifier that allows recall of the item if necessary).
     *  0..1
     *  Item Instance
     *  Lot Identification
     *  Lot Identification
     *  Lot Identification
     *
     * @param \App\UBL\Common\CAC\LotIdentification $lotIdentification
     * @return self
     */
    public function setLotIdentification(?\App\UBL\Common\CAC\LotIdentification $lotIdentification = null)
    {
        $this->lotIdentification = $lotIdentification;
        return $this;
    }
}

