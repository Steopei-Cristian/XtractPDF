<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ConsumptionCorrectionType
 *
 * ABIE
 *  Consumption Correction. Details
 *  The Statement of correction, for examples heating correction.
 *  Consumption Correction
 * XSD Type: ConsumptionCorrectionType
 */
class ConsumptionCorrectionType
{
    /**
     * BBIE
     *  Consumption Correction. Correction Type. Text
     *  Statement for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type
     *  Text
     *  Text. Type
     *  Heating Correction
     *
     * @var \App\UBL\Common\CBC\CorrectionType $correctionType
     */
    private $correctionType = null;

    /**
     * BBIE
     *  Consumption Correction. Correction Type Code. Code
     *  Statement at the code for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type Code
     *  Code
     *  Code. Type
     *  HeatingCorrection
     *
     * @var \App\UBL\Common\CBC\CorrectionTypeCode $correctionTypeCode
     */
    private $correctionTypeCode = null;

    /**
     * BBIE
     *  Consumption Correction. Meter Number. Text
     *  Statement for meter number.
     *  0..1
     *  Consumption Correction
     *  Meter Number
     *  Text
     *  Text. Type
     *  530071575
     *
     * @var \App\UBL\Common\CBC\MeterNumber $meterNumber
     */
    private $meterNumber = null;

    /**
     * BBIE
     *  Consumption Correction. Gas Pressure. Quantity
     *  Correction of the gas pressure.
     *  0..1
     *  Consumption Correction
     *  Gas Pressure
     *  Quantity
     *  Quantity. Type
     *
     * @var \App\UBL\Common\CBC\GasPressureQuantity $gasPressureQuantity
     */
    private $gasPressureQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Actual_ Temperature Reduction. Quantity
     *  Statement for the actuel heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Actual
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -36.69
     *
     * @var \App\UBL\Common\CBC\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity
     */
    private $actualTemperatureReductionQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Normal_ Temperature Reduction. Quantity
     *  Statement for the standard for heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Normal
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -37.00
     *
     * @var \App\UBL\Common\CBC\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity
     */
    private $normalTemperatureReductionQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Difference_ Temperature Reduction. Quantity
     *  Deviation from standard heating correction.
     *  0..1
     *  Consumption Correction
     *  Difference
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  0.31
     *
     * @var \App\UBL\Common\CBC\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity
     */
    private $differenceTemperatureReductionQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
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
     *  Consumption Correction. Correction Unit Amount. Amount
     *  Correction per MWH per degree C.
     *  0..1
     *  Consumption Correction
     *  Correction Unit Amount
     *  Amount
     *  Amount. Type
     *  0.0000
     *
     * @var \App\UBL\Common\CBC\CorrectionUnitAmount $correctionUnitAmount
     */
    private $correctionUnitAmount = null;

    /**
     * BBIE
     *  Consumption Correction. Consumption Energy. Quantity
     *  Your consumpt for district heating energy.
     *  0..1
     *  Consumption Correction
     *  Consumption Energy
     *  Quantity
     *  Quantity. Type
     *  563.6240
     *
     * @var \App\UBL\Common\CBC\ConsumptionEnergyQuantity $consumptionEnergyQuantity
     */
    private $consumptionEnergyQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Consumption Water. Quantity
     *  Your consumpt for district heating water.
     *  0..1
     *  Consumption Correction
     *  Consumption Water
     *  Quantity
     *  Quantity. Type
     *  13212.14
     *
     * @var \App\UBL\Common\CBC\ConsumptionWaterQuantity $consumptionWaterQuantity
     */
    private $consumptionWaterQuantity = null;

    /**
     * BBIE
     *  Consumption Correction. Correction Amount. Amount
     *  Your correction for heating correction.
     *  0..1
     *  Consumption Correction
     *  Correction Amount
     *  Amount
     *  Amount. Type
     *  0.00
     *
     * @var \App\UBL\Common\CBC\CorrectionAmount $correctionAmount
     */
    private $correctionAmount = null;

