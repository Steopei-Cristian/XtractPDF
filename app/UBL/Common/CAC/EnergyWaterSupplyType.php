<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing EnergyWaterSupplyType
 *
 * ABIE
 *  Energy Water Supply. Details
 *  A class to describe the supply (and therefore consumption) of an amount of energy or water.
 *  Energy Water Supply
 * XSD Type: EnergyWaterSupplyType
 */
class EnergyWaterSupplyType
{
    /**
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @var \App\UBL\Common\CAC\ConsumptionReport[] $consumptionReport
     */
    private $consumptionReport = [
        
    ];

    /**
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @var \App\UBL\Common\CAC\EnergyTaxReport[] $energyTaxReport
     */
    private $energyTaxReport = [
        
    ];

    /**
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @var \App\UBL\Common\CAC\ConsumptionAverage[] $consumptionAverage
     */
    private $consumptionAverage = [
        
    ];

    /**
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @var \App\UBL\Common\CAC\EnergyWaterConsumptionCorrection[] $energyWaterConsumptionCorrection
     */
    private $energyWaterConsumptionCorrection = [
        
    ];

    /**
     * Adds as consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @return self
     * @param \App\UBL\Common\CAC\ConsumptionReport $consumptionReport
     */
    public function addToConsumptionReport(\App\UBL\Common\CAC\ConsumptionReport $consumptionReport)
    {
        $this->consumptionReport[] = $consumptionReport;
        return $this;
    }

    /**
     * isset consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionReport($index)
    {
        return isset($this->consumptionReport[$index]);
    }

    /**
     * unset consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionReport($index)
    {
        unset($this->consumptionReport[$index]);
    }

    /**
     * Gets as consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @return \App\UBL\Common\CAC\ConsumptionReport[]
     */
    public function getConsumptionReport()
    {
        return $this->consumptionReport;
    }

    /**
     * Sets a new consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @param \App\UBL\Common\CAC\ConsumptionReport[] $consumptionReport
     * @return self
     */
    public function setConsumptionReport(?array $consumptionReport = null)
    {
        $this->consumptionReport = $consumptionReport;
        return $this;
    }

    /**
     * Adds as energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @return self
     * @param \App\UBL\Common\CAC\EnergyTaxReport $energyTaxReport
     */
    public function addToEnergyTaxReport(\App\UBL\Common\CAC\EnergyTaxReport $energyTaxReport)
    {
        $this->energyTaxReport[] = $energyTaxReport;
        return $this;
    }

    /**
     * isset energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnergyTaxReport($index)
    {
        return isset($this->energyTaxReport[$index]);
    }

    /**
     * unset energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnergyTaxReport($index)
    {
        unset($this->energyTaxReport[$index]);
    }

    /**
     * Gets as energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @return \App\UBL\Common\CAC\EnergyTaxReport[]
     */
    public function getEnergyTaxReport()
    {
        return $this->energyTaxReport;
    }

    /**
     * Sets a new energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @param \App\UBL\Common\CAC\EnergyTaxReport[] $energyTaxReport
     * @return self
     */
    public function setEnergyTaxReport(?array $energyTaxReport = null)
    {
        $this->energyTaxReport = $energyTaxReport;
        return $this;
    }

    /**
     * Adds as consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @return self
     * @param \App\UBL\Common\CAC\ConsumptionAverage $consumptionAverage
     */
    public function addToConsumptionAverage(\App\UBL\Common\CAC\ConsumptionAverage $consumptionAverage)
    {
        $this->consumptionAverage[] = $consumptionAverage;
        return $this;
    }

    /**
     * isset consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionAverage($index)
    {
        return isset($this->consumptionAverage[$index]);
    }

    /**
     * unset consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionAverage($index)
    {
        unset($this->consumptionAverage[$index]);
    }

    /**
     * Gets as consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @return \App\UBL\Common\CAC\ConsumptionAverage[]
     */
    public function getConsumptionAverage()
    {
        return $this->consumptionAverage;
    }

    /**
     * Sets a new consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @param \App\UBL\Common\CAC\ConsumptionAverage[] $consumptionAverage
     * @return self
     */
    public function setConsumptionAverage(?array $consumptionAverage = null)
    {
        $this->consumptionAverage = $consumptionAverage;
        return $this;
    }

    /**
     * Adds as energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @return self
     * @param \App\UBL\Common\CAC\EnergyWaterConsumptionCorrection $energyWaterConsumptionCorrection
     */
    public function addToEnergyWaterConsumptionCorrection(\App\UBL\Common\CAC\EnergyWaterConsumptionCorrection $energyWaterConsumptionCorrection)
    {
        $this->energyWaterConsumptionCorrection[] = $energyWaterConsumptionCorrection;
        return $this;
    }

    /**
     * isset energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnergyWaterConsumptionCorrection($index)
    {
        return isset($this->energyWaterConsumptionCorrection[$index]);
    }

    /**
     * unset energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnergyWaterConsumptionCorrection($index)
    {
        unset($this->energyWaterConsumptionCorrection[$index]);
    }

    /**
     * Gets as energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @return \App\UBL\Common\CAC\EnergyWaterConsumptionCorrection[]
     */
    public function getEnergyWaterConsumptionCorrection()
    {
        return $this->energyWaterConsumptionCorrection;
    }

    /**
     * Sets a new energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @param \App\UBL\Common\CAC\EnergyWaterConsumptionCorrection[] $energyWaterConsumptionCorrection
     * @return self
     */
    public function setEnergyWaterConsumptionCorrection(?array $energyWaterConsumptionCorrection = null)
    {
        $this->energyWaterConsumptionCorrection = $energyWaterConsumptionCorrection;
        return $this;
    }
}

