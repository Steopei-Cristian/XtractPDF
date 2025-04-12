<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing DutyType
 *
 * ABIE
 *  Duty. Details
 *  The charging rate used for both call charging and time dependent charging
 *  Duty
 * XSD Type: DutyType
 */
class DutyType
{
    /**
     * BBIE
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
     *
     * @var \UBL\Common\CBC\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @var \UBL\Common\CBC\Duty $duty
     */
    private $duty = null;

    /**
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @var \UBL\Common\CBC\DutyCode $dutyCode
     */
    private $dutyCode = null;

    /**
     * ASBIE
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \UBL\Common\CAC\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
     *
     * @return \UBL\Common\CBC\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
     *
     * @param \UBL\Common\CBC\Amount $amount
     * @return self
     */
    public function setAmount(\UBL\Common\CBC\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as duty
     *
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @return \UBL\Common\CBC\Duty
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @param \UBL\Common\CBC\Duty $duty
     * @return self
     */
    public function setDuty(?\UBL\Common\CBC\Duty $duty = null)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Gets as dutyCode
     *
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @return \UBL\Common\CBC\DutyCode
     */
    public function getDutyCode()
    {
        return $this->dutyCode;
    }

    /**
     * Sets a new dutyCode
     *
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @param \UBL\Common\CBC\DutyCode $dutyCode
     * @return self
     */
    public function setDutyCode(?\UBL\Common\CBC\DutyCode $dutyCode = null)
    {
        $this->dutyCode = $dutyCode;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \UBL\Common\CAC\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \UBL\Common\CAC\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(?\UBL\Common\CAC\TaxCategory $taxCategory = null)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }
}


