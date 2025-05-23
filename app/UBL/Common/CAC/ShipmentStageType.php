<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ShipmentStageType
 *
 * ABIE
 *  Shipment Stage. Details
 *  A class to describe one stage of movement in a transport of goods.
 *  Shipment Stage
 * XSD Type: ShipmentStageType
 */
class ShipmentStageType
{
    /**
     * BBIE
     *  Shipment Stage. Identifier
     *  An identifier for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1 , 2 , etc..
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  A code signifying the method of transport used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode
     *  Transport Mode_ Code. Type
     *
     * @var \App\UBL\Common\CBC\TransportModeCode $transportModeCode
     */
    private $transportModeCode = null;

    /**
     * BBIE
     *  Shipment Stage. Transport Means Type Code. Code
     *  A code signifying the kind of transport means (truck, vessel, etc.) used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\TransportMeansTypeCode $transportMeansTypeCode
     */
    private $transportMeansTypeCode = null;

    /**
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  A code signifying the direction of transit in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\TransitDirectionCode $transitDirectionCode
     */
    private $transitDirectionCode = null;

    /**
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place before the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @var bool $preCarriageIndicator
     */
    private $preCarriageIndicator = null;

    /**
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place after the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @var bool $onCarriageIndicator
     */
    private $onCarriageIndicator = null;

    /**
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Date. Date
     *  The estimated date of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $estimatedDeliveryDate
     */
    private $estimatedDeliveryDate = null;

    /**
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Time. Time
     *  The estimated time of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $estimatedDeliveryTime
     */
    private $estimatedDeliveryTime = null;

    /**
     * BBIE
     *  Shipment Stage. Required_ Delivery Date. Date
     *  The delivery date required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $requiredDeliveryDate
     */
    private $requiredDeliveryDate = null;

    /**
     * BBIE
     *  Shipment Stage. Required_ Delivery Time. Time
     *  The delivery time required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $requiredDeliveryTime
     */
    private $requiredDeliveryTime = null;

    /**
     * BBIE
     *  Shipment Stage. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence (of consignments) associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\LoadingSequenceID $loadingSequenceID
     */
    private $loadingSequenceID = null;

    /**
     * BBIE
     *  Shipment Stage. Successive_ Sequence Identifier. Identifier
     *  Identifies the successive loading sequence (of consignments) associated with a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Successive
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\SuccessiveSequenceID $successiveSequenceID
     */
    private $successiveSequenceID = null;

    /**
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Instructions[] $instructions
     */
    private $instructions = [
        
    ];

    /**
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\DemurrageInstructions[] $demurrageInstructions
     */
    private $demurrageInstructions = [
        
    ];

    /**
     * BBIE
     *  Shipment Stage. Crew Quantity. Quantity
     *  The total number of crew aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Crew Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \App\UBL\Common\CBC\CrewQuantity $crewQuantity
     */
    private $crewQuantity = null;

    /**
     * BBIE
     *  Shipment Stage. Passenger Quantity. Quantity
     *  The total number of passengers aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Passenger Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \App\UBL\Common\CBC\PassengerQuantity $passengerQuantity
     */
    private $passengerQuantity = null;

    /**
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  The period during which this shipment stage actually took place.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\TransitPeriod $transitPeriod
     */
    private $transitPeriod = null;

    /**
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\CarrierParty[] $carrierParty
     */
    private $carrierParty = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Transport Means
     *  The means of transport used in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @var \App\UBL\Common\CAC\TransportMeans $transportMeans
     */
    private $transportMeans = null;

    /**
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  The location of loading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\LoadingPortLocation $loadingPortLocation
     */
    private $loadingPortLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  The location of unloading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\UnloadingPortLocation $unloadingPortLocation
     */
    private $unloadingPortLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  The location of transshipment relating to a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\TransshipPortLocation $transshipPortLocation
     */
    private $transshipPortLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Loading_ Transport Event. Transport Event
     *  The loading of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\LoadingTransportEvent $loadingTransportEvent
     */
    private $loadingTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Examination_ Transport Event. Transport Event
     *  The examination of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Examination
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\ExaminationTransportEvent $examinationTransportEvent
     */
    private $examinationTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Availability_ Transport Event. Transport Event
     *  The making available of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Availability
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\AvailabilityTransportEvent $availabilityTransportEvent
     */
    private $availabilityTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Exportation_ Transport Event. Transport Event
     *  The export event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Exportation
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\ExportationTransportEvent $exportationTransportEvent
     */
    private $exportationTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Discharge_ Transport Event. Transport Event
     *  The discharge event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Discharge
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\DischargeTransportEvent $dischargeTransportEvent
     */
    private $dischargeTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Warehousing_ Transport Event. Transport Event
     *  The warehousing event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Warehousing
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\WarehousingTransportEvent $warehousingTransportEvent
     */
    private $warehousingTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Takeover_ Transport Event. Transport Event
     *  The receiver's takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\TakeoverTransportEvent $takeoverTransportEvent
     */
    private $takeoverTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Optional Takeover_ Transport Event. Transport Event
     *  The optional takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Optional Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\OptionalTakeoverTransportEvent $optionalTakeoverTransportEvent
     */
    private $optionalTakeoverTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Dropoff_ Transport Event. Transport Event
     *  The dropping off of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Dropoff
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\DropoffTransportEvent $dropoffTransportEvent
     */
    private $dropoffTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Actual Pickup_ Transport Event. Transport Event
     *  The pickup of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Actual Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\ActualPickupTransportEvent $actualPickupTransportEvent
     */
    private $actualPickupTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Delivery_ Transport Event. Transport Event
     *  The delivery of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\DeliveryTransportEvent $deliveryTransportEvent
     */
    private $deliveryTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Receipt_ Transport Event. Transport Event
     *  The receipt of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Receipt
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\ReceiptTransportEvent $receiptTransportEvent
     */
    private $receiptTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Storage_ Transport Event. Transport Event
     *  The storage of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Storage
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\StorageTransportEvent $storageTransportEvent
     */
    private $storageTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Acceptance_ Transport Event. Transport Event
     *  The acceptance of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Acceptance
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\AcceptanceTransportEvent $acceptanceTransportEvent
     */
    private $acceptanceTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Terminal Operator_ Party. Party
     *  A terminal operator associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Terminal Operator
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\TerminalOperatorParty $terminalOperatorParty
     */
    private $terminalOperatorParty = null;

    /**
     * ASBIE
     *  Shipment Stage. Customs Agent_ Party. Party
     *  A customs agent associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Customs Agent
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\CustomsAgentParty $customsAgentParty
     */
    private $customsAgentParty = null;

    /**
     * ASBIE
     *  Shipment Stage. Estimated Transit_ Period. Period
     *  The estimated transit period of this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated Transit
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\EstimatedTransitPeriod $estimatedTransitPeriod
     */
    private $estimatedTransitPeriod = null;

