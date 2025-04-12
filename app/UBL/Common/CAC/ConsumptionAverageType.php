<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ConsumptionAverageType
 *
 * ABIE
 *  Consumption Average. Details
 *  A class to define an average consumption as a monetary amount.
 *  Consumption Average
 * XSD Type: ConsumptionAverageType
 */
class ConsumptionAverageType
{
    /**
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @var \App\UBL\Common\CBC\AverageAmount $averageAmount
     */
    private $averageAmount = null;

    /**
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as averageAmount
     *
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @return \App\UBL\Common\CBC\AverageAmount
     */
    public function getAverageAmount()
    {
        return $this->averageAmount;
    }

    /**
     * Sets a new averageAmount
     *
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @param \App\UBL\Common\CBC\AverageAmount $averageAmount
     * @return self
     */
    public function setAverageAmount(?\App\UBL\Common\CBC\AverageAmount $averageAmount = null)
    {
        $this->averageAmount = $averageAmount;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
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
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
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
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
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
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
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
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @param \App\UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

