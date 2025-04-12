<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TransportMeansType
 *
 * ABIE
 *  Transport Means. Details
 *  A class to describe a particular vehicle or vessel used for the conveyance of goods or persons.
 *  Transport Means
 *  Conveyance
 * XSD Type: TransportMeansType
 */
class TransportMeansType
{
    /**
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier for the regular service schedule of this means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @var \App\UBL\Common\CBC\JourneyID $journeyID
     */
    private $journeyID = null;

    /**
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  An identifier for the country in which this means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  LIB
     *
     * @var \App\UBL\Common\CBC\RegistrationNationalityID $registrationNationalityID
     */
    private $registrationNationalityID = null;

    /**
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @var \App\UBL\Common\CBC\RegistrationNationality[] $registrationNationality
     */
    private $registrationNationality = [
        
    ];

    /**
     * BBIE
     *  Transport Means. Direction Code. Code
     *  A code signifying the direction of this means of transport.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  North , East
     *
     * @var \App\UBL\Common\CBC\DirectionCode $directionCode
     */
    private $directionCode = null;

    /**
     * BBIE
     *  Transport Means. Transport Means Type Code. Code
     *  A code signifying the type of this means of transport (truck, vessel, etc.).
     *  0..1
     *  Transport Means
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\TransportMeansTypeCode $transportMeansTypeCode
     */
    private $transportMeansTypeCode = null;

    /**
     * BBIE
     *  Transport Means. Trade Service Code. Code
     *  A code signifying the service regularly provided by the carrier operating this means of transport.
     *  0..1
     *  Transport Means
     *  Trade Service Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\TradeServiceCode $tradeServiceCode
     */
    private $tradeServiceCode = null;

    /**
     * ASBIE
     *  Transport Means. Stowage
     *  The location within the means of transport where goods are to be or have been stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @var \App\UBL\Common\CAC\Stowage $stowage
     */
    private $stowage = null;

    /**
     * ASBIE
     *  Transport Means. Air Transport
     *  An aircraft used for transport.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *  Air Transport
     *
     * @var \App\UBL\Common\CAC\AirTransport $airTransport
     */
    private $airTransport = null;

    /**
     * ASBIE
     *  Transport Means. Road Transport
     *  A vehicle used for road transport.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *  Road Transport
     *
     * @var \App\UBL\Common\CAC\RoadTransport $roadTransport
     */
    private $roadTransport = null;

    /**
     * ASBIE
     *  Transport Means. Rail Transport
     *  Equipment used for rail transport.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *  Rail Transport
     *
     * @var \App\UBL\Common\CAC\RailTransport $railTransport
     */
    private $railTransport = null;

    /**
     * ASBIE
     *  Transport Means. Maritime Transport
     *  A vessel used for transport by water (not only by sea).
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *  Maritime Transport
     *
     * @var \App\UBL\Common\CAC\MaritimeTransport $maritimeTransport
     */
    private $maritimeTransport = null;

    /**
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  The party that owns this means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\OwnerParty $ownerParty
     */
    private $ownerParty = null;

    /**
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \App\UBL\Common\CAC\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * Gets as journeyID
     *
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier for the regular service schedule of this means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @return \App\UBL\Common\CBC\JourneyID
     */
    public function getJourneyID()
    {
        return $this->journeyID;
    }

    /**
     * Sets a new journeyID
     *
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier for the regular service schedule of this means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @param \App\UBL\Common\CBC\JourneyID $journeyID
     * @return self
     */
    public function setJourneyID(?\App\UBL\Common\CBC\JourneyID $journeyID = null)
    {
        $this->journeyID = $journeyID;
        return $this;
    }

    /**
     * Gets as registrationNationalityID
     *
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  An identifier for the country in which this means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  LIB
     *
     * @return \App\UBL\Common\CBC\RegistrationNationalityID
     */
    public function getRegistrationNationalityID()
    {
        return $this->registrationNationalityID;
    }

    /**
     * Sets a new registrationNationalityID
     *
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  An identifier for the country in which this means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  LIB
     *
     * @param \App\UBL\Common\CBC\RegistrationNationalityID $registrationNationalityID
     * @return self
     */
    public function setRegistrationNationalityID(?\App\UBL\Common\CBC\RegistrationNationalityID $registrationNationalityID = null)
    {
        $this->registrationNationalityID = $registrationNationalityID;
        return $this;
    }

