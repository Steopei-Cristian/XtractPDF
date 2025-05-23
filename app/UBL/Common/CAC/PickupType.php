<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing PickupType
 *
 * ABIE
 *  Pickup. Details
 *  A class to describe a pickup for delivery.
 *  Pickup
 *  Collection
 * XSD Type: PickupType
 */
class PickupType
{
    /**
     * BBIE
     *  Pickup. Identifier
     *  An identifier for this pickup.
     *  0..1
     *  Pickup
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Pickup. Actual_ Pickup Date. Date
     *  The actual pickup date.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $actualPickupDate
     */
    private $actualPickupDate = null;

    /**
     * BBIE
     *  Pickup. Actual_ Pickup Time. Time
     *  The actual pickup time.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $actualPickupTime
     */
    private $actualPickupTime = null;

    /**
     * BBIE
     *  Pickup. Earliest_ Pickup Date. Date
     *  The earliest pickup date.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $earliestPickupDate
     */
    private $earliestPickupDate = null;

    /**
     * BBIE
     *  Pickup. Earliest_ Pickup Time. Time
     *  The earliest pickup time.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $earliestPickupTime
     */
    private $earliestPickupTime = null;

    /**
     * BBIE
     *  Pickup. Latest_ Pickup Date. Date
     *  The latest pickup date.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $latestPickupDate
     */
    private $latestPickupDate = null;

    /**
     * BBIE
     *  Pickup. Latest_ Pickup Time. Time
     *  The latest pickup time.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $latestPickupTime
     */
    private $latestPickupTime = null;

    /**
     * ASBIE
     *  Pickup. Pickup_ Location. Location
     *  The pickup location.
     *  0..1
     *  Pickup
     *  Pickup
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\PickupLocation $pickupLocation
     */
    private $pickupLocation = null;

    /**
     * ASBIE
     *  Pickup. Pickup_ Party. Party
     *  The party responsible for picking up a delivery.
     *  0..1
     *  Pickup
     *  Pickup
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\PickupParty $pickupParty
     */
    private $pickupParty = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Pickup. Identifier
     *  An identifier for this pickup.
     *  0..1
     *  Pickup
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Pickup. Identifier
     *  An identifier for this pickup.
     *  0..1
     *  Pickup
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(?\App\UBL\Common\CBC\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as actualPickupDate
     *
     * BBIE
     *  Pickup. Actual_ Pickup Date. Date
     *  The actual pickup date.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getActualPickupDate()
    {
        return $this->actualPickupDate;
    }

    /**
     * Sets a new actualPickupDate
     *
     * BBIE
     *  Pickup. Actual_ Pickup Date. Date
     *  The actual pickup date.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $actualPickupDate
     * @return self
     */
    public function setActualPickupDate(?\DateTime $actualPickupDate = null)
    {
        $this->actualPickupDate = $actualPickupDate;
        return $this;
    }

    /**
     * Gets as actualPickupTime
     *
     * BBIE
     *  Pickup. Actual_ Pickup Time. Time
     *  The actual pickup time.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getActualPickupTime()
    {
        return $this->actualPickupTime;
    }

    /**
     * Sets a new actualPickupTime
     *
     * BBIE
     *  Pickup. Actual_ Pickup Time. Time
     *  The actual pickup time.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $actualPickupTime
     * @return self
     */
    public function setActualPickupTime(?\DateTime $actualPickupTime = null)
    {
        $this->actualPickupTime = $actualPickupTime;
        return $this;
    }

    /**
     * Gets as earliestPickupDate
     *
     * BBIE
     *  Pickup. Earliest_ Pickup Date. Date
     *  The earliest pickup date.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEarliestPickupDate()
    {
        return $this->earliestPickupDate;
    }

    /**
     * Sets a new earliestPickupDate
     *
     * BBIE
     *  Pickup. Earliest_ Pickup Date. Date
     *  The earliest pickup date.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $earliestPickupDate
     * @return self
     */
    public function setEarliestPickupDate(?\DateTime $earliestPickupDate = null)
    {
        $this->earliestPickupDate = $earliestPickupDate;
        return $this;
    }

    /**
     * Gets as earliestPickupTime
     *
     * BBIE
     *  Pickup. Earliest_ Pickup Time. Time
     *  The earliest pickup time.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEarliestPickupTime()
    {
        return $this->earliestPickupTime;
    }

    /**
     * Sets a new earliestPickupTime
     *
     * BBIE
     *  Pickup. Earliest_ Pickup Time. Time
     *  The earliest pickup time.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $earliestPickupTime
     * @return self
     */
    public function setEarliestPickupTime(?\DateTime $earliestPickupTime = null)
    {
        $this->earliestPickupTime = $earliestPickupTime;
        return $this;
    }

    /**
     * Gets as latestPickupDate
     *
     * BBIE
     *  Pickup. Latest_ Pickup Date. Date
     *  The latest pickup date.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLatestPickupDate()
    {
        return $this->latestPickupDate;
    }

    /**
     * Sets a new latestPickupDate
     *
     * BBIE
     *  Pickup. Latest_ Pickup Date. Date
     *  The latest pickup date.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $latestPickupDate
     * @return self
     */
    public function setLatestPickupDate(?\DateTime $latestPickupDate = null)
    {
        $this->latestPickupDate = $latestPickupDate;
        return $this;
    }

    /**
     * Gets as latestPickupTime
     *
     * BBIE
     *  Pickup. Latest_ Pickup Time. Time
     *  The latest pickup time.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getLatestPickupTime()
    {
        return $this->latestPickupTime;
    }

    /**
     * Sets a new latestPickupTime
     *
     * BBIE
     *  Pickup. Latest_ Pickup Time. Time
     *  The latest pickup time.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $latestPickupTime
     * @return self
     */
    public function setLatestPickupTime(?\DateTime $latestPickupTime = null)
    {
        $this->latestPickupTime = $latestPickupTime;
        return $this;
    }

    /**
     * Gets as pickupLocation
     *
     * ASBIE
     *  Pickup. Pickup_ Location. Location
     *  The pickup location.
     *  0..1
     *  Pickup
     *  Pickup
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\PickupLocation
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * Sets a new pickupLocation
     *
     * ASBIE
     *  Pickup. Pickup_ Location. Location
     *  The pickup location.
     *  0..1
     *  Pickup
     *  Pickup
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\PickupLocation $pickupLocation
     * @return self
     */
    public function setPickupLocation(?\App\UBL\Common\CAC\PickupLocation $pickupLocation = null)
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }

    /**
     * Gets as pickupParty
     *
     * ASBIE
     *  Pickup. Pickup_ Party. Party
     *  The party responsible for picking up a delivery.
     *  0..1
     *  Pickup
     *  Pickup
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\PickupParty
     */
    public function getPickupParty()
    {
        return $this->pickupParty;
    }

    /**
     * Sets a new pickupParty
     *
     * ASBIE
     *  Pickup. Pickup_ Party. Party
     *  The party responsible for picking up a delivery.
     *  0..1
     *  Pickup
     *  Pickup
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\PickupParty $pickupParty
     * @return self
     */
    public function setPickupParty(?\App\UBL\Common\CAC\PickupParty $pickupParty = null)
    {
        $this->pickupParty = $pickupParty;
        return $this;
    }
}

