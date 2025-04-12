<?php

namespace UBL\Common\CAC;

/**
 * Class representing AddressType
 *
 * ABIE
 *  Address. Details
 *  A class to define common information related to an address.
 *  Address
 * XSD Type: AddressType
 */
class AddressType
{
    /**
     * BBIE
     *  Address. Identifier
     *  An identifier for this address within an agreed scheme of address identifiers.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Address. Address Type Code. Code
     *  A mutually agreed code signifying the type of this address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\AddressTypeCode $addressTypeCode
     */
    private $addressTypeCode = null;

    /**
     * BBIE
     *  Address. Address Format Code. Code
     *  A mutually agreed code signifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\AddressFormatCode $addressFormatCode
     */
    private $addressFormatCode = null;

    /**
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number registered for postal delivery by a postal service provider.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  123
     *
     * @var \UBL\Common\CBC\Postbox $postbox
     */
    private $postbox = null;

    /**
     * BBIE
     *  Address. Floor. Text
     *  An identifiable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  30
     *
     * @var \UBL\Common\CBC\Floor $floor
     */
    private $floor = null;

    /**
     * BBIE
     *  Address. Room. Text
     *  An identifiable room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  Reception
     *
     * @var \UBL\Common\CBC\Room $room
     */
    private $room = null;

    /**
     * BBIE
     *  Address. Street Name. Name
     *  The name of the street, road, avenue, way, etc. to which the number of the building is attached.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  Kwun Tong Road
     *
     * @var \UBL\Common\CBC\StreetName $streetName
     */
    private $streetName = null;

    /**
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional street name used to further clarify the address.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  Cnr Aberdeen Road
     *
     * @var \UBL\Common\CBC\AdditionalStreetName $additionalStreetName
     */
    private $additionalStreetName = null;

    /**
     * BBIE
     *  Address. Block Name. Name
     *  The name of the block (an area surrounded by streets and usually containing several buildings) in which this address is located.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @var \UBL\Common\CBC\BlockName $blockName
     */
    private $blockName = null;

    /**
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  Plot 421
     *
     * @var \UBL\Common\CBC\BuildingName $buildingName
     */
    private $buildingName = null;

    /**
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building within the street.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  388
     *
     * @var \UBL\Common\CBC\BuildingNumber $buildingNumber
     */
    private $buildingNumber = null;

    /**
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  The specific identifable location within a building where mail is delivered.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @var \UBL\Common\CBC\InhouseMail $inhouseMail
     */
    private $inhouseMail = null;

    /**
     * BBIE
     *  Address. Department. Text
     *  The department of the addressee.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  Accounts Payable
     *
     * @var \UBL\Common\CBC\Department $department
     */
    private $department = null;

    /**
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in an organization to whose attention incoming mail is directed; corresponds to the printed forms "for the attention of", "FAO", and ATTN:".
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\MarkAttention $markAttention
     */
    private $markAttention = null;

    /**
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address into whose care incoming mail is entrusted; corresponds to the printed forms "care of" and "c/o".
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\MarkCare $markCare
     */
    private $markCare = null;

    /**
     * BBIE
     *  Address. Plot Identification. Text
     *  An identifier (e.g., a parcel number) for the piece of land associated with this address.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\PlotIdentification $plotIdentification
     */
    private $plotIdentification = null;

    /**
     * BBIE
     *  Address. City Subdivision Name. Name
     *  The name of the subdivision of a city, town, or village in which this address is located, such as the name of its district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\CitySubdivisionName $citySubdivisionName
     */
    private $citySubdivisionName = null;

    /**
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  Hong Kong
     *
     * @var \UBL\Common\CBC\CityName $cityName
     */
    private $cityName = null;

    /**
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The postal identifier for this address according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  SW11 4EW 2500 GG
     *
     * @var \UBL\Common\CBC\PostalZone $postalZone
     */
    private $postalZone = null;

    /**
     * BBIE
     *  Address. Country Subentity. Text
     *  The political or administrative division of a country in which this address is located, such as the name of its county, province, or state, expressed as text.
     *  0..1
     *  Address
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
     *  Address. Country Subentity Code. Code
     *  The political or administrative division of a country in which this address is located, such as a county, province, or state, expressed as a code (typically nationally agreed).
     *  0..1
     *  Address
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
     *  Address. Region. Text
     *  The recognized geographic or economic region or group of countries in which this address is located.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  European Union
     *
     * @var \UBL\Common\CBC\Region $region
     */
    private $region = null;