    /**
     * Gets as correctionType
     *
     * BBIE
     *  Consumption Correction. Correction Type. Text
     *  Statement for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type
     *  Text
     *  Text. Type
     *  Heating Correction
     *
     * @return \App\UBL\Common\CBC\CorrectionType
     */
    public function getCorrectionType()
    {
        return $this->correctionType;
    }

    /**
     * Sets a new correctionType
     *
     * BBIE
     *  Consumption Correction. Correction Type. Text
     *  Statement for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type
     *  Text
     *  Text. Type
     *  Heating Correction
     *
     * @param \App\UBL\Common\CBC\CorrectionType $correctionType
     * @return self
     */
    public function setCorrectionType(?\App\UBL\Common\CBC\CorrectionType $correctionType = null)
    {
        $this->correctionType = $correctionType;
        return $this;
    }

    /**
     * Gets as correctionTypeCode
     *
     * BBIE
     *  Consumption Correction. Correction Type Code. Code
     *  Statement at the code for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type Code
     *  Code
     *  Code. Type
     *  HeatingCorrection
     *
     * @return \App\UBL\Common\CBC\CorrectionTypeCode
     */
    public function getCorrectionTypeCode()
    {
        return $this->correctionTypeCode;
    }

    /**
     * Sets a new correctionTypeCode
     *
     * BBIE
     *  Consumption Correction. Correction Type Code. Code
     *  Statement at the code for the correction type.
     *  0..1
     *  Consumption Correction
     *  Correction Type Code
     *  Code
     *  Code. Type
     *  HeatingCorrection
     *
     * @param \App\UBL\Common\CBC\CorrectionTypeCode $correctionTypeCode
     * @return self
     */
    public function setCorrectionTypeCode(?\App\UBL\Common\CBC\CorrectionTypeCode $correctionTypeCode = null)
    {
        $this->correctionTypeCode = $correctionTypeCode;
        return $this;
    }

    /**
     * Gets as meterNumber
     *
     * BBIE
     *  Consumption Correction. Meter Number. Text
     *  Statement for meter number.
     *  0..1
     *  Consumption Correction
     *  Meter Number
     *  Text
     *  Text. Type
     *  530071575
     *
     * @return \App\UBL\Common\CBC\MeterNumber
     */
    public function getMeterNumber()
    {
        return $this->meterNumber;
    }

    /**
     * Sets a new meterNumber
     *
     * BBIE
     *  Consumption Correction. Meter Number. Text
     *  Statement for meter number.
     *  0..1
     *  Consumption Correction
     *  Meter Number
     *  Text
     *  Text. Type
     *  530071575
     *
     * @param \App\UBL\Common\CBC\MeterNumber $meterNumber
     * @return self
     */
    public function setMeterNumber(?\App\UBL\Common\CBC\MeterNumber $meterNumber = null)
    {
        $this->meterNumber = $meterNumber;
        return $this;
    }

    /**
     * Gets as gasPressureQuantity
     *
     * BBIE
     *  Consumption Correction. Gas Pressure. Quantity
     *  Correction of the gas pressure.
     *  0..1
     *  Consumption Correction
     *  Gas Pressure
     *  Quantity
     *  Quantity. Type
     *
     * @return \App\UBL\Common\CBC\GasPressureQuantity
     */
    public function getGasPressureQuantity()
    {
        return $this->gasPressureQuantity;
    }

    /**
     * Sets a new gasPressureQuantity
     *
     * BBIE
     *  Consumption Correction. Gas Pressure. Quantity
     *  Correction of the gas pressure.
     *  0..1
     *  Consumption Correction
     *  Gas Pressure
     *  Quantity
     *  Quantity. Type
     *
     * @param \App\UBL\Common\CBC\GasPressureQuantity $gasPressureQuantity
     * @return self
     */
    public function setGasPressureQuantity(?\App\UBL\Common\CBC\GasPressureQuantity $gasPressureQuantity = null)
    {
        $this->gasPressureQuantity = $gasPressureQuantity;
        return $this;
    }

