<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TransportEquipmentType
 *
 * ABIE
 *  Transport Equipment. Details
 *  A class to describe a piece of equipment used to transport goods.
 *  Transport Equipment
 *  Shipping Container, Sea Container, Rail Wagon, Pallet, Trailer, Unit Load Device, ULD
 * XSD Type: TransportEquipmentType
 */
class TransportEquipmentType
{
    /**
     * BBIE
     *  Transport Equipment. Identifier
     *  An identifier for this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  OCLU 1234567
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Equipment. Referenced_ Consignment Identifier. Identifier
     *  An identifier for the consignment contained by this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Referenced
     *  Consignment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ReferencedConsignmentID[] $referencedConsignmentID
     */
    private $referencedConsignmentID = [
        
    ];

    /**
     * BBIE
     *  Transport Equipment. Transport Equipment Type Code. Code
     *  A code signifying the type of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Transport Equipment Type Code
     *  Code
     *  Transport Equipment Type
     *  Transport Equipment Type_ Code. Type
     *
     * @var \App\UBL\Common\CBC\TransportEquipmentTypeCode $transportEquipmentTypeCode
     */
    private $transportEquipmentTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment. Provider Type Code. Code
     *  A code signifying the type of provider of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\ProviderTypeCode $providerTypeCode
     */
    private $providerTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment. Owner Type Code. Code
     *  A code signifying the type of owner of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\OwnerTypeCode $ownerTypeCode
     */
    private $ownerTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment. Size Type Code. Code
     *  A code signifying the size and type of this piece of piece of transport equipment. When the piece of transport equipment is a shipping container, it is recommended to use ContainerSizeTypeCode for validation.
     *  0..1
     *  Transport Equipment
     *  Size Type Code
     *  Code
     *  Code. Type
     *  Container Size Type Code
     *
     * @var \App\UBL\Common\CBC\SizeTypeCode $sizeTypeCode
     */
    private $sizeTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment. Disposition Code. Code
     *  A code signifying the current disposition of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Disposition Code
     *  Code
     *  Code. Type
     *  Status
     *
     * @var \App\UBL\Common\CBC\DispositionCode $dispositionCode
     */
    private $dispositionCode = null;

    /**
     * BBIE
     *  Transport Equipment. Fullness Indication Code. Code
     *  A code signifying whether this piece of transport equipment is full, partially full, or empty.
     *  0..1
     *  Transport Equipment
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\FullnessIndicationCode $fullnessIndicationCode
     */
    private $fullnessIndicationCode = null;

    /**
     * BBIE
     *  Transport Equipment. Refrigeration On_ Indicator. Indicator
     *  An indicator that this piece of transport equipment's refrigeration is on (true) or off (false).
     *  0..1
     *  Transport Equipment
     *  Refrigeration On
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $refrigerationOnIndicator
     */
    private $refrigerationOnIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Information[] $information
     */
    private $information = [
        
    ];

    /**
     * BBIE
     *  Transport Equipment. Returnability_ Indicator. Indicator
     *  An indicator that this piece of transport equipment is returnable (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Returnability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $returnabilityIndicator
     */
    private $returnabilityIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Legal Status_ Indicator. Indicator
     *  An indication of the legal status of this piece of transport equipment with respect to the Container Convention Code.
     *  0..1
     *  Transport Equipment
     *  Legal Status
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $legalStatusIndicator
     */
    private $legalStatusIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Air Flow Percent. Percent
     *  The percent of the airflow within this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Air Flow Percent
     *  Percent
     *  Percent. Type
     *
     * @var \App\UBL\Common\CBC\AirFlowPercent $airFlowPercent
     */
    private $airFlowPercent = null;

    /**
     * BBIE
     *  Transport Equipment. Humidity Percent. Percent
     *  The percent humidity within this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Humidity Percent
     *  Percent
     *  Percent. Type
     *
     * @var \App\UBL\Common\CBC\HumidityPercent $humidityPercent
     */
    private $humidityPercent = null;