    /**
     * ASBIE
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Freight Charge_ Location. Location
     *  The location associated with a freight charge related to this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Freight Charge
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\FreightChargeLocation $freightChargeLocation
     */
    private $freightChargeLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\DetentionTransportEvent[] $detentionTransportEvent
     */
    private $detentionTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Requested Departure_ Transport Event. Transport Event
     *  The departure requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\RequestedDepartureTransportEvent $requestedDepartureTransportEvent
     */
    private $requestedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Requested Arrival_ Transport Event. Transport Event
     *  The arrival requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\RequestedArrivalTransportEvent $requestedArrivalTransportEvent
     */
    private $requestedArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\RequestedWaypointTransportEvent[] $requestedWaypointTransportEvent
     */
    private $requestedWaypointTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Planned Departure_ Transport Event. Transport Event
     *  The departure planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     */
    private $plannedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Planned Arrival_ Transport Event. Transport Event
     *  The arrival planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     */
    private $plannedArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\PlannedWaypointTransportEvent[] $plannedWaypointTransportEvent
     */
    private $plannedWaypointTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\ActualDepartureTransportEvent $actualDepartureTransportEvent
     */
    private $actualDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Actual Waypoint_ Transport Event. Transport Event
     *  The location of an actual waypoint during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\ActualWaypointTransportEvent $actualWaypointTransportEvent
     */
    private $actualWaypointTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\ActualArrivalTransportEvent $actualArrivalTransportEvent
     */
    private $actualArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Estimated Departure_ Transport Event. Transport Event
     *  Describes an estimated departure at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     */
    private $estimatedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Estimated Arrival_ Transport Event. Transport Event
     *  Describes an estimated arrival at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     */
    private $estimatedArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @var \App\UBL\Common\CAC\PassengerPerson[] $passengerPerson
     */
    private $passengerPerson = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @var \App\UBL\Common\CAC\DriverPerson[] $driverPerson
     */
    private $driverPerson = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Reporting_ Person. Person
     *  Describes a person being responsible for providing the required administrative reporting relating to a transport.
     *  0..1
     *  Shipment Stage
     *  Reporting
     *  Person
     *  Person
     *  Person
     *
     * @var \App\UBL\Common\CAC\ReportingPerson $reportingPerson
     */
    private $reportingPerson = null;

    /**
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @var \App\UBL\Common\CAC\CrewMemberPerson[] $crewMemberPerson
     */
    private $crewMemberPerson = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Security Officer_ Person. Person
     *  The person on board the vessel, accountable to the master, designated by the company as responsible for the security of the ship, including implementation and maintenance of the ship security plan and for the liaison with the company security officer and the port facility security officers.
     *  0..1
     *  Shipment Stage
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *
     * @var \App\UBL\Common\CAC\SecurityOfficerPerson $securityOfficerPerson
     */
    private $securityOfficerPerson = null;

    /**
     * ASBIE
     *  Shipment Stage. Master_ Person. Person
     *  The person responsible for the ship's safe and efficient operation, including cargo operations, navigation, crew management and for ensuring that the vessel complies with local and international laws, as well as company and flag state policies.
     *  0..1
     *  Shipment Stage
     *  Master
     *  Person
     *  Person
     *  Person
     *
     * @var \App\UBL\Common\CAC\MasterPerson $masterPerson
     */
    private $masterPerson = null;

    /**
     * ASBIE
     *  Shipment Stage. Ships Surgeon_ Person. Person
     *  The person responsible for the health of the people aboard a ship at sea.
     *  0..1
     *  Shipment Stage
     *  Ships Surgeon
     *  Person
     *  Person
     *  Person
     *
     * @var \App\UBL\Common\CAC\ShipsSurgeonPerson $shipsSurgeonPerson
     */
    private $shipsSurgeonPerson = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Shipment Stage. Identifier
     *  An identifier for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1 , 2 , etc..
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
     *  Shipment Stage. Identifier
     *  An identifier for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1 , 2 , etc..
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
     * Gets as transportModeCode
     *
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  A code signifying the method of transport used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode
     *  Transport Mode_ Code. Type
     *
     * @return \App\UBL\Common\CBC\TransportModeCode
     */
    public function getTransportModeCode()
    {
        return $this->transportModeCode;
    }

    /**
     * Sets a new transportModeCode
     *
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  A code signifying the method of transport used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode
     *  Transport Mode_ Code. Type
     *
     * @param \App\UBL\Common\CBC\TransportModeCode $transportModeCode
     * @return self
     */
    public function setTransportModeCode(?\App\UBL\Common\CBC\TransportModeCode $transportModeCode = null)
    {
        $this->transportModeCode = $transportModeCode;
        return $this;
    }

    /**
     * Gets as transportMeansTypeCode
     *
     * BBIE
     *  Shipment Stage. Transport Means Type Code. Code
     *  A code signifying the kind of transport means (truck, vessel, etc.) used for this shipment stage.
     *  0..1
     *  Shipment Stage
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
     *  Shipment Stage. Transport Means Type Code. Code
     *  A code signifying the kind of transport means (truck, vessel, etc.) used for this shipment stage.
     *  0..1
     *  Shipment Stage
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
     * Gets as transitDirectionCode
     *
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  A code signifying the direction of transit in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\TransitDirectionCode
     */
    public function getTransitDirectionCode()
    {
        return $this->transitDirectionCode;
    }

    /**
     * Sets a new transitDirectionCode
     *
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  A code signifying the direction of transit in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\TransitDirectionCode $transitDirectionCode
     * @return self
     */
    public function setTransitDirectionCode(?\App\UBL\Common\CBC\TransitDirectionCode $transitDirectionCode = null)
    {
        $this->transitDirectionCode = $transitDirectionCode;
        return $this;
    }

    /**
     * Gets as preCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place before the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @return bool
     */
    public function getPreCarriageIndicator()
    {
        return $this->preCarriageIndicator;
    }

    /**
     * Sets a new preCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place before the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @param bool $preCarriageIndicator
     * @return self
     */
    public function setPreCarriageIndicator($preCarriageIndicator)
    {
        $this->preCarriageIndicator = $preCarriageIndicator;
        return $this;
    }

    /**
     * Gets as onCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place after the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @return bool
     */
    public function getOnCarriageIndicator()
    {
        return $this->onCarriageIndicator;
    }

    /**
     * Sets a new onCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place after the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @param bool $onCarriageIndicator
     * @return self
     */
    public function setOnCarriageIndicator($onCarriageIndicator)
    {
        $this->onCarriageIndicator = $onCarriageIndicator;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryDate
     *
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Date. Date
     *  The estimated date of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->estimatedDeliveryDate;
    }