    /**
     * BBIE
     *  Address. District. Text
     *  The district or geographical division of a country or region in which this address is located.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  East Coast
     *
     * @var \UBL\Common\CBC\District $district
     */
    private $district = null;

    /**
     * BBIE
     *  Address. Timezone Offset. Text
     *  The time zone in which this address is located (as an offset from Universal Coordinated Time (UTC)) at the time of exchange.
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  +8:00 -3:00
     *
     * @var \UBL\Common\CBC\TimezoneOffset $timezoneOffset
     */
    private $timezoneOffset = null;

    /**
     * ASBIE
     *  Address. Address Line
     *  An unstructured address line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *  Address Line
     *
     * @var \UBL\Common\CAC\AddressLine[] $addressLine
     */
    private $addressLine = [
        
    ];

    /**
     * ASBIE
     *  Address. Country
     *  The country in which this address is situated.
     *  0..1
     *  Address
     *  Country
     *  Country
     *  Country
     *
     * @var \UBL\Common\CAC\Country $country
     */
    private $country = null;

    /**
     * ASBIE
     *  Address. Location Coordinate
     *  The geographical coordinates of this address.
     *  0..n
     *  Address
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
     *  Address. Identifier
     *  An identifier for this address within an agreed scheme of address identifiers.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
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
     *  Address. Identifier
     *  An identifier for this address within an agreed scheme of address identifiers.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
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
     * Gets as addressTypeCode
     *
     * BBIE
     *  Address. Address Type Code. Code
     *  A mutually agreed code signifying the type of this address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\AddressTypeCode
     */
    public function getAddressTypeCode()
    {
        return $this->addressTypeCode;
    }

    /**
     * Sets a new addressTypeCode
     *
     * BBIE
     *  Address. Address Type Code. Code
     *  A mutually agreed code signifying the type of this address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\AddressTypeCode $addressTypeCode
     * @return self
     */
    public function setAddressTypeCode(?\UBL\Common\CBC\AddressTypeCode $addressTypeCode = null)
    {
        $this->addressTypeCode = $addressTypeCode;
        return $this;
    }

    /**
     * Gets as addressFormatCode
     *
     * BBIE
     *  Address. Address Format Code. Code
     *  A mutually agreed code signifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\AddressFormatCode
     */
    public function getAddressFormatCode()
    {
        return $this->addressFormatCode;
    }

    /**
     * Sets a new addressFormatCode
     *
     * BBIE
     *  Address. Address Format Code. Code
     *  A mutually agreed code signifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\AddressFormatCode $addressFormatCode
     * @return self
     */
    public function setAddressFormatCode(?\UBL\Common\CBC\AddressFormatCode $addressFormatCode = null)
    {
        $this->addressFormatCode = $addressFormatCode;
        return $this;
    }

    /**
     * Gets as postbox
     *
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number registered for postal delivery by a postal service provider.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  123
     *
     * @return \UBL\Common\CBC\Postbox
     */
    public function getPostbox()
    {
        return $this->postbox;
    }

    /**
     * Sets a new postbox
     *
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number registered for postal delivery by a postal service provider.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  123
     *
     * @param \UBL\Common\CBC\Postbox $postbox
     * @return self
     */
    public function setPostbox(?\UBL\Common\CBC\Postbox $postbox = null)
    {
        $this->postbox = $postbox;
        return $this;
    }

    /**
     * Gets as floor
     *
     * BBIE
     *  Address. Floor. Text
     *  An identifiable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  30
     *
     * @return \UBL\Common\CBC\Floor
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets a new floor
     *
     * BBIE
     *  Address. Floor. Text
     *  An identifiable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  30
     *
     * @param \UBL\Common\CBC\Floor $floor
     * @return self
     */
    public function setFloor(?\UBL\Common\CBC\Floor $floor = null)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Gets as room
     *
     * BBIE
     *  Address. Room. Text
     *  An identifiable room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  Reception
     *
     * @return \UBL\Common\CBC\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * BBIE
     *  Address. Room. Text
     *  An identifiable room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  Reception
     *
     * @param \UBL\Common\CBC\Room $room
     * @return self
     */
    public function setRoom(?\UBL\Common\CBC\Room $room = null)
    {
        $this->room = $room;
        return $this;
    }