    /**
     * Adds as registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @return self
     * @param \App\UBL\Common\CBC\RegistrationNationality $registrationNationality
     */
    public function addToRegistrationNationality(\App\UBL\Common\CBC\RegistrationNationality $registrationNationality)
    {
        $this->registrationNationality[] = $registrationNationality;
        return $this;
    }

    /**
     * isset registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistrationNationality($index)
    {
        return isset($this->registrationNationality[$index]);
    }

    /**
     * unset registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistrationNationality($index)
    {
        unset($this->registrationNationality[$index]);
    }

    /**
     * Gets as registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @return \App\UBL\Common\CBC\RegistrationNationality[]
     */
    public function getRegistrationNationality()
    {
        return $this->registrationNationality;
    }

    /**
     * Sets a new registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param \App\UBL\Common\CBC\RegistrationNationality[] $registrationNationality
     * @return self
     */
    public function setRegistrationNationality(?array $registrationNationality = null)
    {
        $this->registrationNationality = $registrationNationality;
        return $this;
    }

    /**
     * Gets as directionCode
     *
     * BBIE
     *  Transport Means. Direction Code. Code
     *  A code signifying the direction of this means of transport.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  North , East
     *
     * @return \App\UBL\Common\CBC\DirectionCode
     */
    public function getDirectionCode()
    {
        return $this->directionCode;
    }

    /**
     * Sets a new directionCode
     *
     * BBIE
     *  Transport Means. Direction Code. Code
     *  A code signifying the direction of this means of transport.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  North , East
     *
     * @param \App\UBL\Common\CBC\DirectionCode $directionCode
     * @return self
     */
    public function setDirectionCode(?\App\UBL\Common\CBC\DirectionCode $directionCode = null)
    {
        $this->directionCode = $directionCode;
        return $this;
    }

    /**
     * Gets as transportMeansTypeCode
     *
     * BBIE
     *  Transport Means. Transport Means Type Code. Code
     *  A code signifying the type of this means of transport (truck, vessel, etc.).
     *  0..1
     *  Transport Means
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\TransportMeansTypeCode
     */
    public function getTransportMeansTypeCode()
    {
        return $this->transportMeansTypeCode;
    }

    /**
     * Sets a new transportMeansTypeCode
     *
     * BBIE
     *  Transport Means. Transport Means Type Code. Code
     *  A code signifying the type of this means of transport (truck, vessel, etc.).
     *  0..1
     *  Transport Means
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\TransportMeansTypeCode $transportMeansTypeCode
     * @return self
     */
    public function setTransportMeansTypeCode(?\App\UBL\Common\CBC\TransportMeansTypeCode $transportMeansTypeCode = null)
    {
        $this->transportMeansTypeCode = $transportMeansTypeCode;
        return $this;
    }

    /**
     * Gets as tradeServiceCode
     *
     * BBIE
     *  Transport Means. Trade Service Code. Code
     *  A code signifying the service regularly provided by the carrier operating this means of transport.
     *  0..1
     *  Transport Means
     *  Trade Service Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\TradeServiceCode
     */
    public function getTradeServiceCode()
    {
        return $this->tradeServiceCode;
    }

    /**
     * Sets a new tradeServiceCode
     *
     * BBIE
     *  Transport Means. Trade Service Code. Code
     *  A code signifying the service regularly provided by the carrier operating this means of transport.
     *  0..1
     *  Transport Means
     *  Trade Service Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\TradeServiceCode $tradeServiceCode
     * @return self
     */
    public function setTradeServiceCode(?\App\UBL\Common\CBC\TradeServiceCode $tradeServiceCode = null)
    {
        $this->tradeServiceCode = $tradeServiceCode;
        return $this;
    }

    /**
     * Gets as stowage
     *
     * ASBIE
     *  Transport Means. Stowage
     *  The location within the means of transport where goods are to be or have been stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @return \App\UBL\Common\CAC\Stowage
     */
    public function getStowage()
    {
        return $this->stowage;
    }