    /**
     * BBIE
     *  Transport Equipment. Animal Food_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for animal food (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Animal Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $animalFoodApprovedIndicator
     */
    private $animalFoodApprovedIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Human Food_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for human food (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Human Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $humanFoodApprovedIndicator
     */
    private $humanFoodApprovedIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Dangerous Goods_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for dangerous goods (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Dangerous Goods
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $dangerousGoodsApprovedIndicator
     */
    private $dangerousGoodsApprovedIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Refrigerated_ Indicator. Indicator
     *  An indicator that this piece of transport equipment is refrigerated (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Refrigerated
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $refrigeratedIndicator
     */
    private $refrigeratedIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Characteristics. Text
     *  Characteristics of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Characteristics
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Characteristics $characteristics
     */
    private $characteristics = null;

    /**
     * BBIE
     *  Transport Equipment. Damage_ Remarks. Text
     *  Damage associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\DamageRemarks[] $damageRemarks
     */
    private $damageRemarks = [
        
    ];

    /**
     * BBIE
     *  Transport Equipment. Description. Text
     *  Text describing this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Transport Equipment. Special_ Transport Requirements. Text
     *  Special transport requirements expressed as text.
     *  0..n
     *  Transport Equipment
     *  Special
     *  Transport Requirements
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\SpecialTransportRequirements[] $specialTransportRequirements
     */
    private $specialTransportRequirements = [
        
    ];

    /**
     * BBIE
     *  Transport Equipment. Gross_ Weight. Measure
     *  The gross weight of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \App\UBL\Common\CBC\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Transport Equipment. Gross_ Volume. Measure
     *  The gross volume of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \App\UBL\Common\CBC\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Transport Equipment. Tare_ Weight. Measure
     *  The weight of this piece of transport equipment when empty.
     *  0..1
     *  Transport Equipment
     *  Tare
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \App\UBL\Common\CBC\TareWeightMeasure $tareWeightMeasure
     */
    private $tareWeightMeasure = null;

    /**
     * BBIE
     *  Transport Equipment. Tracking Device Code. Code
     *  A code signifying the tracking device for this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Tracking Device Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\TrackingDeviceCode $trackingDeviceCode
     */
    private $trackingDeviceCode = null;

    /**
     * BBIE
     *  Transport Equipment. Power. Indicator
     *  An indicator that this piece of transport equipment can supply power (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Power
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $powerIndicator
     */
    private $powerIndicator = null;

    /**
     * BBIE
     *  Transport Equipment. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this piece of transport equipment, such as the EPC number used in RFID.
     *  0..1
     *  Transport Equipment
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\TraceID $traceID
     */
    private $traceID = null;

    /**
     * ASBIE
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
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
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  A seal securing the door of a piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @var \App\UBL\Common\CAC\TransportEquipmentSeal[] $transportEquipmentSeal
     */
    private $transportEquipmentSeal = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Minimum_ Temperature. Temperature
     *  In the case of a refrigeration unit, the minimum allowable operating temperature for this container.
     *  0..1
     *  Transport Equipment
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \App\UBL\Common\CAC\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * ASBIE
     *  Transport Equipment. Maximum_ Temperature. Temperature
     *  In the case of a refrigeration unit, the maximum allowable operating temperature for this container.
     *  0..1
     *  Transport Equipment
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \App\UBL\Common\CAC\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * ASBIE
     *  Transport Equipment. Provider_ Party. Party
     *  The party providing this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\ProviderParty $providerParty
     */
    private $providerParty = null;

    /**
     * ASBIE
     *  Transport Equipment. Loading Proof_ Party. Party
     *  The authorized party responsible for certifying that the goods were loaded into this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading Proof
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @var \App\UBL\Common\CAC\LoadingProofParty $loadingProofParty
     */
    private $loadingProofParty = null;

    /**
     * ASBIE
     *  Transport Equipment. Supplier Party
     *  The party that supplies this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @var \App\UBL\Common\CAC\SupplierParty $supplierParty
     */
    private $supplierParty = null;

    /**
     * ASBIE
     *  Transport Equipment. Owner_ Party. Party
     *  The party that owns this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @var \App\UBL\Common\CAC\OwnerParty $ownerParty
     */
    private $ownerParty = null;

    /**
     * ASBIE
     *  Transport Equipment. Operating_ Party. Party
     *  The party that operates this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Operating
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @var \App\UBL\Common\CAC\OperatingParty $operatingParty
     */
    private $operatingParty = null;

    /**
     * ASBIE
     *  Transport Equipment. Loading_ Location. Location
     *  The location where this piece of transport equipment is loaded.
     *  0..1
     *  Transport Equipment
     *  Loading
     *  Location
     *  Location
     *  Location
     *  Vanning address (WCO ID 068), Stuffing location
     *
     * @var \App\UBL\Common\CAC\LoadingLocation $loadingLocation
     */
    private $loadingLocation = null;

    /**
     * ASBIE
     *  Transport Equipment. Unloading_ Location. Location
     *  The location where this piece of transport equipment is unloaded.
     *  0..1
     *  Transport Equipment
     *  Unloading
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\UnloadingLocation $unloadingLocation
     */
    private $unloadingLocation = null;

    /**
     * ASBIE
     *  Transport Equipment. Storage_ Location. Location
     *  The location where this piece of transport equipment is being stored.
     *  0..1
     *  Transport Equipment
     *  Storage
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\StorageLocation $storageLocation
     */
    private $storageLocation = null;

    /**
     * ASBIE
     *  Transport Equipment. Positioning_ Transport Event. Transport Event
     *  A positioning of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Positioning
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\PositioningTransportEvent[] $positioningTransportEvent
     */
    private $positioningTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Quarantine_ Transport Event. Transport Event
     *  A quarantine of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Quarantine
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\QuarantineTransportEvent[] $quarantineTransportEvent
     */
    private $quarantineTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Delivery_ Transport Event. Transport Event
     *  A delivery of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\DeliveryTransportEvent[] $deliveryTransportEvent
     */
    private $deliveryTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Pickup_ Transport Event. Transport Event
     *  A pickup of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\PickupTransportEvent[] $pickupTransportEvent
     */
    private $pickupTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Handling_ Transport Event. Transport Event
     *  A handling of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Handling
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\HandlingTransportEvent[] $handlingTransportEvent
     */
    private $handlingTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Loading_ Transport Event. Transport Event
     *  A loading of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\LoadingTransportEvent[] $loadingTransportEvent
     */
    private $loadingTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Transport Event
     *  A transport event associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\TransportEvent[] $transportEvent
     */
    private $transportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Applicable_ Transport Means. Transport Means
     *  The applicable transport means associated with this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Applicable
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @var \App\UBL\Common\CAC\ApplicableTransportMeans $applicableTransportMeans
     */
    private $applicableTransportMeans = null;

    /**
     * ASBIE
     *  Transport Equipment. Haulage_ Trading Terms. Trading Terms
     *  A set of haulage trading terms associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Haulage
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @var \App\UBL\Common\CAC\HaulageTradingTerms[] $haulageTradingTerms
     */
    private $haulageTradingTerms = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @var \App\UBL\Common\CAC\HazardousGoodsTransit[] $hazardousGoodsTransit
     */
    private $hazardousGoodsTransit = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Packaged_ Transport Handling Unit. Transport Handling Unit
     *  A packaged transport handling unit associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Packaged
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @var \App\UBL\Common\CAC\PackagedTransportHandlingUnit[] $packagedTransportHandlingUnit
     */
    private $packagedTransportHandlingUnit = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Service_ Allowance Charge. Allowance Charge
     *  A service allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \App\UBL\Common\CAC\ServiceAllowanceCharge[] $serviceAllowanceCharge
     */
    private $serviceAllowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \App\UBL\Common\CAC\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Attached_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment attached to this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Attached
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \App\UBL\Common\CAC\AttachedTransportEquipment[] $attachedTransportEquipment
     */
    private $attachedTransportEquipment = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Delivery
     *  The delivery of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \App\UBL\Common\CAC\Delivery $delivery
     */
    private $delivery = null;

    /**
     * ASBIE
     *  Transport Equipment. Pickup
     *  The pickup of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @var \App\UBL\Common\CAC\Pickup $pickup
     */
    private $pickup = null;

    /**
     * ASBIE
     *  Transport Equipment. Despatch
     *  The despatch of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @var \App\UBL\Common\CAC\Despatch $despatch
     */
    private $despatch = null;

    /**
     * ASBIE
     *  Transport Equipment. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \App\UBL\Common\CAC\ShipmentDocumentReference[] $shipmentDocumentReference
     */
    private $shipmentDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Contained In_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Contained In
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *  e.g. pallets inside containers
     *
     * @var \App\UBL\Common\CAC\ContainedInTransportEquipment[] $containedInTransportEquipment
     */
    private $containedInTransportEquipment = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Package
     *  A package contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Package
     *  Package
     *  Package
     *
     * @var \App\UBL\Common\CAC\Package[] $package
     */
    private $package = [
        
    ];

    /**
     * ASBIE
     *  Transport Equipment. Goods Item
     *  A goods item contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @var \App\UBL\Common\CAC\GoodsItem[] $goodsItem
     */
    private $goodsItem = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Transport Equipment. Identifier
     *  An identifier for this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  OCLU 1234567
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
     *  Transport Equipment. Identifier
     *  An identifier for this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  OCLU 1234567
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
     * Adds as referencedConsignmentID
     *
     * BBIE
     *  Transport Equipment. Referenced_ Consignment Identifier. Identifier
     *  An identifier for the consignment contained by this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Referenced
     *  Consignment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\ReferencedConsignmentID $referencedConsignmentID
     */
    public function addToReferencedConsignmentID(\App\UBL\Common\CBC\ReferencedConsignmentID $referencedConsignmentID)
    {
        $this->referencedConsignmentID[] = $referencedConsignmentID;
        return $this;
    }

    /**
     * isset referencedConsignmentID
     *
     * BBIE
     *  Transport Equipment. Referenced_ Consignment Identifier. Identifier
     *  An identifier for the consignment contained by this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Referenced
     *  Consignment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedConsignmentID($index)
    {
        return isset($this->referencedConsignmentID[$index]);
    }

    /**
     * unset referencedConsignmentID
     *
     * BBIE
     *  Transport Equipment. Referenced_ Consignment Identifier. Identifier
     *  An identifier for the consignment contained by this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Referenced
     *  Consignment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedConsignmentID($index)
    {
        unset($this->referencedConsignmentID[$index]);
    }

    /**
     * Gets as referencedConsignmentID
     *
     * BBIE
     *  Transport Equipment. Referenced_ Consignment Identifier. Identifier
     *  An identifier for the consignment contained by this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Referenced
     *  Consignment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\ReferencedConsignmentID[]
     */
    public function getReferencedConsignmentID()
    {
        return $this->referencedConsignmentID;
    }

    /**
     * Sets a new referencedConsignmentID
     *
     * BBIE
     *  Transport Equipment. Referenced_ Consignment Identifier. Identifier
     *  An identifier for the consignment contained by this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Referenced
     *  Consignment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\ReferencedConsignmentID[] $referencedConsignmentID
     * @return self
     */
    public function setReferencedConsignmentID(?array $referencedConsignmentID = null)
    {
        $this->referencedConsignmentID = $referencedConsignmentID;
        return $this;
    }

    /**
     * Gets as transportEquipmentTypeCode
     *
     * BBIE
     *  Transport Equipment. Transport Equipment Type Code. Code
     *  A code signifying the type of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Transport Equipment Type Code
     *  Code
     *  Transport Equipment Type
     *  Transport Equipment Type_ Code. Type
     *
     * @return \App\UBL\Common\CBC\TransportEquipmentTypeCode
     */
    public function getTransportEquipmentTypeCode()
    {
        return $this->transportEquipmentTypeCode;
    }

    /**
     * Sets a new transportEquipmentTypeCode
     *
     * BBIE
     *  Transport Equipment. Transport Equipment Type Code. Code
     *  A code signifying the type of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Transport Equipment Type Code
     *  Code
     *  Transport Equipment Type
     *  Transport Equipment Type_ Code. Type
     *
     * @param \App\UBL\Common\CBC\TransportEquipmentTypeCode $transportEquipmentTypeCode
     * @return self
     */
    public function setTransportEquipmentTypeCode(?\App\UBL\Common\CBC\TransportEquipmentTypeCode $transportEquipmentTypeCode = null)
    {
        $this->transportEquipmentTypeCode = $transportEquipmentTypeCode;
        return $this;
    }

    /**
     * Gets as providerTypeCode
     *
     * BBIE
     *  Transport Equipment. Provider Type Code. Code
     *  A code signifying the type of provider of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\ProviderTypeCode
     */
    public function getProviderTypeCode()
    {
        return $this->providerTypeCode;
    }

    /**
     * Sets a new providerTypeCode
     *
     * BBIE
     *  Transport Equipment. Provider Type Code. Code
     *  A code signifying the type of provider of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\ProviderTypeCode $providerTypeCode
     * @return self
     */
    public function setProviderTypeCode(?\App\UBL\Common\CBC\ProviderTypeCode $providerTypeCode = null)
    {
        $this->providerTypeCode = $providerTypeCode;
        return $this;
    }

    /**
     * Gets as ownerTypeCode
     *
     * BBIE
     *  Transport Equipment. Owner Type Code. Code
     *  A code signifying the type of owner of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\OwnerTypeCode
     */
    public function getOwnerTypeCode()
    {
        return $this->ownerTypeCode;
    }

    /**
     * Sets a new ownerTypeCode
     *
     * BBIE
     *  Transport Equipment. Owner Type Code. Code
     *  A code signifying the type of owner of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\OwnerTypeCode $ownerTypeCode
     * @return self
     */
    public function setOwnerTypeCode(?\App\UBL\Common\CBC\OwnerTypeCode $ownerTypeCode = null)
    {
        $this->ownerTypeCode = $ownerTypeCode;
        return $this;
    }

    /**
     * Gets as sizeTypeCode
     *
     * BBIE
     *  Transport Equipment. Size Type Code. Code
     *  A code signifying the size and type of this piece of piece of transport equipment. When the piece of transport equipment is a shipping container, it is recommended to use ContainerSizeTypeCode for validation.
     *  0..1
     *  Transport Equipment
     *  Size Type Code
     *  Code
     *  Code. Type
     *  Container Size Type Code
     *
     * @return \App\UBL\Common\CBC\SizeTypeCode
     */
    public function getSizeTypeCode()
    {
        return $this->sizeTypeCode;
    }

    /**
     * Sets a new sizeTypeCode
     *
     * BBIE
     *  Transport Equipment. Size Type Code. Code
     *  A code signifying the size and type of this piece of piece of transport equipment. When the piece of transport equipment is a shipping container, it is recommended to use ContainerSizeTypeCode for validation.
     *  0..1
     *  Transport Equipment
     *  Size Type Code
     *  Code
     *  Code. Type
     *  Container Size Type Code
     *
     * @param \App\UBL\Common\CBC\SizeTypeCode $sizeTypeCode
     * @return self
     */
    public function setSizeTypeCode(?\App\UBL\Common\CBC\SizeTypeCode $sizeTypeCode = null)
    {
        $this->sizeTypeCode = $sizeTypeCode;
        return $this;
    }

    /**
     * Gets as dispositionCode
     *
     * BBIE
     *  Transport Equipment. Disposition Code. Code
     *  A code signifying the current disposition of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Disposition Code
     *  Code
     *  Code. Type
     *  Status
     *
     * @return \App\UBL\Common\CBC\DispositionCode
     */
    public function getDispositionCode()
    {
        return $this->dispositionCode;
    }

    /**
     * Sets a new dispositionCode
     *
     * BBIE
     *  Transport Equipment. Disposition Code. Code
     *  A code signifying the current disposition of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Disposition Code
     *  Code
     *  Code. Type
     *  Status
     *
     * @param \App\UBL\Common\CBC\DispositionCode $dispositionCode
     * @return self
     */
    public function setDispositionCode(?\App\UBL\Common\CBC\DispositionCode $dispositionCode = null)
    {
        $this->dispositionCode = $dispositionCode;
        return $this;
    }

    /**
     * Gets as fullnessIndicationCode
     *
     * BBIE
     *  Transport Equipment. Fullness Indication Code. Code
     *  A code signifying whether this piece of transport equipment is full, partially full, or empty.
     *  0..1
     *  Transport Equipment
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\FullnessIndicationCode
     */
    public function getFullnessIndicationCode()
    {
        return $this->fullnessIndicationCode;
    }

    /**
     * Sets a new fullnessIndicationCode
     *
     * BBIE
     *  Transport Equipment. Fullness Indication Code. Code
     *  A code signifying whether this piece of transport equipment is full, partially full, or empty.
     *  0..1
     *  Transport Equipment
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\FullnessIndicationCode $fullnessIndicationCode
     * @return self
     */
    public function setFullnessIndicationCode(?\App\UBL\Common\CBC\FullnessIndicationCode $fullnessIndicationCode = null)
    {
        $this->fullnessIndicationCode = $fullnessIndicationCode;
        return $this;
    }

    /**
     * Gets as refrigerationOnIndicator
     *
     * BBIE
     *  Transport Equipment. Refrigeration On_ Indicator. Indicator
     *  An indicator that this piece of transport equipment's refrigeration is on (true) or off (false).
     *  0..1
     *  Transport Equipment
     *  Refrigeration On
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRefrigerationOnIndicator()
    {
        return $this->refrigerationOnIndicator;
    }

    /**
     * Sets a new refrigerationOnIndicator
     *
     * BBIE
     *  Transport Equipment. Refrigeration On_ Indicator. Indicator
     *  An indicator that this piece of transport equipment's refrigeration is on (true) or off (false).
     *  0..1
     *  Transport Equipment
     *  Refrigeration On
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $refrigerationOnIndicator
     * @return self
     */
    public function setRefrigerationOnIndicator($refrigerationOnIndicator)
    {
        $this->refrigerationOnIndicator = $refrigerationOnIndicator;
        return $this;
    }

    /**
     * Adds as information
     *
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Information $information
     */
    public function addToInformation(\App\UBL\Common\CBC\Information $information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * isset information
     *
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Information[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * BBIE
     *  Transport Equipment. Information. Text
     *  Additional information about this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Information[] $information
     * @return self
     */
    public function setInformation(?array $information = null)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as returnabilityIndicator
     *
     * BBIE
     *  Transport Equipment. Returnability_ Indicator. Indicator
     *  An indicator that this piece of transport equipment is returnable (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Returnability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getReturnabilityIndicator()
    {
        return $this->returnabilityIndicator;
    }

    /**
     * Sets a new returnabilityIndicator
     *
     * BBIE
     *  Transport Equipment. Returnability_ Indicator. Indicator
     *  An indicator that this piece of transport equipment is returnable (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Returnability
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $returnabilityIndicator
     * @return self
     */
    public function setReturnabilityIndicator($returnabilityIndicator)
    {
        $this->returnabilityIndicator = $returnabilityIndicator;
        return $this;
    }

    /**
     * Gets as legalStatusIndicator
     *
     * BBIE
     *  Transport Equipment. Legal Status_ Indicator. Indicator
     *  An indication of the legal status of this piece of transport equipment with respect to the Container Convention Code.
     *  0..1
     *  Transport Equipment
     *  Legal Status
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getLegalStatusIndicator()
    {
        return $this->legalStatusIndicator;
    }

    /**
     * Sets a new legalStatusIndicator
     *
     * BBIE
     *  Transport Equipment. Legal Status_ Indicator. Indicator
     *  An indication of the legal status of this piece of transport equipment with respect to the Container Convention Code.
     *  0..1
     *  Transport Equipment
     *  Legal Status
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $legalStatusIndicator
     * @return self
     */
    public function setLegalStatusIndicator($legalStatusIndicator)
    {
        $this->legalStatusIndicator = $legalStatusIndicator;
        return $this;
    }

    /**
     * Gets as airFlowPercent
     *
     * BBIE
     *  Transport Equipment. Air Flow Percent. Percent
     *  The percent of the airflow within this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Air Flow Percent
     *  Percent
     *  Percent. Type
     *
     * @return \App\UBL\Common\CBC\AirFlowPercent
     */
    public function getAirFlowPercent()
    {
        return $this->airFlowPercent;
    }

    /**
     * Sets a new airFlowPercent
     *
     * BBIE
     *  Transport Equipment. Air Flow Percent. Percent
     *  The percent of the airflow within this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Air Flow Percent
     *  Percent
     *  Percent. Type
     *
     * @param \App\UBL\Common\CBC\AirFlowPercent $airFlowPercent
     * @return self
     */
    public function setAirFlowPercent(?\App\UBL\Common\CBC\AirFlowPercent $airFlowPercent = null)
    {
        $this->airFlowPercent = $airFlowPercent;
        return $this;
    }

    /**
     * Gets as humidityPercent
     *
     * BBIE
     *  Transport Equipment. Humidity Percent. Percent
     *  The percent humidity within this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Humidity Percent
     *  Percent
     *  Percent. Type
     *
     * @return \App\UBL\Common\CBC\HumidityPercent
     */
    public function getHumidityPercent()
    {
        return $this->humidityPercent;
    }

    /**
     * Sets a new humidityPercent
     *
     * BBIE
     *  Transport Equipment. Humidity Percent. Percent
     *  The percent humidity within this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Humidity Percent
     *  Percent
     *  Percent. Type
     *
     * @param \App\UBL\Common\CBC\HumidityPercent $humidityPercent
     * @return self
     */
    public function setHumidityPercent(?\App\UBL\Common\CBC\HumidityPercent $humidityPercent = null)
    {
        $this->humidityPercent = $humidityPercent;
        return $this;
    }

    /**
     * Gets as animalFoodApprovedIndicator
     *
     * BBIE
     *  Transport Equipment. Animal Food_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for animal food (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Animal Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getAnimalFoodApprovedIndicator()
    {
        return $this->animalFoodApprovedIndicator;
    }

    /**
     * Sets a new animalFoodApprovedIndicator
     *
     * BBIE
     *  Transport Equipment. Animal Food_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for animal food (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Animal Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $animalFoodApprovedIndicator
     * @return self
     */
    public function setAnimalFoodApprovedIndicator($animalFoodApprovedIndicator)
    {
        $this->animalFoodApprovedIndicator = $animalFoodApprovedIndicator;
        return $this;
    }

    /**
     * Gets as humanFoodApprovedIndicator
     *
     * BBIE
     *  Transport Equipment. Human Food_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for human food (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Human Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getHumanFoodApprovedIndicator()
    {
        return $this->humanFoodApprovedIndicator;
    }

    /**
     * Sets a new humanFoodApprovedIndicator
     *
     * BBIE
     *  Transport Equipment. Human Food_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for human food (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Human Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $humanFoodApprovedIndicator
     * @return self
     */
    public function setHumanFoodApprovedIndicator($humanFoodApprovedIndicator)
    {
        $this->humanFoodApprovedIndicator = $humanFoodApprovedIndicator;
        return $this;
    }

    /**
     * Gets as dangerousGoodsApprovedIndicator
     *
     * BBIE
     *  Transport Equipment. Dangerous Goods_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for dangerous goods (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Dangerous Goods
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getDangerousGoodsApprovedIndicator()
    {
        return $this->dangerousGoodsApprovedIndicator;
    }

    /**
     * Sets a new dangerousGoodsApprovedIndicator
     *
     * BBIE
     *  Transport Equipment. Dangerous Goods_ Approved Indicator. Indicator
     *  An indicator that this piece of transport equipment is approved for dangerous goods (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Dangerous Goods
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $dangerousGoodsApprovedIndicator
     * @return self
     */
    public function setDangerousGoodsApprovedIndicator($dangerousGoodsApprovedIndicator)
    {
        $this->dangerousGoodsApprovedIndicator = $dangerousGoodsApprovedIndicator;
        return $this;
    }

    /**
     * Gets as refrigeratedIndicator
     *
     * BBIE
     *  Transport Equipment. Refrigerated_ Indicator. Indicator
     *  An indicator that this piece of transport equipment is refrigerated (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Refrigerated
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRefrigeratedIndicator()
    {
        return $this->refrigeratedIndicator;
    }

    /**
     * Sets a new refrigeratedIndicator
     *
     * BBIE
     *  Transport Equipment. Refrigerated_ Indicator. Indicator
     *  An indicator that this piece of transport equipment is refrigerated (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Refrigerated
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $refrigeratedIndicator
     * @return self
     */
    public function setRefrigeratedIndicator($refrigeratedIndicator)
    {
        $this->refrigeratedIndicator = $refrigeratedIndicator;
        return $this;
    }

    /**
     * Gets as characteristics
     *
     * BBIE
     *  Transport Equipment. Characteristics. Text
     *  Characteristics of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Characteristics
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Characteristics
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Sets a new characteristics
     *
     * BBIE
     *  Transport Equipment. Characteristics. Text
     *  Characteristics of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Characteristics
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Characteristics $characteristics
     * @return self
     */
    public function setCharacteristics(?\App\UBL\Common\CBC\Characteristics $characteristics = null)
    {
        $this->characteristics = $characteristics;
        return $this;
    }

    /**
     * Adds as damageRemarks
     *
     * BBIE
     *  Transport Equipment. Damage_ Remarks. Text
     *  Damage associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\DamageRemarks $damageRemarks
     */
    public function addToDamageRemarks(\App\UBL\Common\CBC\DamageRemarks $damageRemarks)
    {
        $this->damageRemarks[] = $damageRemarks;
        return $this;
    }

    /**
     * isset damageRemarks
     *
     * BBIE
     *  Transport Equipment. Damage_ Remarks. Text
     *  Damage associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDamageRemarks($index)
    {
        return isset($this->damageRemarks[$index]);
    }

    /**
     * unset damageRemarks
     *
     * BBIE
     *  Transport Equipment. Damage_ Remarks. Text
     *  Damage associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDamageRemarks($index)
    {
        unset($this->damageRemarks[$index]);
    }

    /**
     * Gets as damageRemarks
     *
     * BBIE
     *  Transport Equipment. Damage_ Remarks. Text
     *  Damage associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\DamageRemarks[]
     */
    public function getDamageRemarks()
    {
        return $this->damageRemarks;
    }

    /**
     * Sets a new damageRemarks
     *
     * BBIE
     *  Transport Equipment. Damage_ Remarks. Text
     *  Damage associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Damage
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\DamageRemarks[] $damageRemarks
     * @return self
     */
    public function setDamageRemarks(?array $damageRemarks = null)
    {
        $this->damageRemarks = $damageRemarks;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Transport Equipment. Description. Text
     *  Text describing this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Description
     *  Text
     *  Text. Type
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
     *  Transport Equipment. Description. Text
     *  Text describing this piece of transport equipment.
     *  0..n
     *  Transport Equipment
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
     *  Transport Equipment. Description. Text
     *  Text describing this piece of transport equipment.
     *  0..n
     *  Transport Equipment
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
     *  Transport Equipment. Description. Text
     *  Text describing this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Description
     *  Text
     *  Text. Type
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
     *  Transport Equipment. Description. Text
     *  Text describing this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Description
     *  Text
     *  Text. Type
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
     * Adds as specialTransportRequirements
     *
     * BBIE
     *  Transport Equipment. Special_ Transport Requirements. Text
     *  Special transport requirements expressed as text.
     *  0..n
     *  Transport Equipment
     *  Special
     *  Transport Requirements
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\SpecialTransportRequirements $specialTransportRequirements
     */
    public function addToSpecialTransportRequirements(\App\UBL\Common\CBC\SpecialTransportRequirements $specialTransportRequirements)
    {
        $this->specialTransportRequirements[] = $specialTransportRequirements;
        return $this;
    }

    /**
     * isset specialTransportRequirements
     *
     * BBIE
     *  Transport Equipment. Special_ Transport Requirements. Text
     *  Special transport requirements expressed as text.
     *  0..n
     *  Transport Equipment
     *  Special
     *  Transport Requirements
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialTransportRequirements($index)
    {
        return isset($this->specialTransportRequirements[$index]);
    }

    /**
     * unset specialTransportRequirements
     *
     * BBIE
     *  Transport Equipment. Special_ Transport Requirements. Text
     *  Special transport requirements expressed as text.
     *  0..n
     *  Transport Equipment
     *  Special
     *  Transport Requirements
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialTransportRequirements($index)
    {
        unset($this->specialTransportRequirements[$index]);
    }

    /**
     * Gets as specialTransportRequirements
     *
     * BBIE
     *  Transport Equipment. Special_ Transport Requirements. Text
     *  Special transport requirements expressed as text.
     *  0..n
     *  Transport Equipment
     *  Special
     *  Transport Requirements
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\SpecialTransportRequirements[]
     */
    public function getSpecialTransportRequirements()
    {
        return $this->specialTransportRequirements;
    }

    /**
     * Sets a new specialTransportRequirements
     *
     * BBIE
     *  Transport Equipment. Special_ Transport Requirements. Text
     *  Special transport requirements expressed as text.
     *  0..n
     *  Transport Equipment
     *  Special
     *  Transport Requirements
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\SpecialTransportRequirements[] $specialTransportRequirements
     * @return self
     */
    public function setSpecialTransportRequirements(?array $specialTransportRequirements = null)
    {
        $this->specialTransportRequirements = $specialTransportRequirements;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Transport Equipment. Gross_ Weight. Measure
     *  The gross weight of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \App\UBL\Common\CBC\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Transport Equipment. Gross_ Weight. Measure
     *  The gross weight of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \App\UBL\Common\CBC\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(?\App\UBL\Common\CBC\GrossWeightMeasure $grossWeightMeasure = null)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Transport Equipment. Gross_ Volume. Measure
     *  The gross volume of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \App\UBL\Common\CBC\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Transport Equipment. Gross_ Volume. Measure
     *  The gross volume of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \App\UBL\Common\CBC\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(?\App\UBL\Common\CBC\GrossVolumeMeasure $grossVolumeMeasure = null)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as tareWeightMeasure
     *
     * BBIE
     *  Transport Equipment. Tare_ Weight. Measure
     *  The weight of this piece of transport equipment when empty.
     *  0..1
     *  Transport Equipment
     *  Tare
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \App\UBL\Common\CBC\TareWeightMeasure
     */
    public function getTareWeightMeasure()
    {
        return $this->tareWeightMeasure;
    }

    /**
     * Sets a new tareWeightMeasure
     *
     * BBIE
     *  Transport Equipment. Tare_ Weight. Measure
     *  The weight of this piece of transport equipment when empty.
     *  0..1
     *  Transport Equipment
     *  Tare
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \App\UBL\Common\CBC\TareWeightMeasure $tareWeightMeasure
     * @return self
     */
    public function setTareWeightMeasure(?\App\UBL\Common\CBC\TareWeightMeasure $tareWeightMeasure = null)
    {
        $this->tareWeightMeasure = $tareWeightMeasure;
        return $this;
    }

    /**
     * Gets as trackingDeviceCode
     *
     * BBIE
     *  Transport Equipment. Tracking Device Code. Code
     *  A code signifying the tracking device for this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Tracking Device Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\TrackingDeviceCode
     */
    public function getTrackingDeviceCode()
    {
        return $this->trackingDeviceCode;
    }

    /**
     * Sets a new trackingDeviceCode
     *
     * BBIE
     *  Transport Equipment. Tracking Device Code. Code
     *  A code signifying the tracking device for this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Tracking Device Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\TrackingDeviceCode $trackingDeviceCode
     * @return self
     */
    public function setTrackingDeviceCode(?\App\UBL\Common\CBC\TrackingDeviceCode $trackingDeviceCode = null)
    {
        $this->trackingDeviceCode = $trackingDeviceCode;
        return $this;
    }

    /**
     * Gets as powerIndicator
     *
     * BBIE
     *  Transport Equipment. Power. Indicator
     *  An indicator that this piece of transport equipment can supply power (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Power
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPowerIndicator()
    {
        return $this->powerIndicator;
    }

    /**
     * Sets a new powerIndicator
     *
     * BBIE
     *  Transport Equipment. Power. Indicator
     *  An indicator that this piece of transport equipment can supply power (true) or not (false).
     *  0..1
     *  Transport Equipment
     *  Power
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $powerIndicator
     * @return self
     */
    public function setPowerIndicator($powerIndicator)
    {
        $this->powerIndicator = $powerIndicator;
        return $this;
    }

    /**
     * Gets as traceID
     *
     * BBIE
     *  Transport Equipment. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this piece of transport equipment, such as the EPC number used in RFID.
     *  0..1
     *  Transport Equipment
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\TraceID
     */
    public function getTraceID()
    {
        return $this->traceID;
    }

    /**
     * Sets a new traceID
     *
     * BBIE
     *  Transport Equipment. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this piece of transport equipment, such as the EPC number used in RFID.
     *  0..1
     *  Transport Equipment
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\TraceID $traceID
     * @return self
     */
    public function setTraceID(?\App\UBL\Common\CBC\TraceID $traceID = null)
    {
        $this->traceID = $traceID;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
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
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
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
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
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
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
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
     *  Transport Equipment. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
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

    /**
     * Adds as transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  A seal securing the door of a piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @return self
     * @param \App\UBL\Common\CAC\TransportEquipmentSeal $transportEquipmentSeal
     */
    public function addToTransportEquipmentSeal(\App\UBL\Common\CAC\TransportEquipmentSeal $transportEquipmentSeal)
    {
        $this->transportEquipmentSeal[] = $transportEquipmentSeal;
        return $this;
    }

    /**
     * isset transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  A seal securing the door of a piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEquipmentSeal($index)
    {
        return isset($this->transportEquipmentSeal[$index]);
    }

    /**
     * unset transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  A seal securing the door of a piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEquipmentSeal($index)
    {
        unset($this->transportEquipmentSeal[$index]);
    }

    /**
     * Gets as transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  A seal securing the door of a piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @return \App\UBL\Common\CAC\TransportEquipmentSeal[]
     */
    public function getTransportEquipmentSeal()
    {
        return $this->transportEquipmentSeal;
    }

    /**
     * Sets a new transportEquipmentSeal
     *
     * ASBIE
     *  Transport Equipment. Transport Equipment Seal
     *  A seal securing the door of a piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *  Transport Equipment Seal
     *
     * @param \App\UBL\Common\CAC\TransportEquipmentSeal[] $transportEquipmentSeal
     * @return self
     */
    public function setTransportEquipmentSeal(?array $transportEquipmentSeal = null)
    {
        $this->transportEquipmentSeal = $transportEquipmentSeal;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * ASBIE
     *  Transport Equipment. Minimum_ Temperature. Temperature
     *  In the case of a refrigeration unit, the minimum allowable operating temperature for this container.
     *  0..1
     *  Transport Equipment
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \App\UBL\Common\CAC\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * ASBIE
     *  Transport Equipment. Minimum_ Temperature. Temperature
     *  In the case of a refrigeration unit, the minimum allowable operating temperature for this container.
     *  0..1
     *  Transport Equipment
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \App\UBL\Common\CAC\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(?\App\UBL\Common\CAC\MinimumTemperature $minimumTemperature = null)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * ASBIE
     *  Transport Equipment. Maximum_ Temperature. Temperature
     *  In the case of a refrigeration unit, the maximum allowable operating temperature for this container.
     *  0..1
     *  Transport Equipment
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \App\UBL\Common\CAC\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * ASBIE
     *  Transport Equipment. Maximum_ Temperature. Temperature
     *  In the case of a refrigeration unit, the maximum allowable operating temperature for this container.
     *  0..1
     *  Transport Equipment
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \App\UBL\Common\CAC\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(?\App\UBL\Common\CAC\MaximumTemperature $maximumTemperature = null)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }

    /**
     * Gets as providerParty
     *
     * ASBIE
     *  Transport Equipment. Provider_ Party. Party
     *  The party providing this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\ProviderParty
     */
    public function getProviderParty()
    {
        return $this->providerParty;
    }

    /**
     * Sets a new providerParty
     *
     * ASBIE
     *  Transport Equipment. Provider_ Party. Party
     *  The party providing this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\ProviderParty $providerParty
     * @return self
     */
    public function setProviderParty(?\App\UBL\Common\CAC\ProviderParty $providerParty = null)
    {
        $this->providerParty = $providerParty;
        return $this;
    }

    /**
     * Gets as loadingProofParty
     *
     * ASBIE
     *  Transport Equipment. Loading Proof_ Party. Party
     *  The authorized party responsible for certifying that the goods were loaded into this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading Proof
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @return \App\UBL\Common\CAC\LoadingProofParty
     */
    public function getLoadingProofParty()
    {
        return $this->loadingProofParty;
    }

    /**
     * Sets a new loadingProofParty
     *
     * ASBIE
     *  Transport Equipment. Loading Proof_ Party. Party
     *  The authorized party responsible for certifying that the goods were loaded into this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Loading Proof
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @param \App\UBL\Common\CAC\LoadingProofParty $loadingProofParty
     * @return self
     */
    public function setLoadingProofParty(?\App\UBL\Common\CAC\LoadingProofParty $loadingProofParty = null)
    {
        $this->loadingProofParty = $loadingProofParty;
        return $this;
    }

    /**
     * Gets as supplierParty
     *
     * ASBIE
     *  Transport Equipment. Supplier Party
     *  The party that supplies this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @return \App\UBL\Common\CAC\SupplierParty
     */
    public function getSupplierParty()
    {
        return $this->supplierParty;
    }

    /**
     * Sets a new supplierParty
     *
     * ASBIE
     *  Transport Equipment. Supplier Party
     *  The party that supplies this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @param \App\UBL\Common\CAC\SupplierParty $supplierParty
     * @return self
     */
    public function setSupplierParty(?\App\UBL\Common\CAC\SupplierParty $supplierParty = null)
    {
        $this->supplierParty = $supplierParty;
        return $this;
    }

    /**
     * Gets as ownerParty
     *
     * ASBIE
     *  Transport Equipment. Owner_ Party. Party
     *  The party that owns this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
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
     *  Transport Equipment. Owner_ Party. Party
     *  The party that owns this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Owner
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
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
     * Gets as operatingParty
     *
     * ASBIE
     *  Transport Equipment. Operating_ Party. Party
     *  The party that operates this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Operating
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @return \App\UBL\Common\CAC\OperatingParty
     */
    public function getOperatingParty()
    {
        return $this->operatingParty;
    }

    /**
     * Sets a new operatingParty
     *
     * ASBIE
     *  Transport Equipment. Operating_ Party. Party
     *  The party that operates this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Operating
     *  Party
     *  Party
     *  Party
     *  Party responsible for proof of vanning (WCO ID 059)
     *
     * @param \App\UBL\Common\CAC\OperatingParty $operatingParty
     * @return self
     */
    public function setOperatingParty(?\App\UBL\Common\CAC\OperatingParty $operatingParty = null)
    {
        $this->operatingParty = $operatingParty;
        return $this;
    }

    /**
     * Gets as loadingLocation
     *
     * ASBIE
     *  Transport Equipment. Loading_ Location. Location
     *  The location where this piece of transport equipment is loaded.
     *  0..1
     *  Transport Equipment
     *  Loading
     *  Location
     *  Location
     *  Location
     *  Vanning address (WCO ID 068), Stuffing location
     *
     * @return \App\UBL\Common\CAC\LoadingLocation
     */
    public function getLoadingLocation()
    {
        return $this->loadingLocation;
    }

    /**
     * Sets a new loadingLocation
     *
     * ASBIE
     *  Transport Equipment. Loading_ Location. Location
     *  The location where this piece of transport equipment is loaded.
     *  0..1
     *  Transport Equipment
     *  Loading
     *  Location
     *  Location
     *  Location
     *  Vanning address (WCO ID 068), Stuffing location
     *
     * @param \App\UBL\Common\CAC\LoadingLocation $loadingLocation
     * @return self
     */
    public function setLoadingLocation(?\App\UBL\Common\CAC\LoadingLocation $loadingLocation = null)
    {
        $this->loadingLocation = $loadingLocation;
        return $this;
    }

    /**
     * Gets as unloadingLocation
     *
     * ASBIE
     *  Transport Equipment. Unloading_ Location. Location
     *  The location where this piece of transport equipment is unloaded.
     *  0..1
     *  Transport Equipment
     *  Unloading
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\UnloadingLocation
     */
    public function getUnloadingLocation()
    {
        return $this->unloadingLocation;
    }

    /**
     * Sets a new unloadingLocation
     *
     * ASBIE
     *  Transport Equipment. Unloading_ Location. Location
     *  The location where this piece of transport equipment is unloaded.
     *  0..1
     *  Transport Equipment
     *  Unloading
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\UnloadingLocation $unloadingLocation
     * @return self
     */
    public function setUnloadingLocation(?\App\UBL\Common\CAC\UnloadingLocation $unloadingLocation = null)
    {
        $this->unloadingLocation = $unloadingLocation;
        return $this;
    }

    /**
     * Gets as storageLocation
     *
     * ASBIE
     *  Transport Equipment. Storage_ Location. Location
     *  The location where this piece of transport equipment is being stored.
     *  0..1
     *  Transport Equipment
     *  Storage
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\StorageLocation
     */
    public function getStorageLocation()
    {
        return $this->storageLocation;
    }

    /**
     * Sets a new storageLocation
     *
     * ASBIE
     *  Transport Equipment. Storage_ Location. Location
     *  The location where this piece of transport equipment is being stored.
     *  0..1
     *  Transport Equipment
     *  Storage
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\StorageLocation $storageLocation
     * @return self
     */
    public function setStorageLocation(?\App\UBL\Common\CAC\StorageLocation $storageLocation = null)
    {
        $this->storageLocation = $storageLocation;
        return $this;
    }

    /**
     * Adds as positioningTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Positioning_ Transport Event. Transport Event
     *  A positioning of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Positioning
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\PositioningTransportEvent $positioningTransportEvent
     */
    public function addToPositioningTransportEvent(\App\UBL\Common\CAC\PositioningTransportEvent $positioningTransportEvent)
    {
        $this->positioningTransportEvent[] = $positioningTransportEvent;
        return $this;
    }

    /**
     * isset positioningTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Positioning_ Transport Event. Transport Event
     *  A positioning of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Positioning
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPositioningTransportEvent($index)
    {
        return isset($this->positioningTransportEvent[$index]);
    }

    /**
     * unset positioningTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Positioning_ Transport Event. Transport Event
     *  A positioning of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Positioning
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPositioningTransportEvent($index)
    {
        unset($this->positioningTransportEvent[$index]);
    }

    /**
     * Gets as positioningTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Positioning_ Transport Event. Transport Event
     *  A positioning of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Positioning
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\PositioningTransportEvent[]
     */
    public function getPositioningTransportEvent()
    {
        return $this->positioningTransportEvent;
    }

    /**
     * Sets a new positioningTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Positioning_ Transport Event. Transport Event
     *  A positioning of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Positioning
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\PositioningTransportEvent[] $positioningTransportEvent
     * @return self
     */
    public function setPositioningTransportEvent(?array $positioningTransportEvent = null)
    {
        $this->positioningTransportEvent = $positioningTransportEvent;
        return $this;
    }

    /**
     * Adds as quarantineTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Quarantine_ Transport Event. Transport Event
     *  A quarantine of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Quarantine
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\QuarantineTransportEvent $quarantineTransportEvent
     */
    public function addToQuarantineTransportEvent(\App\UBL\Common\CAC\QuarantineTransportEvent $quarantineTransportEvent)
    {
        $this->quarantineTransportEvent[] = $quarantineTransportEvent;
        return $this;
    }

    /**
     * isset quarantineTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Quarantine_ Transport Event. Transport Event
     *  A quarantine of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Quarantine
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuarantineTransportEvent($index)
    {
        return isset($this->quarantineTransportEvent[$index]);
    }

    /**
     * unset quarantineTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Quarantine_ Transport Event. Transport Event
     *  A quarantine of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Quarantine
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuarantineTransportEvent($index)
    {
        unset($this->quarantineTransportEvent[$index]);
    }

    /**
     * Gets as quarantineTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Quarantine_ Transport Event. Transport Event
     *  A quarantine of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Quarantine
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\QuarantineTransportEvent[]
     */
    public function getQuarantineTransportEvent()
    {
        return $this->quarantineTransportEvent;
    }

    /**
     * Sets a new quarantineTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Quarantine_ Transport Event. Transport Event
     *  A quarantine of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Quarantine
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\QuarantineTransportEvent[] $quarantineTransportEvent
     * @return self
     */
    public function setQuarantineTransportEvent(?array $quarantineTransportEvent = null)
    {
        $this->quarantineTransportEvent = $quarantineTransportEvent;
        return $this;
    }

    /**
     * Adds as deliveryTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Delivery_ Transport Event. Transport Event
     *  A delivery of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\DeliveryTransportEvent $deliveryTransportEvent
     */
    public function addToDeliveryTransportEvent(\App\UBL\Common\CAC\DeliveryTransportEvent $deliveryTransportEvent)
    {
        $this->deliveryTransportEvent[] = $deliveryTransportEvent;
        return $this;
    }

    /**
     * isset deliveryTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Delivery_ Transport Event. Transport Event
     *  A delivery of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryTransportEvent($index)
    {
        return isset($this->deliveryTransportEvent[$index]);
    }

    /**
     * unset deliveryTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Delivery_ Transport Event. Transport Event
     *  A delivery of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryTransportEvent($index)
    {
        unset($this->deliveryTransportEvent[$index]);
    }

    /**
     * Gets as deliveryTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Delivery_ Transport Event. Transport Event
     *  A delivery of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\DeliveryTransportEvent[]
     */
    public function getDeliveryTransportEvent()
    {
        return $this->deliveryTransportEvent;
    }

    /**
     * Sets a new deliveryTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Delivery_ Transport Event. Transport Event
     *  A delivery of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\DeliveryTransportEvent[] $deliveryTransportEvent
     * @return self
     */
    public function setDeliveryTransportEvent(?array $deliveryTransportEvent = null)
    {
        $this->deliveryTransportEvent = $deliveryTransportEvent;
        return $this;
    }

    /**
     * Adds as pickupTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Pickup_ Transport Event. Transport Event
     *  A pickup of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\PickupTransportEvent $pickupTransportEvent
     */
    public function addToPickupTransportEvent(\App\UBL\Common\CAC\PickupTransportEvent $pickupTransportEvent)
    {
        $this->pickupTransportEvent[] = $pickupTransportEvent;
        return $this;
    }

    /**
     * isset pickupTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Pickup_ Transport Event. Transport Event
     *  A pickup of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickupTransportEvent($index)
    {
        return isset($this->pickupTransportEvent[$index]);
    }

    /**
     * unset pickupTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Pickup_ Transport Event. Transport Event
     *  A pickup of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickupTransportEvent($index)
    {
        unset($this->pickupTransportEvent[$index]);
    }

    /**
     * Gets as pickupTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Pickup_ Transport Event. Transport Event
     *  A pickup of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\PickupTransportEvent[]
     */
    public function getPickupTransportEvent()
    {
        return $this->pickupTransportEvent;
    }

    /**
     * Sets a new pickupTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Pickup_ Transport Event. Transport Event
     *  A pickup of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\PickupTransportEvent[] $pickupTransportEvent
     * @return self
     */
    public function setPickupTransportEvent(?array $pickupTransportEvent = null)
    {
        $this->pickupTransportEvent = $pickupTransportEvent;
        return $this;
    }

    /**
     * Adds as handlingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Handling_ Transport Event. Transport Event
     *  A handling of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Handling
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\HandlingTransportEvent $handlingTransportEvent
     */
    public function addToHandlingTransportEvent(\App\UBL\Common\CAC\HandlingTransportEvent $handlingTransportEvent)
    {
        $this->handlingTransportEvent[] = $handlingTransportEvent;
        return $this;
    }

    /**
     * isset handlingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Handling_ Transport Event. Transport Event
     *  A handling of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Handling
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandlingTransportEvent($index)
    {
        return isset($this->handlingTransportEvent[$index]);
    }

    /**
     * unset handlingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Handling_ Transport Event. Transport Event
     *  A handling of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Handling
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandlingTransportEvent($index)
    {
        unset($this->handlingTransportEvent[$index]);
    }

    /**
     * Gets as handlingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Handling_ Transport Event. Transport Event
     *  A handling of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Handling
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\HandlingTransportEvent[]
     */
    public function getHandlingTransportEvent()
    {
        return $this->handlingTransportEvent;
    }

    /**
     * Sets a new handlingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Handling_ Transport Event. Transport Event
     *  A handling of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Handling
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\HandlingTransportEvent[] $handlingTransportEvent
     * @return self
     */
    public function setHandlingTransportEvent(?array $handlingTransportEvent = null)
    {
        $this->handlingTransportEvent = $handlingTransportEvent;
        return $this;
    }

    /**
     * Adds as loadingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Loading_ Transport Event. Transport Event
     *  A loading of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\LoadingTransportEvent $loadingTransportEvent
     */
    public function addToLoadingTransportEvent(\App\UBL\Common\CAC\LoadingTransportEvent $loadingTransportEvent)
    {
        $this->loadingTransportEvent[] = $loadingTransportEvent;
        return $this;
    }

    /**
     * isset loadingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Loading_ Transport Event. Transport Event
     *  A loading of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoadingTransportEvent($index)
    {
        return isset($this->loadingTransportEvent[$index]);
    }

    /**
     * unset loadingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Loading_ Transport Event. Transport Event
     *  A loading of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoadingTransportEvent($index)
    {
        unset($this->loadingTransportEvent[$index]);
    }

    /**
     * Gets as loadingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Loading_ Transport Event. Transport Event
     *  A loading of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\LoadingTransportEvent[]
     */
    public function getLoadingTransportEvent()
    {
        return $this->loadingTransportEvent;
    }

    /**
     * Sets a new loadingTransportEvent
     *
     * ASBIE
     *  Transport Equipment. Loading_ Transport Event. Transport Event
     *  A loading of this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\LoadingTransportEvent[] $loadingTransportEvent
     * @return self
     */
    public function setLoadingTransportEvent(?array $loadingTransportEvent = null)
    {
        $this->loadingTransportEvent = $loadingTransportEvent;
        return $this;
    }

    /**
     * Adds as transportEvent
     *
     * ASBIE
     *  Transport Equipment. Transport Event
     *  A transport event associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\TransportEvent $transportEvent
     */
    public function addToTransportEvent(\App\UBL\Common\CAC\TransportEvent $transportEvent)
    {
        $this->transportEvent[] = $transportEvent;
        return $this;
    }

    /**
     * isset transportEvent
     *
     * ASBIE
     *  Transport Equipment. Transport Event
     *  A transport event associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEvent($index)
    {
        return isset($this->transportEvent[$index]);
    }

    /**
     * unset transportEvent
     *
     * ASBIE
     *  Transport Equipment. Transport Event
     *  A transport event associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEvent($index)
    {
        unset($this->transportEvent[$index]);
    }

    /**
     * Gets as transportEvent
     *
     * ASBIE
     *  Transport Equipment. Transport Event
     *  A transport event associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\TransportEvent[]
     */
    public function getTransportEvent()
    {
        return $this->transportEvent;
    }

    /**
     * Sets a new transportEvent
     *
     * ASBIE
     *  Transport Equipment. Transport Event
     *  A transport event associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\TransportEvent[] $transportEvent
     * @return self
     */
    public function setTransportEvent(?array $transportEvent = null)
    {
        $this->transportEvent = $transportEvent;
        return $this;
    }

    /**
     * Gets as applicableTransportMeans
     *
     * ASBIE
     *  Transport Equipment. Applicable_ Transport Means. Transport Means
     *  The applicable transport means associated with this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Applicable
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @return \App\UBL\Common\CAC\ApplicableTransportMeans
     */
    public function getApplicableTransportMeans()
    {
        return $this->applicableTransportMeans;
    }

    /**
     * Sets a new applicableTransportMeans
     *
     * ASBIE
     *  Transport Equipment. Applicable_ Transport Means. Transport Means
     *  The applicable transport means associated with this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Applicable
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param \App\UBL\Common\CAC\ApplicableTransportMeans $applicableTransportMeans
     * @return self
     */
    public function setApplicableTransportMeans(?\App\UBL\Common\CAC\ApplicableTransportMeans $applicableTransportMeans = null)
    {
        $this->applicableTransportMeans = $applicableTransportMeans;
        return $this;
    }

    /**
     * Adds as haulageTradingTerms
     *
     * ASBIE
     *  Transport Equipment. Haulage_ Trading Terms. Trading Terms
     *  A set of haulage trading terms associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Haulage
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @return self
     * @param \App\UBL\Common\CAC\HaulageTradingTerms $haulageTradingTerms
     */
    public function addToHaulageTradingTerms(\App\UBL\Common\CAC\HaulageTradingTerms $haulageTradingTerms)
    {
        $this->haulageTradingTerms[] = $haulageTradingTerms;
        return $this;
    }

    /**
     * isset haulageTradingTerms
     *
     * ASBIE
     *  Transport Equipment. Haulage_ Trading Terms. Trading Terms
     *  A set of haulage trading terms associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Haulage
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHaulageTradingTerms($index)
    {
        return isset($this->haulageTradingTerms[$index]);
    }

    /**
     * unset haulageTradingTerms
     *
     * ASBIE
     *  Transport Equipment. Haulage_ Trading Terms. Trading Terms
     *  A set of haulage trading terms associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Haulage
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHaulageTradingTerms($index)
    {
        unset($this->haulageTradingTerms[$index]);
    }

    /**
     * Gets as haulageTradingTerms
     *
     * ASBIE
     *  Transport Equipment. Haulage_ Trading Terms. Trading Terms
     *  A set of haulage trading terms associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Haulage
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @return \App\UBL\Common\CAC\HaulageTradingTerms[]
     */
    public function getHaulageTradingTerms()
    {
        return $this->haulageTradingTerms;
    }

    /**
     * Sets a new haulageTradingTerms
     *
     * ASBIE
     *  Transport Equipment. Haulage_ Trading Terms. Trading Terms
     *  A set of haulage trading terms associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Haulage
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @param \App\UBL\Common\CAC\HaulageTradingTerms[] $haulageTradingTerms
     * @return self
     */
    public function setHaulageTradingTerms(?array $haulageTradingTerms = null)
    {
        $this->haulageTradingTerms = $haulageTradingTerms;
        return $this;
    }

    /**
     * Adds as hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Equipment. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return self
     * @param \App\UBL\Common\CAC\HazardousGoodsTransit $hazardousGoodsTransit
     */
    public function addToHazardousGoodsTransit(\App\UBL\Common\CAC\HazardousGoodsTransit $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * isset hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Equipment. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousGoodsTransit($index)
    {
        return isset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * unset hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Equipment. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousGoodsTransit($index)
    {
        unset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * Gets as hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Equipment. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return \App\UBL\Common\CAC\HazardousGoodsTransit[]
     */
    public function getHazardousGoodsTransit()
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * Sets a new hazardousGoodsTransit
     *
     * ASBIE
     *  Transport Equipment. Hazardous Goods Transit
     *  Transit-related information regarding a type of hazardous goods contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param \App\UBL\Common\CAC\HazardousGoodsTransit[] $hazardousGoodsTransit
     * @return self
     */
    public function setHazardousGoodsTransit(?array $hazardousGoodsTransit = null)
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * Adds as packagedTransportHandlingUnit
     *
     * ASBIE
     *  Transport Equipment. Packaged_ Transport Handling Unit. Transport Handling Unit
     *  A packaged transport handling unit associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Packaged
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @return self
     * @param \App\UBL\Common\CAC\PackagedTransportHandlingUnit $packagedTransportHandlingUnit
     */
    public function addToPackagedTransportHandlingUnit(\App\UBL\Common\CAC\PackagedTransportHandlingUnit $packagedTransportHandlingUnit)
    {
        $this->packagedTransportHandlingUnit[] = $packagedTransportHandlingUnit;
        return $this;
    }

    /**
     * isset packagedTransportHandlingUnit
     *
     * ASBIE
     *  Transport Equipment. Packaged_ Transport Handling Unit. Transport Handling Unit
     *  A packaged transport handling unit associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Packaged
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackagedTransportHandlingUnit($index)
    {
        return isset($this->packagedTransportHandlingUnit[$index]);
    }

    /**
     * unset packagedTransportHandlingUnit
     *
     * ASBIE
     *  Transport Equipment. Packaged_ Transport Handling Unit. Transport Handling Unit
     *  A packaged transport handling unit associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Packaged
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackagedTransportHandlingUnit($index)
    {
        unset($this->packagedTransportHandlingUnit[$index]);
    }

    /**
     * Gets as packagedTransportHandlingUnit
     *
     * ASBIE
     *  Transport Equipment. Packaged_ Transport Handling Unit. Transport Handling Unit
     *  A packaged transport handling unit associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Packaged
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @return \App\UBL\Common\CAC\PackagedTransportHandlingUnit[]
     */
    public function getPackagedTransportHandlingUnit()
    {
        return $this->packagedTransportHandlingUnit;
    }

    /**
     * Sets a new packagedTransportHandlingUnit
     *
     * ASBIE
     *  Transport Equipment. Packaged_ Transport Handling Unit. Transport Handling Unit
     *  A packaged transport handling unit associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Packaged
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param \App\UBL\Common\CAC\PackagedTransportHandlingUnit[] $packagedTransportHandlingUnit
     * @return self
     */
    public function setPackagedTransportHandlingUnit(?array $packagedTransportHandlingUnit = null)
    {
        $this->packagedTransportHandlingUnit = $packagedTransportHandlingUnit;
        return $this;
    }

    /**
     * Adds as serviceAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Service_ Allowance Charge. Allowance Charge
     *  A service allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \App\UBL\Common\CAC\ServiceAllowanceCharge $serviceAllowanceCharge
     */
    public function addToServiceAllowanceCharge(\App\UBL\Common\CAC\ServiceAllowanceCharge $serviceAllowanceCharge)
    {
        $this->serviceAllowanceCharge[] = $serviceAllowanceCharge;
        return $this;
    }

    /**
     * isset serviceAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Service_ Allowance Charge. Allowance Charge
     *  A service allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceAllowanceCharge($index)
    {
        return isset($this->serviceAllowanceCharge[$index]);
    }

    /**
     * unset serviceAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Service_ Allowance Charge. Allowance Charge
     *  A service allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceAllowanceCharge($index)
    {
        unset($this->serviceAllowanceCharge[$index]);
    }

    /**
     * Gets as serviceAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Service_ Allowance Charge. Allowance Charge
     *  A service allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \App\UBL\Common\CAC\ServiceAllowanceCharge[]
     */
    public function getServiceAllowanceCharge()
    {
        return $this->serviceAllowanceCharge;
    }

    /**
     * Sets a new serviceAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Service_ Allowance Charge. Allowance Charge
     *  A service allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \App\UBL\Common\CAC\ServiceAllowanceCharge[] $serviceAllowanceCharge
     * @return self
     */
    public function setServiceAllowanceCharge(?array $serviceAllowanceCharge = null)
    {
        $this->serviceAllowanceCharge = $serviceAllowanceCharge;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \App\UBL\Common\CAC\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\App\UBL\Common\CAC\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \App\UBL\Common\CAC\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * ASBIE
     *  Transport Equipment. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \App\UBL\Common\CAC\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(?array $freightAllowanceCharge = null)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }

    /**
     * Adds as attachedTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Attached_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment attached to this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Attached
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return self
     * @param \App\UBL\Common\CAC\AttachedTransportEquipment $attachedTransportEquipment
     */
    public function addToAttachedTransportEquipment(\App\UBL\Common\CAC\AttachedTransportEquipment $attachedTransportEquipment)
    {
        $this->attachedTransportEquipment[] = $attachedTransportEquipment;
        return $this;
    }

    /**
     * isset attachedTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Attached_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment attached to this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Attached
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttachedTransportEquipment($index)
    {
        return isset($this->attachedTransportEquipment[$index]);
    }

    /**
     * unset attachedTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Attached_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment attached to this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Attached
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttachedTransportEquipment($index)
    {
        unset($this->attachedTransportEquipment[$index]);
    }

    /**
     * Gets as attachedTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Attached_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment attached to this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Attached
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \App\UBL\Common\CAC\AttachedTransportEquipment[]
     */
    public function getAttachedTransportEquipment()
    {
        return $this->attachedTransportEquipment;
    }

    /**
     * Sets a new attachedTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Attached_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment attached to this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Attached
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \App\UBL\Common\CAC\AttachedTransportEquipment[] $attachedTransportEquipment
     * @return self
     */
    public function setAttachedTransportEquipment(?array $attachedTransportEquipment = null)
    {
        $this->attachedTransportEquipment = $attachedTransportEquipment;
        return $this;
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Transport Equipment. Delivery
     *  The delivery of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \App\UBL\Common\CAC\Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Transport Equipment. Delivery
     *  The delivery of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \App\UBL\Common\CAC\Delivery $delivery
     * @return self
     */
    public function setDelivery(?\App\UBL\Common\CAC\Delivery $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as pickup
     *
     * ASBIE
     *  Transport Equipment. Pickup
     *  The pickup of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @return \App\UBL\Common\CAC\Pickup
     */
    public function getPickup()
    {
        return $this->pickup;
    }

    /**
     * Sets a new pickup
     *
     * ASBIE
     *  Transport Equipment. Pickup
     *  The pickup of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @param \App\UBL\Common\CAC\Pickup $pickup
     * @return self
     */
    public function setPickup(?\App\UBL\Common\CAC\Pickup $pickup = null)
    {
        $this->pickup = $pickup;
        return $this;
    }

    /**
     * Gets as despatch
     *
     * ASBIE
     *  Transport Equipment. Despatch
     *  The despatch of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @return \App\UBL\Common\CAC\Despatch
     */
    public function getDespatch()
    {
        return $this->despatch;
    }

    /**
     * Sets a new despatch
     *
     * ASBIE
     *  Transport Equipment. Despatch
     *  The despatch of this piece of transport equipment.
     *  0..1
     *  Transport Equipment
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @param \App\UBL\Common\CAC\Despatch $despatch
     * @return self
     */
    public function setDespatch(?\App\UBL\Common\CAC\Despatch $despatch = null)
    {
        $this->despatch = $despatch;
        return $this;
    }

    /**
     * Adds as shipmentDocumentReference
     *
     * ASBIE
     *  Transport Equipment. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \App\UBL\Common\CAC\ShipmentDocumentReference $shipmentDocumentReference
     */
    public function addToShipmentDocumentReference(\App\UBL\Common\CAC\ShipmentDocumentReference $shipmentDocumentReference)
    {
        $this->shipmentDocumentReference[] = $shipmentDocumentReference;
        return $this;
    }

    /**
     * isset shipmentDocumentReference
     *
     * ASBIE
     *  Transport Equipment. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentDocumentReference($index)
    {
        return isset($this->shipmentDocumentReference[$index]);
    }

    /**
     * unset shipmentDocumentReference
     *
     * ASBIE
     *  Transport Equipment. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentDocumentReference($index)
    {
        unset($this->shipmentDocumentReference[$index]);
    }

    /**
     * Gets as shipmentDocumentReference
     *
     * ASBIE
     *  Transport Equipment. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \App\UBL\Common\CAC\ShipmentDocumentReference[]
     */
    public function getShipmentDocumentReference()
    {
        return $this->shipmentDocumentReference;
    }

    /**
     * Sets a new shipmentDocumentReference
     *
     * ASBIE
     *  Transport Equipment. Shipment_ Document Reference. Document Reference
     *  A reference to a shipping document associated with this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Shipment
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \App\UBL\Common\CAC\ShipmentDocumentReference[] $shipmentDocumentReference
     * @return self
     */
    public function setShipmentDocumentReference(?array $shipmentDocumentReference = null)
    {
        $this->shipmentDocumentReference = $shipmentDocumentReference;
        return $this;
    }

    /**
     * Adds as containedInTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Contained In_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Contained In
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *  e.g. pallets inside containers
     *
     * @return self
     * @param \App\UBL\Common\CAC\ContainedInTransportEquipment $containedInTransportEquipment
     */
    public function addToContainedInTransportEquipment(\App\UBL\Common\CAC\ContainedInTransportEquipment $containedInTransportEquipment)
    {
        $this->containedInTransportEquipment[] = $containedInTransportEquipment;
        return $this;
    }

    /**
     * isset containedInTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Contained In_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Contained In
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *  e.g. pallets inside containers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedInTransportEquipment($index)
    {
        return isset($this->containedInTransportEquipment[$index]);
    }

    /**
     * unset containedInTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Contained In_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Contained In
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *  e.g. pallets inside containers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedInTransportEquipment($index)
    {
        unset($this->containedInTransportEquipment[$index]);
    }

    /**
     * Gets as containedInTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Contained In_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Contained In
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *  e.g. pallets inside containers
     *
     * @return \App\UBL\Common\CAC\ContainedInTransportEquipment[]
     */
    public function getContainedInTransportEquipment()
    {
        return $this->containedInTransportEquipment;
    }

    /**
     * Sets a new containedInTransportEquipment
     *
     * ASBIE
     *  Transport Equipment. Contained In_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Contained In
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *  e.g. pallets inside containers
     *
     * @param \App\UBL\Common\CAC\ContainedInTransportEquipment[] $containedInTransportEquipment
     * @return self
     */
    public function setContainedInTransportEquipment(?array $containedInTransportEquipment = null)
    {
        $this->containedInTransportEquipment = $containedInTransportEquipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * ASBIE
     *  Transport Equipment. Package
     *  A package contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \App\UBL\Common\CAC\Package $package
     */
    public function addToPackage(\App\UBL\Common\CAC\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * ASBIE
     *  Transport Equipment. Package
     *  A package contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * ASBIE
     *  Transport Equipment. Package
     *  A package contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Transport Equipment. Package
     *  A package contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Package
     *  Package
     *  Package
     *
     * @return \App\UBL\Common\CAC\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Transport Equipment. Package
     *  A package contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Package
     *  Package
     *  Package
     *
     * @param \App\UBL\Common\CAC\Package[] $package
     * @return self
     */
    public function setPackage(?array $package = null)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * Adds as goodsItem
     *
     * ASBIE
     *  Transport Equipment. Goods Item
     *  A goods item contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\GoodsItem $goodsItem
     */
    public function addToGoodsItem(\App\UBL\Common\CAC\GoodsItem $goodsItem)
    {
        $this->goodsItem[] = $goodsItem;
        return $this;
    }

    /**
     * isset goodsItem
     *
     * ASBIE
     *  Transport Equipment. Goods Item
     *  A goods item contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItem($index)
    {
        return isset($this->goodsItem[$index]);
    }

    /**
     * unset goodsItem
     *
     * ASBIE
     *  Transport Equipment. Goods Item
     *  A goods item contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItem($index)
    {
        unset($this->goodsItem[$index]);
    }

    /**
     * Gets as goodsItem
     *
     * ASBIE
     *  Transport Equipment. Goods Item
     *  A goods item contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return \App\UBL\Common\CAC\GoodsItem[]
     */
    public function getGoodsItem()
    {
        return $this->goodsItem;
    }

    /**
     * Sets a new goodsItem
     *
     * ASBIE
     *  Transport Equipment. Goods Item
     *  A goods item contained in this piece of transport equipment.
     *  0..n
     *  Transport Equipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param \App\UBL\Common\CAC\GoodsItem[] $goodsItem
     * @return self
     */
    public function setGoodsItem(?array $goodsItem = null)
    {
        $this->goodsItem = $goodsItem;
        return $this;
    }
}

