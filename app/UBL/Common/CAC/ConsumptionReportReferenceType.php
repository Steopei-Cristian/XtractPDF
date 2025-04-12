<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ConsumptionReportReferenceType
 *
 * ABIE
 *  Consumption Report Reference. Details
 *  A class to define a reference to an earlier consumption report (e.g., last year's consumption).
 *  Consumption Report Reference
 * XSD Type: ConsumptionReportReferenceType
 */
class ConsumptionReportReferenceType
{
    /**
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @var \App\UBL\Common\CBC\ConsumptionReportID $consumptionReportID
     */
    private $consumptionReportID = null;

    /**
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @var \App\UBL\Common\CBC\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @var \App\UBL\Common\CBC\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @var \App\UBL\Common\CBC\TotalConsumedQuantity $totalConsumedQuantity
     */
    private $totalConsumedQuantity = null;

    /**
     * ASBIE
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\Period $period
     */
    private $period = null;

    /**
     * Gets as consumptionReportID
     *
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @return \App\UBL\Common\CBC\ConsumptionReportID
     */
    public function getConsumptionReportID()
    {
        return $this->consumptionReportID;
    }

    /**
     * Sets a new consumptionReportID
     *
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @param \App\UBL\Common\CBC\ConsumptionReportID $consumptionReportID
     * @return self
     */
    public function setConsumptionReportID(\App\UBL\Common\CBC\ConsumptionReportID $consumptionReportID)
    {
        $this->consumptionReportID = $consumptionReportID;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @return \App\UBL\Common\CBC\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @param \App\UBL\Common\CBC\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(?\App\UBL\Common\CBC\ConsumptionType $consumptionType = null)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @return \App\UBL\Common\CBC\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @param \App\UBL\Common\CBC\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?\App\UBL\Common\CBC\ConsumptionTypeCode $consumptionTypeCode = null)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @return \App\UBL\Common\CBC\TotalConsumedQuantity
     */
    public function getTotalConsumedQuantity()
    {
        return $this->totalConsumedQuantity;
    }

    /**
     * Sets a new totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @param \App\UBL\Common\CBC\TotalConsumedQuantity $totalConsumedQuantity
     * @return self
     */
    public function setTotalConsumedQuantity(\App\UBL\Common\CBC\TotalConsumedQuantity $totalConsumedQuantity)
    {
        $this->totalConsumedQuantity = $totalConsumedQuantity;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
     *  Period
     *  Period
     *  Period
     *
     * @return \App\UBL\Common\CAC\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\Period $period
     * @return self
     */
    public function setPeriod(\App\UBL\Common\CAC\Period $period)
    {
        $this->period = $period;
        return $this;
    }
}