    /**
     * Sets a new estimatedDeliveryDate
     *
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Date. Date
     *  The estimated date of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $estimatedDeliveryDate
     * @return self
     */
    public function setEstimatedDeliveryDate(?\DateTime $estimatedDeliveryDate = null)
    {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryTime
     *
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Time. Time
     *  The estimated time of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryTime()
    {
        return $this->estimatedDeliveryTime;
    }

    /**
     * Sets a new estimatedDeliveryTime
     *
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Time. Time
     *  The estimated time of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $estimatedDeliveryTime
     * @return self
     */
    public function setEstimatedDeliveryTime(?\DateTime $estimatedDeliveryTime = null)
    {
        $this->estimatedDeliveryTime = $estimatedDeliveryTime;
        return $this;
    }

    /**
     * Gets as requiredDeliveryDate
     *
     * BBIE
     *  Shipment Stage. Required_ Delivery Date. Date
     *  The delivery date required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRequiredDeliveryDate()
    {
        return $this->requiredDeliveryDate;
    }

    /**
     * Sets a new requiredDeliveryDate
     *
     * BBIE
     *  Shipment Stage. Required_ Delivery Date. Date
     *  The delivery date required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $requiredDeliveryDate
     * @return self
     */
    public function setRequiredDeliveryDate(?\DateTime $requiredDeliveryDate = null)
    {
        $this->requiredDeliveryDate = $requiredDeliveryDate;
        return $this;
    }

    /**
     * Gets as requiredDeliveryTime
     *
     * BBIE
     *  Shipment Stage. Required_ Delivery Time. Time
     *  The delivery time required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getRequiredDeliveryTime()
    {
        return $this->requiredDeliveryTime;
    }

    /**
     * Sets a new requiredDeliveryTime
     *
     * BBIE
     *  Shipment Stage. Required_ Delivery Time. Time
     *  The delivery time required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $requiredDeliveryTime
     * @return self
     */
    public function setRequiredDeliveryTime(?\DateTime $requiredDeliveryTime = null)
    {
        $this->requiredDeliveryTime = $requiredDeliveryTime;
        return $this;
    }

    /**
     * Gets as loadingSequenceID
     *
     * BBIE
     *  Shipment Stage. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence (of consignments) associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\LoadingSequenceID
     */
    public function getLoadingSequenceID()
    {
        return $this->loadingSequenceID;
    }

    /**
     * Sets a new loadingSequenceID
     *
     * BBIE
     *  Shipment Stage. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence (of consignments) associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\LoadingSequenceID $loadingSequenceID
     * @return self
     */
    public function setLoadingSequenceID(?\App\UBL\Common\CBC\LoadingSequenceID $loadingSequenceID = null)
    {
        $this->loadingSequenceID = $loadingSequenceID;
        return $this;
    }

    /**
     * Gets as successiveSequenceID
     *
     * BBIE
     *  Shipment Stage. Successive_ Sequence Identifier. Identifier
     *  Identifies the successive loading sequence (of consignments) associated with a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Successive
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\SuccessiveSequenceID
     */
    public function getSuccessiveSequenceID()
    {
        return $this->successiveSequenceID;
    }

    /**
     * Sets a new successiveSequenceID
     *
     * BBIE
     *  Shipment Stage. Successive_ Sequence Identifier. Identifier
     *  Identifies the successive loading sequence (of consignments) associated with a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Successive
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\SuccessiveSequenceID $successiveSequenceID
     * @return self
     */
    public function setSuccessiveSequenceID(?\App\UBL\Common\CBC\SuccessiveSequenceID $successiveSequenceID = null)
    {
        $this->successiveSequenceID = $successiveSequenceID;
        return $this;
    }

    /**
     * Adds as instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Instructions $instructions
     */
    public function addToInstructions(\App\UBL\Common\CBC\Instructions $instructions)
    {
        $this->instructions[] = $instructions;
        return $this;
    }

    /**
     * isset instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstructions($index)
    {
        return isset($this->instructions[$index]);
    }

    /**
     * unset instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstructions($index)
    {
        unset($this->instructions[$index]);
    }

    /**
     * Gets as instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Instructions[]
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Sets a new instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Instructions[] $instructions
     * @return self
     */
    public function setInstructions(?array $instructions = null)
    {
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * Adds as demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\DemurrageInstructions $demurrageInstructions
     */
    public function addToDemurrageInstructions(\App\UBL\Common\CBC\DemurrageInstructions $demurrageInstructions)
    {
        $this->demurrageInstructions[] = $demurrageInstructions;
        return $this;
    }

    /**
     * isset demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDemurrageInstructions($index)
    {
        return isset($this->demurrageInstructions[$index]);
    }

    /**
     * unset demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDemurrageInstructions($index)
    {
        unset($this->demurrageInstructions[$index]);
    }

    /**
     * Gets as demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\DemurrageInstructions[]
     */
    public function getDemurrageInstructions()
    {
        return $this->demurrageInstructions;
    }

    /**
     * Sets a new demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\DemurrageInstructions[] $demurrageInstructions
     * @return self
     */
    public function setDemurrageInstructions(?array $demurrageInstructions = null)
    {
        $this->demurrageInstructions = $demurrageInstructions;
        return $this;
    }

    /**
     * Gets as crewQuantity
     *
     * BBIE
     *  Shipment Stage. Crew Quantity. Quantity
     *  The total number of crew aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Crew Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \App\UBL\Common\CBC\CrewQuantity
     */
    public function getCrewQuantity()
    {
        return $this->crewQuantity;
    }

    /**
     * Sets a new crewQuantity
     *
     * BBIE
     *  Shipment Stage. Crew Quantity. Quantity
     *  The total number of crew aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Crew Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \App\UBL\Common\CBC\CrewQuantity $crewQuantity
     * @return self
     */
    public function setCrewQuantity(?\App\UBL\Common\CBC\CrewQuantity $crewQuantity = null)
    {
        $this->crewQuantity = $crewQuantity;
        return $this;
    }

    /**
     * Gets as passengerQuantity
     *
     * BBIE
     *  Shipment Stage. Passenger Quantity. Quantity
     *  The total number of passengers aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Passenger Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \App\UBL\Common\CBC\PassengerQuantity
     */
    public function getPassengerQuantity()
    {
        return $this->passengerQuantity;
    }

    /**
     * Sets a new passengerQuantity
     *
     * BBIE
     *  Shipment Stage. Passenger Quantity. Quantity
     *  The total number of passengers aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Passenger Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \App\UBL\Common\CBC\PassengerQuantity $passengerQuantity
     * @return self
     */
    public function setPassengerQuantity(?\App\UBL\Common\CBC\PassengerQuantity $passengerQuantity = null)
    {
        $this->passengerQuantity = $passengerQuantity;
        return $this;
    }

    /**
     * Gets as transitPeriod
     *
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  The period during which this shipment stage actually took place.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *  Period
     *
     * @return \App\UBL\Common\CAC\TransitPeriod
     */
    public function getTransitPeriod()
    {
        return $this->transitPeriod;
    }

    /**
     * Sets a new transitPeriod
     *
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  The period during which this shipment stage actually took place.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\TransitPeriod $transitPeriod
     * @return self
     */
    public function setTransitPeriod(?\App\UBL\Common\CAC\TransitPeriod $transitPeriod = null)
    {
        $this->transitPeriod = $transitPeriod;
        return $this;
    }

    /**
     * Adds as carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \App\UBL\Common\CAC\CarrierParty $carrierParty
     */
    public function addToCarrierParty(\App\UBL\Common\CAC\CarrierParty $carrierParty)
    {
        $this->carrierParty[] = $carrierParty;
        return $this;
    }

    /**
     * isset carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarrierParty($index)
    {
        return isset($this->carrierParty[$index]);
    }

    /**
     * unset carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarrierParty($index)
    {
        unset($this->carrierParty[$index]);
    }

    /**
     * Gets as carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\CarrierParty[]
     */
    public function getCarrierParty()
    {
        return $this->carrierParty;
    }

    /**
     * Sets a new carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\CarrierParty[] $carrierParty
     * @return self
     */
    public function setCarrierParty(?array $carrierParty = null)
    {
        $this->carrierParty = $carrierParty;
        return $this;
    }

    /**
     * Gets as transportMeans
     *
     * ASBIE
     *  Shipment Stage. Transport Means
     *  The means of transport used in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @return \App\UBL\Common\CAC\TransportMeans
     */
    public function getTransportMeans()
    {
        return $this->transportMeans;
    }

    /**
     * Sets a new transportMeans
     *
     * ASBIE
     *  Shipment Stage. Transport Means
     *  The means of transport used in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param \App\UBL\Common\CAC\TransportMeans $transportMeans
     * @return self
     */
    public function setTransportMeans(?\App\UBL\Common\CAC\TransportMeans $transportMeans = null)
    {
        $this->transportMeans = $transportMeans;
        return $this;
    }

    /**
     * Gets as loadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  The location of loading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\LoadingPortLocation
     */
    public function getLoadingPortLocation()
    {
        return $this->loadingPortLocation;
    }

    /**
     * Sets a new loadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  The location of loading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\LoadingPortLocation $loadingPortLocation
     * @return self
     */
    public function setLoadingPortLocation(?\App\UBL\Common\CAC\LoadingPortLocation $loadingPortLocation = null)
    {
        $this->loadingPortLocation = $loadingPortLocation;
        return $this;
    }

    /**
     * Gets as unloadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  The location of unloading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\UnloadingPortLocation
     */
    public function getUnloadingPortLocation()
    {
        return $this->unloadingPortLocation;
    }

    /**
     * Sets a new unloadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  The location of unloading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\UnloadingPortLocation $unloadingPortLocation
     * @return self
     */
    public function setUnloadingPortLocation(?\App\UBL\Common\CAC\UnloadingPortLocation $unloadingPortLocation = null)
    {
        $this->unloadingPortLocation = $unloadingPortLocation;
        return $this;
    }

    /**
     * Gets as transshipPortLocation
     *
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  The location of transshipment relating to a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\TransshipPortLocation
     */
    public function getTransshipPortLocation()
    {
        return $this->transshipPortLocation;
    }

    /**
     * Sets a new transshipPortLocation
     *
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  The location of transshipment relating to a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\TransshipPortLocation $transshipPortLocation
     * @return self
     */
    public function setTransshipPortLocation(?\App\UBL\Common\CAC\TransshipPortLocation $transshipPortLocation = null)
    {
        $this->transshipPortLocation = $transshipPortLocation;
        return $this;
    }

    /**
     * Gets as loadingTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Loading_ Transport Event. Transport Event
     *  The loading of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\LoadingTransportEvent
     */
    public function getLoadingTransportEvent()
    {
        return $this->loadingTransportEvent;
    }

    /**
     * Sets a new loadingTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Loading_ Transport Event. Transport Event
     *  The loading of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\LoadingTransportEvent $loadingTransportEvent
     * @return self
     */
    public function setLoadingTransportEvent(?\App\UBL\Common\CAC\LoadingTransportEvent $loadingTransportEvent = null)
    {
        $this->loadingTransportEvent = $loadingTransportEvent;
        return $this;
    }

    /**
     * Gets as examinationTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Examination_ Transport Event. Transport Event
     *  The examination of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Examination
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\ExaminationTransportEvent
     */
    public function getExaminationTransportEvent()
    {
        return $this->examinationTransportEvent;
    }

    /**
     * Sets a new examinationTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Examination_ Transport Event. Transport Event
     *  The examination of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Examination
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\ExaminationTransportEvent $examinationTransportEvent
     * @return self
     */
    public function setExaminationTransportEvent(?\App\UBL\Common\CAC\ExaminationTransportEvent $examinationTransportEvent = null)
    {
        $this->examinationTransportEvent = $examinationTransportEvent;
        return $this;
    }

    /**
     * Gets as availabilityTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Availability_ Transport Event. Transport Event
     *  The making available of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Availability
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\AvailabilityTransportEvent
     */
    public function getAvailabilityTransportEvent()
    {
        return $this->availabilityTransportEvent;
    }

    /**
     * Sets a new availabilityTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Availability_ Transport Event. Transport Event
     *  The making available of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Availability
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\AvailabilityTransportEvent $availabilityTransportEvent
     * @return self
     */
    public function setAvailabilityTransportEvent(?\App\UBL\Common\CAC\AvailabilityTransportEvent $availabilityTransportEvent = null)
    {
        $this->availabilityTransportEvent = $availabilityTransportEvent;
        return $this;
    }

    /**
     * Gets as exportationTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Exportation_ Transport Event. Transport Event
     *  The export event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Exportation
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\ExportationTransportEvent
     */
    public function getExportationTransportEvent()
    {
        return $this->exportationTransportEvent;
    }

    /**
     * Sets a new exportationTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Exportation_ Transport Event. Transport Event
     *  The export event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Exportation
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\ExportationTransportEvent $exportationTransportEvent
     * @return self
     */
    public function setExportationTransportEvent(?\App\UBL\Common\CAC\ExportationTransportEvent $exportationTransportEvent = null)
    {
        $this->exportationTransportEvent = $exportationTransportEvent;
        return $this;
    }

    /**
     * Gets as dischargeTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Discharge_ Transport Event. Transport Event
     *  The discharge event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Discharge
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\DischargeTransportEvent
     */
    public function getDischargeTransportEvent()
    {
        return $this->dischargeTransportEvent;
    }

    /**
     * Sets a new dischargeTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Discharge_ Transport Event. Transport Event
     *  The discharge event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Discharge
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\DischargeTransportEvent $dischargeTransportEvent
     * @return self
     */
    public function setDischargeTransportEvent(?\App\UBL\Common\CAC\DischargeTransportEvent $dischargeTransportEvent = null)
    {
        $this->dischargeTransportEvent = $dischargeTransportEvent;
        return $this;
    }

    /**
     * Gets as warehousingTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Warehousing_ Transport Event. Transport Event
     *  The warehousing event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Warehousing
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\WarehousingTransportEvent
     */
    public function getWarehousingTransportEvent()
    {
        return $this->warehousingTransportEvent;
    }

    /**
     * Sets a new warehousingTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Warehousing_ Transport Event. Transport Event
     *  The warehousing event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Warehousing
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\WarehousingTransportEvent $warehousingTransportEvent
     * @return self
     */
    public function setWarehousingTransportEvent(?\App\UBL\Common\CAC\WarehousingTransportEvent $warehousingTransportEvent = null)
    {
        $this->warehousingTransportEvent = $warehousingTransportEvent;
        return $this;
    }

    /**
     * Gets as takeoverTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Takeover_ Transport Event. Transport Event
     *  The receiver's takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\TakeoverTransportEvent
     */
    public function getTakeoverTransportEvent()
    {
        return $this->takeoverTransportEvent;
    }

    /**
     * Sets a new takeoverTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Takeover_ Transport Event. Transport Event
     *  The receiver's takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\TakeoverTransportEvent $takeoverTransportEvent
     * @return self
     */
    public function setTakeoverTransportEvent(?\App\UBL\Common\CAC\TakeoverTransportEvent $takeoverTransportEvent = null)
    {
        $this->takeoverTransportEvent = $takeoverTransportEvent;
        return $this;
    }

    /**
     * Gets as optionalTakeoverTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Optional Takeover_ Transport Event. Transport Event
     *  The optional takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Optional Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\OptionalTakeoverTransportEvent
     */
    public function getOptionalTakeoverTransportEvent()
    {
        return $this->optionalTakeoverTransportEvent;
    }

    /**
     * Sets a new optionalTakeoverTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Optional Takeover_ Transport Event. Transport Event
     *  The optional takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Optional Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\OptionalTakeoverTransportEvent $optionalTakeoverTransportEvent
     * @return self
     */
    public function setOptionalTakeoverTransportEvent(?\App\UBL\Common\CAC\OptionalTakeoverTransportEvent $optionalTakeoverTransportEvent = null)
    {
        $this->optionalTakeoverTransportEvent = $optionalTakeoverTransportEvent;
        return $this;
    }

    /**
     * Gets as dropoffTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Dropoff_ Transport Event. Transport Event
     *  The dropping off of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Dropoff
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\DropoffTransportEvent
     */
    public function getDropoffTransportEvent()
    {
        return $this->dropoffTransportEvent;
    }

    /**
     * Sets a new dropoffTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Dropoff_ Transport Event. Transport Event
     *  The dropping off of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Dropoff
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\DropoffTransportEvent $dropoffTransportEvent
     * @return self
     */
    public function setDropoffTransportEvent(?\App\UBL\Common\CAC\DropoffTransportEvent $dropoffTransportEvent = null)
    {
        $this->dropoffTransportEvent = $dropoffTransportEvent;
        return $this;
    }

    /**
     * Gets as actualPickupTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Pickup_ Transport Event. Transport Event
     *  The pickup of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Actual Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\ActualPickupTransportEvent
     */
    public function getActualPickupTransportEvent()
    {
        return $this->actualPickupTransportEvent;
    }

    /**
     * Sets a new actualPickupTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Pickup_ Transport Event. Transport Event
     *  The pickup of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Actual Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\ActualPickupTransportEvent $actualPickupTransportEvent
     * @return self
     */
    public function setActualPickupTransportEvent(?\App\UBL\Common\CAC\ActualPickupTransportEvent $actualPickupTransportEvent = null)
    {
        $this->actualPickupTransportEvent = $actualPickupTransportEvent;
        return $this;
    }

    /**
     * Gets as deliveryTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Delivery_ Transport Event. Transport Event
     *  The delivery of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\DeliveryTransportEvent
     */
    public function getDeliveryTransportEvent()
    {
        return $this->deliveryTransportEvent;
    }

    /**
     * Sets a new deliveryTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Delivery_ Transport Event. Transport Event
     *  The delivery of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\DeliveryTransportEvent $deliveryTransportEvent
     * @return self
     */
    public function setDeliveryTransportEvent(?\App\UBL\Common\CAC\DeliveryTransportEvent $deliveryTransportEvent = null)
    {
        $this->deliveryTransportEvent = $deliveryTransportEvent;
        return $this;
    }

    /**
     * Gets as receiptTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Receipt_ Transport Event. Transport Event
     *  The receipt of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Receipt
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\ReceiptTransportEvent
     */
    public function getReceiptTransportEvent()
    {
        return $this->receiptTransportEvent;
    }

    /**
     * Sets a new receiptTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Receipt_ Transport Event. Transport Event
     *  The receipt of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Receipt
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\ReceiptTransportEvent $receiptTransportEvent
     * @return self
     */
    public function setReceiptTransportEvent(?\App\UBL\Common\CAC\ReceiptTransportEvent $receiptTransportEvent = null)
    {
        $this->receiptTransportEvent = $receiptTransportEvent;
        return $this;
    }

    /**
     * Gets as storageTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Storage_ Transport Event. Transport Event
     *  The storage of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Storage
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\StorageTransportEvent
     */
    public function getStorageTransportEvent()
    {
        return $this->storageTransportEvent;
    }

    /**
     * Sets a new storageTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Storage_ Transport Event. Transport Event
     *  The storage of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Storage
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\StorageTransportEvent $storageTransportEvent
     * @return self
     */
    public function setStorageTransportEvent(?\App\UBL\Common\CAC\StorageTransportEvent $storageTransportEvent = null)
    {
        $this->storageTransportEvent = $storageTransportEvent;
        return $this;
    }

    /**
     * Gets as acceptanceTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Acceptance_ Transport Event. Transport Event
     *  The acceptance of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Acceptance
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\AcceptanceTransportEvent
     */
    public function getAcceptanceTransportEvent()
    {
        return $this->acceptanceTransportEvent;
    }

    /**
     * Sets a new acceptanceTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Acceptance_ Transport Event. Transport Event
     *  The acceptance of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Acceptance
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\AcceptanceTransportEvent $acceptanceTransportEvent
     * @return self
     */
    public function setAcceptanceTransportEvent(?\App\UBL\Common\CAC\AcceptanceTransportEvent $acceptanceTransportEvent = null)
    {
        $this->acceptanceTransportEvent = $acceptanceTransportEvent;
        return $this;
    }

    /**
     * Gets as terminalOperatorParty
     *
     * ASBIE
     *  Shipment Stage. Terminal Operator_ Party. Party
     *  A terminal operator associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Terminal Operator
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\TerminalOperatorParty
     */
    public function getTerminalOperatorParty()
    {
        return $this->terminalOperatorParty;
    }

    /**
     * Sets a new terminalOperatorParty
     *
     * ASBIE
     *  Shipment Stage. Terminal Operator_ Party. Party
     *  A terminal operator associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Terminal Operator
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\TerminalOperatorParty $terminalOperatorParty
     * @return self
     */
    public function setTerminalOperatorParty(?\App\UBL\Common\CAC\TerminalOperatorParty $terminalOperatorParty = null)
    {
        $this->terminalOperatorParty = $terminalOperatorParty;
        return $this;
    }

    /**
     * Gets as customsAgentParty
     *
     * ASBIE
     *  Shipment Stage. Customs Agent_ Party. Party
     *  A customs agent associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Customs Agent
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\CustomsAgentParty
     */
    public function getCustomsAgentParty()
    {
        return $this->customsAgentParty;
    }

    /**
     * Sets a new customsAgentParty
     *
     * ASBIE
     *  Shipment Stage. Customs Agent_ Party. Party
     *  A customs agent associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Customs Agent
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\CustomsAgentParty $customsAgentParty
     * @return self
     */
    public function setCustomsAgentParty(?\App\UBL\Common\CAC\CustomsAgentParty $customsAgentParty = null)
    {
        $this->customsAgentParty = $customsAgentParty;
        return $this;
    }

    /**
     * Gets as estimatedTransitPeriod
     *
     * ASBIE
     *  Shipment Stage. Estimated Transit_ Period. Period
     *  The estimated transit period of this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated Transit
     *  Period
     *  Period
     *  Period
     *
     * @return \App\UBL\Common\CAC\EstimatedTransitPeriod
     */
    public function getEstimatedTransitPeriod()
    {
        return $this->estimatedTransitPeriod;
    }

    /**
     * Sets a new estimatedTransitPeriod
     *
     * ASBIE
     *  Shipment Stage. Estimated Transit_ Period. Period
     *  The estimated transit period of this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated Transit
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\EstimatedTransitPeriod $estimatedTransitPeriod
     * @return self
     */
    public function setEstimatedTransitPeriod(?\App\UBL\Common\CAC\EstimatedTransitPeriod $estimatedTransitPeriod = null)
    {
        $this->estimatedTransitPeriod = $estimatedTransitPeriod;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
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
     * Gets as freightChargeLocation
     *
     * ASBIE
     *  Shipment Stage. Freight Charge_ Location. Location
     *  The location associated with a freight charge related to this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Freight Charge
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\FreightChargeLocation
     */
    public function getFreightChargeLocation()
    {
        return $this->freightChargeLocation;
    }

    /**
     * Sets a new freightChargeLocation
     *
     * ASBIE
     *  Shipment Stage. Freight Charge_ Location. Location
     *  The location associated with a freight charge related to this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Freight Charge
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\FreightChargeLocation $freightChargeLocation
     * @return self
     */
    public function setFreightChargeLocation(?\App\UBL\Common\CAC\FreightChargeLocation $freightChargeLocation = null)
    {
        $this->freightChargeLocation = $freightChargeLocation;
        return $this;
    }

    /**
     * Adds as detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\DetentionTransportEvent $detentionTransportEvent
     */
    public function addToDetentionTransportEvent(\App\UBL\Common\CAC\DetentionTransportEvent $detentionTransportEvent)
    {
        $this->detentionTransportEvent[] = $detentionTransportEvent;
        return $this;
    }

    /**
     * isset detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetentionTransportEvent($index)
    {
        return isset($this->detentionTransportEvent[$index]);
    }

    /**
     * unset detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetentionTransportEvent($index)
    {
        unset($this->detentionTransportEvent[$index]);
    }

    /**
     * Gets as detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\DetentionTransportEvent[]
     */
    public function getDetentionTransportEvent()
    {
        return $this->detentionTransportEvent;
    }

    /**
     * Sets a new detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\DetentionTransportEvent[] $detentionTransportEvent
     * @return self
     */
    public function setDetentionTransportEvent(?array $detentionTransportEvent = null)
    {
        $this->detentionTransportEvent = $detentionTransportEvent;
        return $this;
    }

    /**
     * Gets as requestedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Departure_ Transport Event. Transport Event
     *  The departure requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\RequestedDepartureTransportEvent
     */
    public function getRequestedDepartureTransportEvent()
    {
        return $this->requestedDepartureTransportEvent;
    }

    /**
     * Sets a new requestedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Departure_ Transport Event. Transport Event
     *  The departure requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\RequestedDepartureTransportEvent $requestedDepartureTransportEvent
     * @return self
     */
    public function setRequestedDepartureTransportEvent(?\App\UBL\Common\CAC\RequestedDepartureTransportEvent $requestedDepartureTransportEvent = null)
    {
        $this->requestedDepartureTransportEvent = $requestedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as requestedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Arrival_ Transport Event. Transport Event
     *  The arrival requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\RequestedArrivalTransportEvent
     */
    public function getRequestedArrivalTransportEvent()
    {
        return $this->requestedArrivalTransportEvent;
    }

    /**
     * Sets a new requestedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Arrival_ Transport Event. Transport Event
     *  The arrival requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\RequestedArrivalTransportEvent $requestedArrivalTransportEvent
     * @return self
     */
    public function setRequestedArrivalTransportEvent(?\App\UBL\Common\CAC\RequestedArrivalTransportEvent $requestedArrivalTransportEvent = null)
    {
        $this->requestedArrivalTransportEvent = $requestedArrivalTransportEvent;
        return $this;
    }

    /**
     * Adds as requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\RequestedWaypointTransportEvent $requestedWaypointTransportEvent
     */
    public function addToRequestedWaypointTransportEvent(\App\UBL\Common\CAC\RequestedWaypointTransportEvent $requestedWaypointTransportEvent)
    {
        $this->requestedWaypointTransportEvent[] = $requestedWaypointTransportEvent;
        return $this;
    }

    /**
     * isset requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedWaypointTransportEvent($index)
    {
        return isset($this->requestedWaypointTransportEvent[$index]);
    }

    /**
     * unset requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedWaypointTransportEvent($index)
    {
        unset($this->requestedWaypointTransportEvent[$index]);
    }

    /**
     * Gets as requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\RequestedWaypointTransportEvent[]
     */
    public function getRequestedWaypointTransportEvent()
    {
        return $this->requestedWaypointTransportEvent;
    }

    /**
     * Sets a new requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\RequestedWaypointTransportEvent[] $requestedWaypointTransportEvent
     * @return self
     */
    public function setRequestedWaypointTransportEvent(?array $requestedWaypointTransportEvent = null)
    {
        $this->requestedWaypointTransportEvent = $requestedWaypointTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Departure_ Transport Event. Transport Event
     *  The departure planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\PlannedDepartureTransportEvent
     */
    public function getPlannedDepartureTransportEvent()
    {
        return $this->plannedDepartureTransportEvent;
    }

    /**
     * Sets a new plannedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Departure_ Transport Event. Transport Event
     *  The departure planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     * @return self
     */
    public function setPlannedDepartureTransportEvent(?\App\UBL\Common\CAC\PlannedDepartureTransportEvent $plannedDepartureTransportEvent = null)
    {
        $this->plannedDepartureTransportEvent = $plannedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Arrival_ Transport Event. Transport Event
     *  The arrival planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\PlannedArrivalTransportEvent
     */
    public function getPlannedArrivalTransportEvent()
    {
        return $this->plannedArrivalTransportEvent;
    }

    /**
     * Sets a new plannedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Arrival_ Transport Event. Transport Event
     *  The arrival planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     * @return self
     */
    public function setPlannedArrivalTransportEvent(?\App\UBL\Common\CAC\PlannedArrivalTransportEvent $plannedArrivalTransportEvent = null)
    {
        $this->plannedArrivalTransportEvent = $plannedArrivalTransportEvent;
        return $this;
    }

    /**
     * Adds as plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \App\UBL\Common\CAC\PlannedWaypointTransportEvent $plannedWaypointTransportEvent
     */
    public function addToPlannedWaypointTransportEvent(\App\UBL\Common\CAC\PlannedWaypointTransportEvent $plannedWaypointTransportEvent)
    {
        $this->plannedWaypointTransportEvent[] = $plannedWaypointTransportEvent;
        return $this;
    }

    /**
     * isset plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlannedWaypointTransportEvent($index)
    {
        return isset($this->plannedWaypointTransportEvent[$index]);
    }

    /**
     * unset plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlannedWaypointTransportEvent($index)
    {
        unset($this->plannedWaypointTransportEvent[$index]);
    }

    /**
     * Gets as plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\PlannedWaypointTransportEvent[]
     */
    public function getPlannedWaypointTransportEvent()
    {
        return $this->plannedWaypointTransportEvent;
    }

    /**
     * Sets a new plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\PlannedWaypointTransportEvent[] $plannedWaypointTransportEvent
     * @return self
     */
    public function setPlannedWaypointTransportEvent(?array $plannedWaypointTransportEvent = null)
    {
        $this->plannedWaypointTransportEvent = $plannedWaypointTransportEvent;
        return $this;
    }

    /**
     * Gets as actualDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\ActualDepartureTransportEvent
     */
    public function getActualDepartureTransportEvent()
    {
        return $this->actualDepartureTransportEvent;
    }

    /**
     * Sets a new actualDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\ActualDepartureTransportEvent $actualDepartureTransportEvent
     * @return self
     */
    public function setActualDepartureTransportEvent(?\App\UBL\Common\CAC\ActualDepartureTransportEvent $actualDepartureTransportEvent = null)
    {
        $this->actualDepartureTransportEvent = $actualDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as actualWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Waypoint_ Transport Event. Transport Event
     *  The location of an actual waypoint during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\ActualWaypointTransportEvent
     */
    public function getActualWaypointTransportEvent()
    {
        return $this->actualWaypointTransportEvent;
    }

    /**
     * Sets a new actualWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Waypoint_ Transport Event. Transport Event
     *  The location of an actual waypoint during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\ActualWaypointTransportEvent $actualWaypointTransportEvent
     * @return self
     */
    public function setActualWaypointTransportEvent(?\App\UBL\Common\CAC\ActualWaypointTransportEvent $actualWaypointTransportEvent = null)
    {
        $this->actualWaypointTransportEvent = $actualWaypointTransportEvent;
        return $this;
    }

    /**
     * Gets as actualArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\ActualArrivalTransportEvent
     */
    public function getActualArrivalTransportEvent()
    {
        return $this->actualArrivalTransportEvent;
    }

    /**
     * Sets a new actualArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\ActualArrivalTransportEvent $actualArrivalTransportEvent
     * @return self
     */
    public function setActualArrivalTransportEvent(?\App\UBL\Common\CAC\ActualArrivalTransportEvent $actualArrivalTransportEvent = null)
    {
        $this->actualArrivalTransportEvent = $actualArrivalTransportEvent;
        return $this;
    }

    /**
     * Adds as transportEvent
     *
     * ASBIE
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     * Gets as estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Estimated Departure_ Transport Event. Transport Event
     *  Describes an estimated departure at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\EstimatedDepartureTransportEvent
     */
    public function getEstimatedDepartureTransportEvent()
    {
        return $this->estimatedDepartureTransportEvent;
    }

    /**
     * Sets a new estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Estimated Departure_ Transport Event. Transport Event
     *  Describes an estimated departure at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     * @return self
     */
    public function setEstimatedDepartureTransportEvent(?\App\UBL\Common\CAC\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent = null)
    {
        $this->estimatedDepartureTransportEvent = $estimatedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as estimatedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Estimated Arrival_ Transport Event. Transport Event
     *  Describes an estimated arrival at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \App\UBL\Common\CAC\EstimatedArrivalTransportEvent
     */
    public function getEstimatedArrivalTransportEvent()
    {
        return $this->estimatedArrivalTransportEvent;
    }

    /**
     * Sets a new estimatedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Estimated Arrival_ Transport Event. Transport Event
     *  Describes an estimated arrival at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \App\UBL\Common\CAC\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     * @return self
     */
    public function setEstimatedArrivalTransportEvent(?\App\UBL\Common\CAC\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent = null)
    {
        $this->estimatedArrivalTransportEvent = $estimatedArrivalTransportEvent;
        return $this;
    }

    /**
     * Adds as passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \App\UBL\Common\CAC\PassengerPerson $passengerPerson
     */
    public function addToPassengerPerson(\App\UBL\Common\CAC\PassengerPerson $passengerPerson)
    {
        $this->passengerPerson[] = $passengerPerson;
        return $this;
    }

    /**
     * isset passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerPerson($index)
    {
        return isset($this->passengerPerson[$index]);
    }

    /**
     * unset passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerPerson($index)
    {
        unset($this->passengerPerson[$index]);
    }

    /**
     * Gets as passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @return \App\UBL\Common\CAC\PassengerPerson[]
     */
    public function getPassengerPerson()
    {
        return $this->passengerPerson;
    }

    /**
     * Sets a new passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param \App\UBL\Common\CAC\PassengerPerson[] $passengerPerson
     * @return self
     */
    public function setPassengerPerson(?array $passengerPerson = null)
    {
        $this->passengerPerson = $passengerPerson;
        return $this;
    }

    /**
     * Adds as driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \App\UBL\Common\CAC\DriverPerson $driverPerson
     */
    public function addToDriverPerson(\App\UBL\Common\CAC\DriverPerson $driverPerson)
    {
        $this->driverPerson[] = $driverPerson;
        return $this;
    }

    /**
     * isset driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDriverPerson($index)
    {
        return isset($this->driverPerson[$index]);
    }

    /**
     * unset driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDriverPerson($index)
    {
        unset($this->driverPerson[$index]);
    }

    /**
     * Gets as driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @return \App\UBL\Common\CAC\DriverPerson[]
     */
    public function getDriverPerson()
    {
        return $this->driverPerson;
    }

    /**
     * Sets a new driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @param \App\UBL\Common\CAC\DriverPerson[] $driverPerson
     * @return self
     */
    public function setDriverPerson(?array $driverPerson = null)
    {
        $this->driverPerson = $driverPerson;
        return $this;
    }

    /**
     * Gets as reportingPerson
     *
     * ASBIE
     *  Shipment Stage. Reporting_ Person. Person
     *  Describes a person being responsible for providing the required administrative reporting relating to a transport.
     *  0..1
     *  Shipment Stage
     *  Reporting
     *  Person
     *  Person
     *  Person
     *
     * @return \App\UBL\Common\CAC\ReportingPerson
     */
    public function getReportingPerson()
    {
        return $this->reportingPerson;
    }

    /**
     * Sets a new reportingPerson
     *
     * ASBIE
     *  Shipment Stage. Reporting_ Person. Person
     *  Describes a person being responsible for providing the required administrative reporting relating to a transport.
     *  0..1
     *  Shipment Stage
     *  Reporting
     *  Person
     *  Person
     *  Person
     *
     * @param \App\UBL\Common\CAC\ReportingPerson $reportingPerson
     * @return self
     */
    public function setReportingPerson(?\App\UBL\Common\CAC\ReportingPerson $reportingPerson = null)
    {
        $this->reportingPerson = $reportingPerson;
        return $this;
    }

    /**
     * Adds as crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \App\UBL\Common\CAC\CrewMemberPerson $crewMemberPerson
     */
    public function addToCrewMemberPerson(\App\UBL\Common\CAC\CrewMemberPerson $crewMemberPerson)
    {
        $this->crewMemberPerson[] = $crewMemberPerson;
        return $this;
    }

    /**
     * isset crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCrewMemberPerson($index)
    {
        return isset($this->crewMemberPerson[$index]);
    }

    /**
     * unset crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCrewMemberPerson($index)
    {
        unset($this->crewMemberPerson[$index]);
    }

    /**
     * Gets as crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @return \App\UBL\Common\CAC\CrewMemberPerson[]
     */
    public function getCrewMemberPerson()
    {
        return $this->crewMemberPerson;
    }

    /**
     * Sets a new crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @param \App\UBL\Common\CAC\CrewMemberPerson[] $crewMemberPerson
     * @return self
     */
    public function setCrewMemberPerson(?array $crewMemberPerson = null)
    {
        $this->crewMemberPerson = $crewMemberPerson;
        return $this;
    }

    /**
     * Gets as securityOfficerPerson
     *
     * ASBIE
     *  Shipment Stage. Security Officer_ Person. Person
     *  The person on board the vessel, accountable to the master, designated by the company as responsible for the security of the ship, including implementation and maintenance of the ship security plan and for the liaison with the company security officer and the port facility security officers.
     *  0..1
     *  Shipment Stage
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *
     * @return \App\UBL\Common\CAC\SecurityOfficerPerson
     */
    public function getSecurityOfficerPerson()
    {
        return $this->securityOfficerPerson;
    }

    /**
     * Sets a new securityOfficerPerson
     *
     * ASBIE
     *  Shipment Stage. Security Officer_ Person. Person
     *  The person on board the vessel, accountable to the master, designated by the company as responsible for the security of the ship, including implementation and maintenance of the ship security plan and for the liaison with the company security officer and the port facility security officers.
     *  0..1
     *  Shipment Stage
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *
     * @param \App\UBL\Common\CAC\SecurityOfficerPerson $securityOfficerPerson
     * @return self
     */
    public function setSecurityOfficerPerson(?\App\UBL\Common\CAC\SecurityOfficerPerson $securityOfficerPerson = null)
    {
        $this->securityOfficerPerson = $securityOfficerPerson;
        return $this;
    }

    /**
     * Gets as masterPerson
     *
     * ASBIE
     *  Shipment Stage. Master_ Person. Person
     *  The person responsible for the ship's safe and efficient operation, including cargo operations, navigation, crew management and for ensuring that the vessel complies with local and international laws, as well as company and flag state policies.
     *  0..1
     *  Shipment Stage
     *  Master
     *  Person
     *  Person
     *  Person
     *
     * @return \App\UBL\Common\CAC\MasterPerson
     */
    public function getMasterPerson()
    {
        return $this->masterPerson;
    }

    /**
     * Sets a new masterPerson
     *
     * ASBIE
     *  Shipment Stage. Master_ Person. Person
     *  The person responsible for the ship's safe and efficient operation, including cargo operations, navigation, crew management and for ensuring that the vessel complies with local and international laws, as well as company and flag state policies.
     *  0..1
     *  Shipment Stage
     *  Master
     *  Person
     *  Person
     *  Person
     *
     * @param \App\UBL\Common\CAC\MasterPerson $masterPerson
     * @return self
     */
    public function setMasterPerson(?\App\UBL\Common\CAC\MasterPerson $masterPerson = null)
    {
        $this->masterPerson = $masterPerson;
        return $this;
    }

    /**
     * Gets as shipsSurgeonPerson
     *
     * ASBIE
     *  Shipment Stage. Ships Surgeon_ Person. Person
     *  The person responsible for the health of the people aboard a ship at sea.
     *  0..1
     *  Shipment Stage
     *  Ships Surgeon
     *  Person
     *  Person
     *  Person
     *
     * @return \App\UBL\Common\CAC\ShipsSurgeonPerson
     */
    public function getShipsSurgeonPerson()
    {
        return $this->shipsSurgeonPerson;
    }

    /**
     * Sets a new shipsSurgeonPerson
     *
     * ASBIE
     *  Shipment Stage. Ships Surgeon_ Person. Person
     *  The person responsible for the health of the people aboard a ship at sea.
     *  0..1
     *  Shipment Stage
     *  Ships Surgeon
     *  Person
     *  Person
     *  Person
     *
     * @param \App\UBL\Common\CAC\ShipsSurgeonPerson $shipsSurgeonPerson
     * @return self
     */
    public function setShipsSurgeonPerson(?\App\UBL\Common\CAC\ShipsSurgeonPerson $shipsSurgeonPerson = null)
    {
        $this->shipsSurgeonPerson = $shipsSurgeonPerson;
        return $this;
    }
}