    /**
     * Gets as actualTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Actual_ Temperature Reduction. Quantity
     *  Statement for the actuel heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Actual
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -36.69
     *
     * @return \App\UBL\Common\CBC\ActualTemperatureReductionQuantity
     */
    public function getActualTemperatureReductionQuantity()
    {
        return $this->actualTemperatureReductionQuantity;
    }

    /**
     * Sets a new actualTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Actual_ Temperature Reduction. Quantity
     *  Statement for the actuel heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Actual
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -36.69
     *
     * @param \App\UBL\Common\CBC\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity
     * @return self
     */
    public function setActualTemperatureReductionQuantity(?\App\UBL\Common\CBC\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity = null)
    {
        $this->actualTemperatureReductionQuantity = $actualTemperatureReductionQuantity;
        return $this;
    }

    /**
     * Gets as normalTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Normal_ Temperature Reduction. Quantity
     *  Statement for the standard for heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Normal
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -37.00
     *
     * @return \App\UBL\Common\CBC\NormalTemperatureReductionQuantity
     */
    public function getNormalTemperatureReductionQuantity()
    {
        return $this->normalTemperatureReductionQuantity;
    }

    /**
     * Sets a new normalTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Normal_ Temperature Reduction. Quantity
     *  Statement for the standard for heating correction temperature.
     *  0..1
     *  Consumption Correction
     *  Normal
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  -37.00
     *
     * @param \App\UBL\Common\CBC\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity
     * @return self
     */
    public function setNormalTemperatureReductionQuantity(?\App\UBL\Common\CBC\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity = null)
    {
        $this->normalTemperatureReductionQuantity = $normalTemperatureReductionQuantity;
        return $this;
    }

    /**
     * Gets as differenceTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Difference_ Temperature Reduction. Quantity
     *  Deviation from standard heating correction.
     *  0..1
     *  Consumption Correction
     *  Difference
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  0.31
     *
     * @return \App\UBL\Common\CBC\DifferenceTemperatureReductionQuantity
     */
    public function getDifferenceTemperatureReductionQuantity()
    {
        return $this->differenceTemperatureReductionQuantity;
    }