    /**
     * Gets as streetName
     *
     * BBIE
     *  Address. Street Name. Name
     *  The name of the street, road, avenue, way, etc. to which the number of the building is attached.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  Kwun Tong Road
     *
     * @return \UBL\Common\CBC\StreetName
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Sets a new streetName
     *
     * BBIE
     *  Address. Street Name. Name
     *  The name of the street, road, avenue, way, etc. to which the number of the building is attached.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  Kwun Tong Road
     *
     * @param \UBL\Common\CBC\StreetName $streetName
     * @return self
     */
    public function setStreetName(?\UBL\Common\CBC\StreetName $streetName = null)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * Gets as additionalStreetName
     *
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional street name used to further clarify the address.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  Cnr Aberdeen Road
     *
     * @return \UBL\Common\CBC\AdditionalStreetName
     */
    public function getAdditionalStreetName()
    {
        return $this->additionalStreetName;
    }

    /**
     * Sets a new additionalStreetName
     *
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional street name used to further clarify the address.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  Cnr Aberdeen Road
     *
     * @param \UBL\Common\CBC\AdditionalStreetName $additionalStreetName
     * @return self
     */
    public function setAdditionalStreetName(?\UBL\Common\CBC\AdditionalStreetName $additionalStreetName = null)
    {
        $this->additionalStreetName = $additionalStreetName;
        return $this;
    }

    /**
     * Gets as blockName
     *
     * BBIE
     *  Address. Block Name. Name
     *  The name of the block (an area surrounded by streets and usually containing several buildings) in which this address is located.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @return \UBL\Common\CBC\BlockName
     */
    public function getBlockName()
    {
        return $this->blockName;
    }

    /**
     * Sets a new blockName
     *
     * BBIE
     *  Address. Block Name. Name
     *  The name of the block (an area surrounded by streets and usually containing several buildings) in which this address is located.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @param \UBL\Common\CBC\BlockName $blockName
     * @return self
     */
    public function setBlockName(?\UBL\Common\CBC\BlockName $blockName = null)
    {
        $this->blockName = $blockName;
        return $this;
    }

    /**
     * Gets as buildingName
     *
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  Plot 421
     *
     * @return \UBL\Common\CBC\BuildingName
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * Sets a new buildingName
     *
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  Plot 421
     *
     * @param \UBL\Common\CBC\BuildingName $buildingName
     * @return self
     */
    public function setBuildingName(?\UBL\Common\CBC\BuildingName $buildingName = null)
    {
        $this->buildingName = $buildingName;
        return $this;
    }

    /**
     * Gets as buildingNumber
     *
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building within the street.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  388
     *
     * @return \UBL\Common\CBC\BuildingNumber
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Sets a new buildingNumber
     *
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building within the street.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  388
     *
     * @param \UBL\Common\CBC\BuildingNumber $buildingNumber
     * @return self
     */
    public function setBuildingNumber(?\UBL\Common\CBC\BuildingNumber $buildingNumber = null)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * Gets as inhouseMail
     *
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  The specific identifable location within a building where mail is delivered.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @return \UBL\Common\CBC\InhouseMail
     */
    public function getInhouseMail()
    {
        return $this->inhouseMail;
    }

    /**
     * Sets a new inhouseMail
     *
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  The specific identifable location within a building where mail is delivered.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @param \UBL\Common\CBC\InhouseMail $inhouseMail
     * @return self
     */
    public function setInhouseMail(?\UBL\Common\CBC\InhouseMail $inhouseMail = null)
    {
        $this->inhouseMail = $inhouseMail;
        return $this;
    }

