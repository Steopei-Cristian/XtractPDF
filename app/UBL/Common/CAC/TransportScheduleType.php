<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TransportScheduleType
 *
 * ABIE
 *  Transport Schedule. Details
 *  Describes the location and schedule relating to a transport means.
 *  Transport Schedule
 * XSD Type: TransportScheduleType
 */
class TransportScheduleType
{
    /**
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var \App\UBL\Common\CBC\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $referenceDate
     */
    private $referenceDate = null;

    /**
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $referenceTime
     */
    private $referenceTime = null;

    /**
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @var \App\UBL\Common\CBC\ReliabilityPercent $reliabilityPercent
     */
    private $reliabilityPercent = null;

    /**
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @var \App\UBL\Common\CAC\StatusLocation $statusLocation
     */
    private $statusLocation = null;

    /**
     * ASBIE
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \App\UBL\Common\CAC\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     */
    private $plannedArrivalTransportEvent = null;

    /**
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return \App\UBL\Common\CBC\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param \App\UBL\Common\CBC\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\App\UBL\Common\CBC\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as referenceDate
     *
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Sets a new referenceDate
     *
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $referenceDate
     * @return self
     */
    public function setReferenceDate(?\DateTime $referenceDate = null)
    {
        $this->referenceDate = $referenceDate;
        return $this;
    }

    /**
     * Gets as referenceTime
     *
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getReferenceTime()
    {
        return $this->referenceTime;
    }

    /**
     * Sets a new referenceTime
     *
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $referenceTime
     * @return self
     */
    public function setReferenceTime(?\DateTime $referenceTime = null)
    {
        $this->referenceTime = $referenceTime;
        return $this;
    }

    /**
     * Gets as reliabilityPercent
     *
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @return \App\UBL\Common\CBC\ReliabilityPercent
     */
    public function getReliabilityPercent()
    {
        return $this->reliabilityPercent;
    }

    /**
     * Sets a new reliabilityPercent
     *
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @param \App\UBL\Common\CBC\ReliabilityPercent $reliabilityPercent
     * @return self
     */
    public function setReliabilityPercent(?\App\UBL\Common\CBC\ReliabilityPercent $reliabilityPercent = null)
    {
        $this->reliabilityPercent = $reliabilityPercent;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Remarks $remarks
     */
    public function addToRemarks(\App\UBL\Common\CBC\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(?array $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as statusLocation
     *
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @return \App\UBL\Common\CAC\StatusLocation
     */
    public function getStatusLocation()
    {
        return $this->statusLocation;
    }

    /**
     * Sets a new statusLocation
     *
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @param \App\UBL\Common\CAC\StatusLocation $statusLocation
     * @return self
     */
    public function setStatusLocation(\App\UBL\Common\CAC\StatusLocation $statusLocation)
    {
        $this->statusLocation = $statusLocation;
        return $this;
    }

    /**
     * Gets as actualArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
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
     * Gets as actualDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
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
     * Gets as estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
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
     * Gets as plannedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
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
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
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
}