    /**
     * Sets a new stowage
     *
     * ASBIE
     *  Transport Means. Stowage
     *  The location within the means of transport where goods are to be or have been stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @param \App\UBL\Common\CAC\Stowage $stowage
     * @return self
     */
    public function setStowage(?\App\UBL\Common\CAC\Stowage $stowage = null)
    {
        $this->stowage = $stowage;
        return $this;
    }

    /**
     * Gets as airTransport
     *
     * ASBIE
     *  Transport Means. Air Transport
     *  An aircraft used for transport.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *  Air Transport
     *
     * @return \App\UBL\Common\CAC\AirTransport
     */
    public function getAirTransport()
    {
        return $this->airTransport;
    }

    /**
     * Sets a new airTransport
     *
     * ASBIE
     *  Transport Means. Air Transport
     *  An aircraft used for transport.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *  Air Transport
     *
     * @param \App\UBL\Common\CAC\AirTransport $airTransport
     * @return self
     */
    public function setAirTransport(?\App\UBL\Common\CAC\AirTransport $airTransport = null)
    {
        $this->airTransport = $airTransport;
        return $this;
    }

    /**
     * Gets as roadTransport
     *
     * ASBIE
     *  Transport Means. Road Transport
     *  A vehicle used for road transport.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *  Road Transport
     *
     * @return \App\UBL\Common\CAC\RoadTransport
     */
    public function getRoadTransport()
    {
        return $this->roadTransport;
    }

    /**
     * Sets a new roadTransport
     *
     * ASBIE
     *  Transport Means. Road Transport
     *  A vehicle used for road transport.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *  Road Transport
     *
     * @param \App\UBL\Common\CAC\RoadTransport $roadTransport
     * @return self
     */
    public function setRoadTransport(?\App\UBL\Common\CAC\RoadTransport $roadTransport = null)
    {
        $this->roadTransport = $roadTransport;
        return $this;
    }

    /**
     * Gets as railTransport
     *
     * ASBIE
     *  Transport Means. Rail Transport
     *  Equipment used for rail transport.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *  Rail Transport
     *
     * @return \App\UBL\Common\CAC\RailTransport
     */
    public function getRailTransport()
    {
        return $this->railTransport;
    }

    /**
     * Sets a new railTransport
     *
     * ASBIE
     *  Transport Means. Rail Transport
     *  Equipment used for rail transport.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *  Rail Transport
     *
     * @param \App\UBL\Common\CAC\RailTransport $railTransport
     * @return self
     */
    public function setRailTransport(?\App\UBL\Common\CAC\RailTransport $railTransport = null)
    {
        $this->railTransport = $railTransport;
        return $this;
    }

    /**
     * Gets as maritimeTransport
     *
     * ASBIE
     *  Transport Means. Maritime Transport
     *  A vessel used for transport by water (not only by sea).
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *  Maritime Transport
     *
     * @return \App\UBL\Common\CAC\MaritimeTransport
     */
    public function getMaritimeTransport()
    {
        return $this->maritimeTransport;
    }

    /**
     * Sets a new maritimeTransport
     *
     * ASBIE
     *  Transport Means. Maritime Transport
     *  A vessel used for transport by water (not only by sea).
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *  Maritime Transport
     *
     * @param \App\UBL\Common\CAC\MaritimeTransport $maritimeTransport
     * @return self
     */
    public function setMaritimeTransport(?\App\UBL\Common\CAC\MaritimeTransport $maritimeTransport = null)
    {
        $this->maritimeTransport = $maritimeTransport;
        return $this;
    }

    /**
     * Gets as ownerParty
     *
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  The party that owns this means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\OwnerParty
     */
    public function getOwnerParty()
    {
        return $this->ownerParty;
    }

    /**
     * Sets a new ownerParty
     *
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  The party that owns this means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\OwnerParty $ownerParty
     * @return self
     */
    public function setOwnerParty(?\App\UBL\Common\CAC\OwnerParty $ownerParty = null)
    {
        $this->ownerParty = $ownerParty;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \App\UBL\Common\CAC\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\App\UBL\Common\CAC\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \App\UBL\Common\CAC\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \App\UBL\Common\CAC\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(?array $measurementDimension = null)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }
}