    /**
     * Gets as department
     *
     * BBIE
     *  Address. Department. Text
     *  The department of the addressee.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  Accounts Payable
     *
     * @return \UBL\Common\CBC\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets a new department
     *
     * BBIE
     *  Address. Department. Text
     *  The department of the addressee.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  Accounts Payable
     *
     * @param \UBL\Common\CBC\Department $department
     * @return self
     */
    public function setDepartment(?\UBL\Common\CBC\Department $department = null)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Gets as markAttention
     *
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in an organization to whose attention incoming mail is directed; corresponds to the printed forms "for the attention of", "FAO", and ATTN:".
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\MarkAttention
     */
    public function getMarkAttention()
    {
        return $this->markAttention;
    }

    /**
     * Sets a new markAttention
     *
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in an organization to whose attention incoming mail is directed; corresponds to the printed forms "for the attention of", "FAO", and ATTN:".
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\MarkAttention $markAttention
     * @return self
     */
    public function setMarkAttention(?\UBL\Common\CBC\MarkAttention $markAttention = null)
    {
        $this->markAttention = $markAttention;
        return $this;
    }

    /**
     * Gets as markCare
     *
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address into whose care incoming mail is entrusted; corresponds to the printed forms "care of" and "c/o".
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\MarkCare
     */
    public function getMarkCare()
    {
        return $this->markCare;
    }

    /**
     * Sets a new markCare
     *
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address into whose care incoming mail is entrusted; corresponds to the printed forms "care of" and "c/o".
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\MarkCare $markCare
     * @return self
     */
    public function setMarkCare(?\UBL\Common\CBC\MarkCare $markCare = null)
    {
        $this->markCare = $markCare;
        return $this;
    }

    /**
     * Gets as plotIdentification
     *
     * BBIE
     *  Address. Plot Identification. Text
     *  An identifier (e.g., a parcel number) for the piece of land associated with this address.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\PlotIdentification
     */
    public function getPlotIdentification()
    {
        return $this->plotIdentification;
    }

    /**
     * Sets a new plotIdentification
     *
     * BBIE
     *  Address. Plot Identification. Text
     *  An identifier (e.g., a parcel number) for the piece of land associated with this address.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\PlotIdentification $plotIdentification
     * @return self
     */
    public function setPlotIdentification(?\UBL\Common\CBC\PlotIdentification $plotIdentification = null)
    {
        $this->plotIdentification = $plotIdentification;
        return $this;
    }

    /**
     * Gets as citySubdivisionName
     *
     * BBIE
     *  Address. City Subdivision Name. Name
     *  The name of the subdivision of a city, town, or village in which this address is located, such as the name of its district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @return \UBL\Common\CBC\CitySubdivisionName
     */
    public function getCitySubdivisionName()
    {
        return $this->citySubdivisionName;
    }