    /**
     * Sets a new differenceTemperatureReductionQuantity
     *
     * BBIE
     *  Consumption Correction. Difference_ Temperature Reduction. Quantity
     *  Deviation from standard heating correction.
     *  0..1
     *  Consumption Correction
     *  Difference
     *  Temperature Reduction
     *  Quantity
     *  Quantity. Type
     *  0.31
     *
     * @param \App\UBL\Common\CBC\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity
     * @return self
     */
    public function setDifferenceTemperatureReductionQuantity(?\App\UBL\Common\CBC\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity = null)
    {
        $this->differenceTemperatureReductionQuantity = $differenceTemperatureReductionQuantity;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
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
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
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
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
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
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
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
     *  Consumption Correction. Description. Text
     *  Description related to the corrections.
     *  0..n
     *  Consumption Correction
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
     * Gets as correctionUnitAmount
     *
     * BBIE
     *  Consumption Correction. Correction Unit Amount. Amount
     *  Correction per MWH per degree C.
     *  0..1
     *  Consumption Correction
     *  Correction Unit Amount
     *  Amount
     *  Amount. Type
     *  0.0000
     *
     * @return \App\UBL\Common\CBC\CorrectionUnitAmount
     */
    public function getCorrectionUnitAmount()
    {
        return $this->correctionUnitAmount;
    }

    /**
     * Sets a new correctionUnitAmount
     *
     * BBIE
     *  Consumption Correction. Correction Unit Amount. Amount
     *  Correction per MWH per degree C.
     *  0..1
     *  Consumption Correction
     *  Correction Unit Amount
     *  Amount
     *  Amount. Type
     *  0.0000
     *
     * @param \App\UBL\Common\CBC\CorrectionUnitAmount $correctionUnitAmount
     * @return self
     */
    public function setCorrectionUnitAmount(?\App\UBL\Common\CBC\CorrectionUnitAmount $correctionUnitAmount = null)
    {
        $this->correctionUnitAmount = $correctionUnitAmount;
        return $this;
    }

    /**
     * Gets as consumptionEnergyQuantity
     *
     * BBIE
     *  Consumption Correction. Consumption Energy. Quantity
     *  Your consumpt for district heating energy.
     *  0..1
     *  Consumption Correction
     *  Consumption Energy
     *  Quantity
     *  Quantity. Type
     *  563.6240
     *
     * @return \App\UBL\Common\CBC\ConsumptionEnergyQuantity
     */
    public function getConsumptionEnergyQuantity()
    {
        return $this->consumptionEnergyQuantity;
    }

    /**
     * Sets a new consumptionEnergyQuantity
     *
     * BBIE
     *  Consumption Correction. Consumption Energy. Quantity
     *  Your consumpt for district heating energy.
     *  0..1
     *  Consumption Correction
     *  Consumption Energy
     *  Quantity
     *  Quantity. Type
     *  563.6240
     *
     * @param \App\UBL\Common\CBC\ConsumptionEnergyQuantity $consumptionEnergyQuantity
     * @return self
     */
    public function setConsumptionEnergyQuantity(?\App\UBL\Common\CBC\ConsumptionEnergyQuantity $consumptionEnergyQuantity = null)
    {
        $this->consumptionEnergyQuantity = $consumptionEnergyQuantity;
        return $this;
    }

    /**
     * Gets as consumptionWaterQuantity
     *
     * BBIE
     *  Consumption Correction. Consumption Water. Quantity
     *  Your consumpt for district heating water.
     *  0..1
     *  Consumption Correction
     *  Consumption Water
     *  Quantity
     *  Quantity. Type
     *  13212.14
     *
     * @return \App\UBL\Common\CBC\ConsumptionWaterQuantity
     */
    public function getConsumptionWaterQuantity()
    {
        return $this->consumptionWaterQuantity;
    }

    /**
     * Sets a new consumptionWaterQuantity
     *
     * BBIE
     *  Consumption Correction. Consumption Water. Quantity
     *  Your consumpt for district heating water.
     *  0..1
     *  Consumption Correction
     *  Consumption Water
     *  Quantity
     *  Quantity. Type
     *  13212.14
     *
     * @param \App\UBL\Common\CBC\ConsumptionWaterQuantity $consumptionWaterQuantity
     * @return self
     */
    public function setConsumptionWaterQuantity(?\App\UBL\Common\CBC\ConsumptionWaterQuantity $consumptionWaterQuantity = null)
    {
        $this->consumptionWaterQuantity = $consumptionWaterQuantity;
        return $this;
    }

    /**
     * Gets as correctionAmount
     *
     * BBIE
     *  Consumption Correction. Correction Amount. Amount
     *  Your correction for heating correction.
     *  0..1
     *  Consumption Correction
     *  Correction Amount
     *  Amount
     *  Amount. Type
     *  0.00
     *
     * @return \App\UBL\Common\CBC\CorrectionAmount
     */
    public function getCorrectionAmount()
    {
        return $this->correctionAmount;
    }

    /**
     * Sets a new correctionAmount
     *
     * BBIE
     *  Consumption Correction. Correction Amount. Amount
     *  Your correction for heating correction.
     *  0..1
     *  Consumption Correction
     *  Correction Amount
     *  Amount
     *  Amount. Type
     *  0.00
     *
     * @param \App\UBL\Common\CBC\CorrectionAmount $correctionAmount
     * @return self
     */
    public function setCorrectionAmount(?\App\UBL\Common\CBC\CorrectionAmount $correctionAmount = null)
    {
        $this->correctionAmount = $correctionAmount;
        return $this;
    }
}

