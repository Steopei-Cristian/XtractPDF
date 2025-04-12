<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing LocationType
 *
 * ABIE
 *  Location. Details
 *  A class to describe a location.
 *  Location
 * XSD Type: LocationType
 */
class LocationType
{
    /**
     * BBIE
     *  Location. Identifier
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Conditions[] $conditions
     */
    private $conditions = [
        
    ];

    /**
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
     *
     * @var \UBL\Common\CBC\CountrySubentity $countrySubentity
     */
    private $countrySubentity = null;

    /**
     * BBIE
     *  Location. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @var \UBL\Common\CBC\CountrySubentityCode $countrySubentityCode
     */
    private $countrySubentityCode = null;

    /**
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\LocationTypeCode $locationTypeCode
     */
    private $locationTypeCode = null;

    /**
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\InformationURI $informationURI
     */
    private $informationURI = null;

    /**
     * BBIE
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @var \UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL\Common\CAC\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Location. Address
     *  The address of this location.
     *  0..1
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @var \UBL\Common\CAC\Address $address
     */
    private $address = null;

    /**
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL\Common\CAC\SubsidiaryLocation[] $subsidiaryLocation
     */
    private $subsidiaryLocation = [
        
    ];

    /**
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @var \UBL\Common\CAC\LocationCoordinate[] $locationCoordinate
     */
    private $locationCoordinate = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Location. Identifier
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
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
     *  Location. Identifier
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
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
     * Adds as description
     *
     * BBIE
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
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
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
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
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
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
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
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
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Conditions $conditions
     */
    public function addToConditions(\UBL\Common\CBC\Conditions $conditions)
    {
        $this->conditions[] = $conditions;
        return $this;
    }

    /**
     * isset conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditions($index)
    {
        return isset($this->conditions[$index]);
    }

    /**
     * unset conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditions($index)
    {
        unset($this->conditions[$index]);
    }

    /**
     * Gets as conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Conditions[]
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets a new conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Conditions[] $conditions
     * @return self
     */
    public function setConditions(?array $conditions = null)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * Gets as countrySubentity
     *
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
     *
     * @return \UBL\Common\CBC\CountrySubentity
     */
    public function getCountrySubentity()
    {
        return $this->countrySubentity;
    }

    /**
     * Sets a new countrySubentity
     *
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
     *
     * @param \UBL\Common\CBC\CountrySubentity $countrySubentity
     * @return self
     */
    public function setCountrySubentity(?\UBL\Common\CBC\CountrySubentity $countrySubentity = null)
    {
        $this->countrySubentity = $countrySubentity;
        return $this;
    }

    /**
     * Gets as countrySubentityCode
     *
     * BBIE
     *  Location. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @return \UBL\Common\CBC\CountrySubentityCode
     */
    public function getCountrySubentityCode()
    {
        return $this->countrySubentityCode;
    }

    /**
     * Sets a new countrySubentityCode
     *
     * BBIE
     *  Location. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @param \UBL\Common\CBC\CountrySubentityCode $countrySubentityCode
     * @return self
     */
    public function setCountrySubentityCode(?\UBL\Common\CBC\CountrySubentityCode $countrySubentityCode = null)
    {
        $this->countrySubentityCode = $countrySubentityCode;
        return $this;
    }

    /**
     * Gets as locationTypeCode
     *
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\LocationTypeCode
     */
    public function getLocationTypeCode()
    {
        return $this->locationTypeCode;
    }

    /**
     * Sets a new locationTypeCode
     *
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\LocationTypeCode $locationTypeCode
     * @return self
     */
    public function setLocationTypeCode(?\UBL\Common\CBC\LocationTypeCode $locationTypeCode = null)
    {
        $this->locationTypeCode = $locationTypeCode;
        return $this;
    }

    /**
     * Gets as informationURI
     *
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\InformationURI
     */
    public function getInformationURI()
    {
        return $this->informationURI;
    }

    /**
     * Sets a new informationURI
     *
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\InformationURI $informationURI
     * @return self
     */
    public function setInformationURI(?\UBL\Common\CBC\InformationURI $informationURI = null)
    {
        $this->informationURI = $informationURI;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @return \UBL\Common\CBC\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @param \UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(?\UBL\Common\CBC\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \UBL\Common\CAC\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\UBL\Common\CAC\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL\Common\CAC\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL\Common\CAC\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?array $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Location. Address
     *  The address of this location.
     *  0..1
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @return \UBL\Common\CAC\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Location. Address
     *  The address of this location.
     *  0..1
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @param \UBL\Common\CAC\Address $address
     * @return self
     */
    public function setAddress(?\UBL\Common\CAC\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \UBL\Common\CAC\SubsidiaryLocation $subsidiaryLocation
     */
    public function addToSubsidiaryLocation(\UBL\Common\CAC\SubsidiaryLocation $subsidiaryLocation)
    {
        $this->subsidiaryLocation[] = $subsidiaryLocation;
        return $this;
    }

    /**
     * isset subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsidiaryLocation($index)
    {
        return isset($this->subsidiaryLocation[$index]);
    }

    /**
     * unset subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsidiaryLocation($index)
    {
        unset($this->subsidiaryLocation[$index]);
    }

    /**
     * Gets as subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL\Common\CAC\SubsidiaryLocation[]
     */
    public function getSubsidiaryLocation()
    {
        return $this->subsidiaryLocation;
    }

    /**
     * Sets a new subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL\Common\CAC\SubsidiaryLocation[] $subsidiaryLocation
     * @return self
     */
    public function setSubsidiaryLocation(?array $subsidiaryLocation = null)
    {
        $this->subsidiaryLocation = $subsidiaryLocation;
        return $this;
    }

    /**
     * Adds as locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @return self
     * @param \UBL\Common\CAC\LocationCoordinate $locationCoordinate
     */
    public function addToLocationCoordinate(\UBL\Common\CAC\LocationCoordinate $locationCoordinate)
    {
        $this->locationCoordinate[] = $locationCoordinate;
        return $this;
    }

    /**
     * isset locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationCoordinate($index)
    {
        return isset($this->locationCoordinate[$index]);
    }

    /**
     * unset locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationCoordinate($index)
    {
        unset($this->locationCoordinate[$index]);
    }

    /**
     * Gets as locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @return \UBL\Common\CAC\LocationCoordinate[]
     */
    public function getLocationCoordinate()
    {
        return $this->locationCoordinate;
    }

    /**
     * Sets a new locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param \UBL\Common\CAC\LocationCoordinate[] $locationCoordinate
     * @return self
     */
    public function setLocationCoordinate(?array $locationCoordinate = null)
    {
        $this->locationCoordinate = $locationCoordinate;
        return $this;
    }
}