    /**
     * Sets a new citySubdivisionName
     *
     * BBIE
     *  Address. City Subdivision Name. Name
     *  The name of the subdivision of a city, town, or village in which this address is located, such as the name of its district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @param \UBL\Common\CBC\CitySubdivisionName $citySubdivisionName
     * @return self
     */
    public function setCitySubdivisionName(?\UBL\Common\CBC\CitySubdivisionName $citySubdivisionName = null)
    {
        $this->citySubdivisionName = $citySubdivisionName;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  Hong Kong
     *
     * @return \UBL\Common\CBC\CityName
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  Hong Kong
     *
     * @param \UBL\Common\CBC\CityName $cityName
     * @return self
     */
    public function setCityName(?\UBL\Common\CBC\CityName $cityName = null)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as postalZone
     *
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The postal identifier for this address according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  SW11 4EW 2500 GG
     *
     * @return \UBL\Common\CBC\PostalZone
     */
    public function getPostalZone()
    {
        return $this->postalZone;
    }

    /**
     * Sets a new postalZone
     *
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The postal identifier for this address according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  SW11 4EW 2500 GG
     *
     * @param \UBL\Common\CBC\PostalZone $postalZone
     * @return self
     */
    public function setPostalZone(?\UBL\Common\CBC\PostalZone $postalZone = null)
    {
        $this->postalZone = $postalZone;
        return $this;
    }

    /**
     * Gets as countrySubentity
     *
     * BBIE
     *  Address. Country Subentity. Text
     *  The political or administrative division of a country in which this address is located, such as the name of its county, province, or state, expressed as text.
     *  0..1
     *  Address
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
     *  Address. Country Subentity. Text
     *  The political or administrative division of a country in which this address is located, such as the name of its county, province, or state, expressed as text.
     *  0..1
     *  Address
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
     *  Address. Country Subentity Code. Code
     *  The political or administrative division of a country in which this address is located, such as a county, province, or state, expressed as a code (typically nationally agreed).
     *  0..1
     *  Address
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
     *  Address. Country Subentity Code. Code
     *  The political or administrative division of a country in which this address is located, such as a county, province, or state, expressed as a code (typically nationally agreed).
     *  0..1
     *  Address
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
     * Gets as region
     *
     * BBIE
     *  Address. Region. Text
     *  The recognized geographic or economic region or group of countries in which this address is located.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  European Union
     *
     * @return \UBL\Common\CBC\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * BBIE
     *  Address. Region. Text
     *  The recognized geographic or economic region or group of countries in which this address is located.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  European Union
     *
     * @param \UBL\Common\CBC\Region $region
     * @return self
     */
    public function setRegion(?\UBL\Common\CBC\Region $region = null)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as district
     *
     * BBIE
     *  Address. District. Text
     *  The district or geographical division of a country or region in which this address is located.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  East Coast
     *
     * @return \UBL\Common\CBC\District
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets a new district
     *
     * BBIE
     *  Address. District. Text
     *  The district or geographical division of a country or region in which this address is located.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  East Coast
     *
     * @param \UBL\Common\CBC\District $district
     * @return self
     */
    public function setDistrict(?\UBL\Common\CBC\District $district = null)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Gets as timezoneOffset
     *
     * BBIE
     *  Address. Timezone Offset. Text
     *  The time zone in which this address is located (as an offset from Universal Coordinated Time (UTC)) at the time of exchange.
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  +8:00 -3:00
     *
     * @return \UBL\Common\CBC\TimezoneOffset
     */
    public function getTimezoneOffset()
    {
        return $this->timezoneOffset;
    }

    /**
     * Sets a new timezoneOffset
     *
     * BBIE
     *  Address. Timezone Offset. Text
     *  The time zone in which this address is located (as an offset from Universal Coordinated Time (UTC)) at the time of exchange.
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  +8:00 -3:00
     *
     * @param \UBL\Common\CBC\TimezoneOffset $timezoneOffset
     * @return self
     */
    public function setTimezoneOffset(?\UBL\Common\CBC\TimezoneOffset $timezoneOffset = null)
    {
        $this->timezoneOffset = $timezoneOffset;
        return $this;
    }

    /**
     * Adds as addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An unstructured address line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *  Address Line
     *
     * @return self
     * @param \UBL\Common\CAC\AddressLine $addressLine
     */
    public function addToAddressLine(\UBL\Common\CAC\AddressLine $addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An unstructured address line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *  Address Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An unstructured address line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *  Address Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An unstructured address line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *  Address Line
     *
     * @return \UBL\Common\CAC\AddressLine[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An unstructured address line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *  Address Line
     *
     * @param \UBL\Common\CAC\AddressLine[] $addressLine
     * @return self
     */
    public function setAddressLine(?array $addressLine = null)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as country
     *
     * ASBIE
     *  Address. Country
     *  The country in which this address is situated.
     *  0..1
     *  Address
     *  Country
     *  Country
     *  Country
     *
     * @return \UBL\Common\CAC\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ASBIE
     *  Address. Country
     *  The country in which this address is situated.
     *  0..1
     *  Address
     *  Country
     *  Country
     *  Country
     *
     * @param \UBL\Common\CAC\Country $country
     * @return self
     */
    public function setCountry(?\UBL\Common\CAC\Country $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as locationCoordinate
     *
     * ASBIE
     *  Address. Location Coordinate
     *  The geographical coordinates of this address.
     *  0..n
     *  Address
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
     *  Address. Location Coordinate
     *  The geographical coordinates of this address.
     *  0..n
     *  Address
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
     *  Address. Location Coordinate
     *  The geographical coordinates of this address.
     *  0..n
     *  Address
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
     *  Address. Location Coordinate
     *  The geographical coordinates of this address.
     *  0..n
     *  Address
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
     *  Address. Location Coordinate
     *  The geographical coordinates of this address.
     *  0..n
     *  Address
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

