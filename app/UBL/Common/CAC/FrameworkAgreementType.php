<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing FrameworkAgreementType
 *
 * ABIE
 *  Framework Agreement. Details
 *  A class to describe a tendering framework agreement.
 *  Framework Agreement
 * XSD Type: FrameworkAgreementType
 */
class FrameworkAgreementType
{
    /**
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\ExpectedOperatorQuantity $expectedOperatorQuantity
     */
    private $expectedOperatorQuantity = null;

    /**
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\MaximumOperatorQuantity $maximumOperatorQuantity
     */
    private $maximumOperatorQuantity = null;

    /**
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Justification[] $justification
     */
    private $justification = [
        
    ];

    /**
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Frequency[] $frequency
     */
    private $frequency = [
        
    ];

    /**
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL\Common\CAC\DurationPeriod $durationPeriod
     */
    private $durationPeriod = null;

    /**
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @var \UBL\Common\CAC\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     */
    private $subsequentProcessTenderRequirement = [
        
    ];

    /**
     * Gets as expectedOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL\Common\CBC\ExpectedOperatorQuantity
     */
    public function getExpectedOperatorQuantity()
    {
        return $this->expectedOperatorQuantity;
    }

    /**
     * Sets a new expectedOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL\Common\CBC\ExpectedOperatorQuantity $expectedOperatorQuantity
     * @return self
     */
    public function setExpectedOperatorQuantity(?\UBL\Common\CBC\ExpectedOperatorQuantity $expectedOperatorQuantity = null)
    {
        $this->expectedOperatorQuantity = $expectedOperatorQuantity;
        return $this;
    }

    /**
     * Gets as maximumOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL\Common\CBC\MaximumOperatorQuantity
     */
    public function getMaximumOperatorQuantity()
    {
        return $this->maximumOperatorQuantity;
    }

    /**
     * Sets a new maximumOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL\Common\CBC\MaximumOperatorQuantity $maximumOperatorQuantity
     * @return self
     */
    public function setMaximumOperatorQuantity(?\UBL\Common\CBC\MaximumOperatorQuantity $maximumOperatorQuantity = null)
    {
        $this->maximumOperatorQuantity = $maximumOperatorQuantity;
        return $this;
    }

    /**
     * Adds as justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Justification $justification
     */
    public function addToJustification(\UBL\Common\CBC\Justification $justification)
    {
        $this->justification[] = $justification;
        return $this;
    }

    /**
     * isset justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJustification($index)
    {
        return isset($this->justification[$index]);
    }

    /**
     * unset justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJustification($index)
    {
        unset($this->justification[$index]);
    }

    /**
     * Gets as justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Justification[]
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Sets a new justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Justification[] $justification
     * @return self
     */
    public function setJustification(?array $justification = null)
    {
        $this->justification = $justification;
        return $this;
    }

    /**
     * Adds as frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Frequency $frequency
     */
    public function addToFrequency(\UBL\Common\CBC\Frequency $frequency)
    {
        $this->frequency[] = $frequency;
        return $this;
    }

    /**
     * isset frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFrequency($index)
    {
        return isset($this->frequency[$index]);
    }

    /**
     * unset frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFrequency($index)
    {
        unset($this->frequency[$index]);
    }

    /**
     * Gets as frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Frequency[]
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Frequency[] $frequency
     * @return self
     */
    public function setFrequency(?array $frequency = null)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as durationPeriod
     *
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL\Common\CAC\DurationPeriod
     */
    public function getDurationPeriod()
    {
        return $this->durationPeriod;
    }

    /**
     * Sets a new durationPeriod
     *
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL\Common\CAC\DurationPeriod $durationPeriod
     * @return self
     */
    public function setDurationPeriod(?\UBL\Common\CAC\DurationPeriod $durationPeriod = null)
    {
        $this->durationPeriod = $durationPeriod;
        return $this;
    }

    /**
     * Adds as subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @return self
     * @param \UBL\Common\CAC\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement
     */
    public function addToSubsequentProcessTenderRequirement(\UBL\Common\CAC\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement)
    {
        $this->subsequentProcessTenderRequirement[] = $subsequentProcessTenderRequirement;
        return $this;
    }

    /**
     * isset subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsequentProcessTenderRequirement($index)
    {
        return isset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * unset subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsequentProcessTenderRequirement($index)
    {
        unset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * Gets as subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @return \UBL\Common\CAC\SubsequentProcessTenderRequirement[]
     */
    public function getSubsequentProcessTenderRequirement()
    {
        return $this->subsequentProcessTenderRequirement;
    }

    /**
     * Sets a new subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param \UBL\Common\CAC\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     * @return self
     */
    public function setSubsequentProcessTenderRequirement(?array $subsequentProcessTenderRequirement = null)
    {
        $this->subsequentProcessTenderRequirement = $subsequentProcessTenderRequirement;
        return $this;
    }
}


