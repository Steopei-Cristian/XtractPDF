<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing RenewalType
 *
 * ABIE
 *  Renewal. Details
 *  A class to describe the renewal of a commercial arrangement, such as a contract or licence fee.
 *  Renewal
 * XSD Type: RenewalType
 */
class RenewalType
{
    /**
     * BBIE
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \App\UBL\Common\CBC\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\Period $period
     */
    private $period = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \App\UBL\Common\CBC\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \App\UBL\Common\CBC\Amount $amount
     * @return self
     */
    public function setAmount(?\App\UBL\Common\CBC\Amount $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
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
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\Period $period
     * @return self
     */
    public function setPeriod(?\App\UBL\Common\CAC\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }
}

