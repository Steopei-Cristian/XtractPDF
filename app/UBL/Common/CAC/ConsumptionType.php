<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ConsumptionType
 *
 * ABIE
 *  Consumption. Details
 *  A class to describe the consumption of a utility.
 *  Consumption
 * XSD Type: ConsumptionType
 */
class ConsumptionType
{
    /**
     * BBIE
     *  Consumption. Utility Statement Type Code. Code
     *  A code identifying the type of the Utility Statement required for this consumption. Explains the kind of utility the statement is about, e.g.. "gas", "electricity", "telephone"
     *  0..1
     *  Consumption
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @var \App\UBL\Common\CBC\UtilityStatementTypeCode $utilityStatementTypeCode
     */
    private $utilityStatementTypeCode = null;

    /**
     * ASBIE
     *  Consumption. Main_ Period. Period
     *  The period of consumption.
     *  0..1
     *  Consumption
     *  Main
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\MainPeriod $mainPeriod
     */
    private $mainPeriod = null;

    /**
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \App\UBL\Common\CAC\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \App\UBL\Common\CAC\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Consumption. Energy Water Supply
     *  The details of any energy or water consumption.
     *  0..1
     *  Consumption
     *  Energy Water Supply
     *  Energy Water Supply
     *  Energy Water Supply
     *
     * @var \App\UBL\Common\CAC\EnergyWaterSupply $energyWaterSupply
     */
    private $energyWaterSupply = null;

    /**
     * ASBIE
     *  Consumption. Telecommunications Supply
     *  The details of any telecommunications consumption.
     *  0..1
     *  Consumption
     *  Telecommunications Supply
     *  Telecommunications Supply
     *  Telecommunications Supply
     *
     * @var \App\UBL\Common\CAC\TelecommunicationsSupply $telecommunicationsSupply
     */
    private $telecommunicationsSupply = null;

    /**
     * ASBIE
     *  Consumption. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on this consumption, including any allowances, charges, or taxes.
     *  1
     *  Consumption
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \App\UBL\Common\CAC\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * Gets as utilityStatementTypeCode
     *
     * BBIE
     *  Consumption. Utility Statement Type Code. Code
     *  A code identifying the type of the Utility Statement required for this consumption. Explains the kind of utility the statement is about, e.g.. "gas", "electricity", "telephone"
     *  0..1
     *  Consumption
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @return \App\UBL\Common\CBC\UtilityStatementTypeCode
     */
    public function getUtilityStatementTypeCode()
    {
        return $this->utilityStatementTypeCode;
    }

    /**
     * Sets a new utilityStatementTypeCode
     *
     * BBIE
     *  Consumption. Utility Statement Type Code. Code
     *  A code identifying the type of the Utility Statement required for this consumption. Explains the kind of utility the statement is about, e.g.. "gas", "electricity", "telephone"
     *  0..1
     *  Consumption
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @param \App\UBL\Common\CBC\UtilityStatementTypeCode $utilityStatementTypeCode
     * @return self
     */
    public function setUtilityStatementTypeCode(?\App\UBL\Common\CBC\UtilityStatementTypeCode $utilityStatementTypeCode = null)
    {
        $this->utilityStatementTypeCode = $utilityStatementTypeCode;
        return $this;
    }

    /**
     * Gets as mainPeriod
     *
     * ASBIE
     *  Consumption. Main_ Period. Period
     *  The period of consumption.
     *  0..1
     *  Consumption
     *  Main
     *  Period
     *  Period
     *  Period
     *
     * @return \App\UBL\Common\CAC\MainPeriod
     */
    public function getMainPeriod()
    {
        return $this->mainPeriod;
    }

    /**
     * Sets a new mainPeriod
     *
     * ASBIE
     *  Consumption. Main_ Period. Period
     *  The period of consumption.
     *  0..1
     *  Consumption
     *  Main
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\MainPeriod $mainPeriod
     * @return self
     */
    public function setMainPeriod(?\App\UBL\Common\CAC\MainPeriod $mainPeriod = null)
    {
        $this->mainPeriod = $mainPeriod;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \App\UBL\Common\CAC\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\App\UBL\Common\CAC\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \App\UBL\Common\CAC\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \App\UBL\Common\CAC\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \App\UBL\Common\CAC\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\App\UBL\Common\CAC\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \App\UBL\Common\CAC\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \App\UBL\Common\CAC\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as energyWaterSupply
     *
     * ASBIE
     *  Consumption. Energy Water Supply
     *  The details of any energy or water consumption.
     *  0..1
     *  Consumption
     *  Energy Water Supply
     *  Energy Water Supply
     *  Energy Water Supply
     *
     * @return \App\UBL\Common\CAC\EnergyWaterSupply
     */
    public function getEnergyWaterSupply()
    {
        return $this->energyWaterSupply;
    }

    /**
     * Sets a new energyWaterSupply
     *
     * ASBIE
     *  Consumption. Energy Water Supply
     *  The details of any energy or water consumption.
     *  0..1
     *  Consumption
     *  Energy Water Supply
     *  Energy Water Supply
     *  Energy Water Supply
     *
     * @param \App\UBL\Common\CAC\EnergyWaterSupply $energyWaterSupply
     * @return self
     */
    public function setEnergyWaterSupply(?\App\UBL\Common\CAC\EnergyWaterSupply $energyWaterSupply = null)
    {
        $this->energyWaterSupply = $energyWaterSupply;
        return $this;
    }

    /**
     * Gets as telecommunicationsSupply
     *
     * ASBIE
     *  Consumption. Telecommunications Supply
     *  The details of any telecommunications consumption.
     *  0..1
     *  Consumption
     *  Telecommunications Supply
     *  Telecommunications Supply
     *  Telecommunications Supply
     *
     * @return \App\UBL\Common\CAC\TelecommunicationsSupply
     */
    public function getTelecommunicationsSupply()
    {
        return $this->telecommunicationsSupply;
    }

    /**
     * Sets a new telecommunicationsSupply
     *
     * ASBIE
     *  Consumption. Telecommunications Supply
     *  The details of any telecommunications consumption.
     *  0..1
     *  Consumption
     *  Telecommunications Supply
     *  Telecommunications Supply
     *  Telecommunications Supply
     *
     * @param \App\UBL\Common\CAC\TelecommunicationsSupply $telecommunicationsSupply
     * @return self
     */
    public function setTelecommunicationsSupply(?\App\UBL\Common\CAC\TelecommunicationsSupply $telecommunicationsSupply = null)
    {
        $this->telecommunicationsSupply = $telecommunicationsSupply;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Consumption. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on this consumption, including any allowances, charges, or taxes.
     *  1
     *  Consumption
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \App\UBL\Common\CAC\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Consumption. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on this consumption, including any allowances, charges, or taxes.
     *  1
     *  Consumption
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \App\UBL\Common\CAC\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(\App\UBL\Common\CAC\LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }
}

