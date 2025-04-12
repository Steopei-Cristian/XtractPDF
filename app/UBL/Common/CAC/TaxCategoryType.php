<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TaxCategoryType
 *
 * ABIE
 *  Tax Category. Details
 *  A class to describe one of the tax categories within a taxation scheme (e.g., High Rate VAT, Low Rate VAT).
 *  Tax Category
 * XSD Type: TaxCategoryType
 */
class TaxCategoryType
{
    /**
     * BBIE
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
     *
     * @var \UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \UBL\Common\CBC\Percent $percent
     */
    private $percent = null;

    /**
     * BBIE
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @var \UBL\Common\CBC\BaseUnitMeasure $baseUnitMeasure
     */
    private $baseUnitMeasure = null;

    /**
     * BBIE
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @var \UBL\Common\CBC\TaxExemptionReasonCode $taxExemptionReasonCode
     */
    private $taxExemptionReasonCode = null;

    /**
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\TaxExemptionReason[] $taxExemptionReason
     */
    private $taxExemptionReason = [
        
    ];

    /**
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\TierRange $tierRange
     */
    private $tierRange = null;

    /**
     * BBIE
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @var \UBL\Common\CBC\TierRatePercent $tierRatePercent
     */
    private $tierRatePercent = null;

    /**
     * ASBIE
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \UBL\Common\CAC\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
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
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
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
     * Gets as name
     *
     * BBIE
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
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
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
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
     * Gets as percent
     *
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \UBL\Common\CBC\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \UBL\Common\CBC\Percent $percent
     * @return self
     */
    public function setPercent(?\UBL\Common\CBC\Percent $percent = null)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as baseUnitMeasure
     *
     * BBIE
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @return \UBL\Common\CBC\BaseUnitMeasure
     */
    public function getBaseUnitMeasure()
    {
        return $this->baseUnitMeasure;
    }

    /**
     * Sets a new baseUnitMeasure
     *
     * BBIE
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @param \UBL\Common\CBC\BaseUnitMeasure $baseUnitMeasure
     * @return self
     */
    public function setBaseUnitMeasure(?\UBL\Common\CBC\BaseUnitMeasure $baseUnitMeasure = null)
    {
        $this->baseUnitMeasure = $baseUnitMeasure;
        return $this;
    }

    /**
     * Gets as perUnitAmount
     *
     * BBIE
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\PerUnitAmount
     */
    public function getPerUnitAmount()
    {
        return $this->perUnitAmount;
    }

    /**
     * Sets a new perUnitAmount
     *
     * BBIE
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\PerUnitAmount $perUnitAmount
     * @return self
     */
    public function setPerUnitAmount(?\UBL\Common\CBC\PerUnitAmount $perUnitAmount = null)
    {
        $this->perUnitAmount = $perUnitAmount;
        return $this;
    }

    /**
     * Gets as taxExemptionReasonCode
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @return \UBL\Common\CBC\TaxExemptionReasonCode
     */
    public function getTaxExemptionReasonCode()
    {
        return $this->taxExemptionReasonCode;
    }

    /**
     * Sets a new taxExemptionReasonCode
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @param \UBL\Common\CBC\TaxExemptionReasonCode $taxExemptionReasonCode
     * @return self
     */
    public function setTaxExemptionReasonCode(?\UBL\Common\CBC\TaxExemptionReasonCode $taxExemptionReasonCode = null)
    {
        $this->taxExemptionReasonCode = $taxExemptionReasonCode;
        return $this;
    }

    /**
     * Adds as taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\TaxExemptionReason $taxExemptionReason
     */
    public function addToTaxExemptionReason(\UBL\Common\CBC\TaxExemptionReason $taxExemptionReason)
    {
        $this->taxExemptionReason[] = $taxExemptionReason;
        return $this;
    }

    /**
     * isset taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxExemptionReason($index)
    {
        return isset($this->taxExemptionReason[$index]);
    }

    /**
     * unset taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxExemptionReason($index)
    {
        unset($this->taxExemptionReason[$index]);
    }

    /**
     * Gets as taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\TaxExemptionReason[]
     */
    public function getTaxExemptionReason()
    {
        return $this->taxExemptionReason;
    }

    /**
     * Sets a new taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\TaxExemptionReason[] $taxExemptionReason
     * @return self
     */
    public function setTaxExemptionReason(?array $taxExemptionReason = null)
    {
        $this->taxExemptionReason = $taxExemptionReason;
        return $this;
    }

    /**
     * Gets as tierRange
     *
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\TierRange
     */
    public function getTierRange()
    {
        return $this->tierRange;
    }

    /**
     * Sets a new tierRange
     *
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\TierRange $tierRange
     * @return self
     */
    public function setTierRange(?\UBL\Common\CBC\TierRange $tierRange = null)
    {
        $this->tierRange = $tierRange;
        return $this;
    }

    /**
     * Gets as tierRatePercent
     *
     * BBIE
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @return \UBL\Common\CBC\TierRatePercent
     */
    public function getTierRatePercent()
    {
        return $this->tierRatePercent;
    }

    /**
     * Sets a new tierRatePercent
     *
     * BBIE
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @param \UBL\Common\CBC\TierRatePercent $tierRatePercent
     * @return self
     */
    public function setTierRatePercent(?\UBL\Common\CBC\TierRatePercent $tierRatePercent = null)
    {
        $this->tierRatePercent = $tierRatePercent;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \UBL\Common\CAC\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \UBL\Common\CAC\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\UBL\Common\CAC\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }
}


