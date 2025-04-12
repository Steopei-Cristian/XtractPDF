<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ForecastLineType
 *
 * ABIE
 *  Forecast Line. Details
 *  Detailed information about a particular Forecast Line within a Forecast Document
 *  Forecast Line
 * XSD Type: ForecastLineType
 */
class ForecastLineType
{
    /**
     * BBIE
     *  Forecast Line. Identifier
     *  An identifier for this forecast line.
     *  1
     *  Forecast Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Forecast Line. Frozen Document Indicator. Indicator
     *  An indicator that the status of the forecast is modifiable (true) or not (false).
     *  0..1
     *  Forecast Line
     *  Frozen Document Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $frozenDocumentIndicator
     */
    private $frozenDocumentIndicator = null;

    /**
     * BBIE
     *  Forecast Line. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *  seasonal, total
     *
     * @var \App\UBL\Common\CBC\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * ASBIE
     *  Forecast Line. Forecast_ Period. Period
     *  The period to which the forecast applies.
     *  0..1
     *  Forecast Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\ForecastPeriod $forecastPeriod
     */
    private $forecastPeriod = null;

    /**
     * ASBIE
     *  Forecast Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @var \App\UBL\Common\CAC\SalesItem $salesItem
     */
    private $salesItem = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Forecast Line. Identifier
     *  An identifier for this forecast line.
     *  1
     *  Forecast Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Forecast Line. Identifier
     *  An identifier for this forecast line.
     *  1
     *  Forecast Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(\App\UBL\Common\CBC\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Note $note
     */
    public function addToNote(\App\UBL\Common\CBC\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as frozenDocumentIndicator
     *
     * BBIE
     *  Forecast Line. Frozen Document Indicator. Indicator
     *  An indicator that the status of the forecast is modifiable (true) or not (false).
     *  0..1
     *  Forecast Line
     *  Frozen Document Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFrozenDocumentIndicator()
    {
        return $this->frozenDocumentIndicator;
    }

    /**
     * Sets a new frozenDocumentIndicator
     *
     * BBIE
     *  Forecast Line. Frozen Document Indicator. Indicator
     *  An indicator that the status of the forecast is modifiable (true) or not (false).
     *  0..1
     *  Forecast Line
     *  Frozen Document Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $frozenDocumentIndicator
     * @return self
     */
    public function setFrozenDocumentIndicator($frozenDocumentIndicator)
    {
        $this->frozenDocumentIndicator = $frozenDocumentIndicator;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * BBIE
     *  Forecast Line. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *  seasonal, total
     *
     * @return \App\UBL\Common\CBC\ForecastTypeCode
     */
    public function getForecastTypeCode()
    {
        return $this->forecastTypeCode;
    }

    /**
     * Sets a new forecastTypeCode
     *
     * BBIE
     *  Forecast Line. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *  seasonal, total
     *
     * @param \App\UBL\Common\CBC\ForecastTypeCode $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(\App\UBL\Common\CBC\ForecastTypeCode $forecastTypeCode)
    {
        $this->forecastTypeCode = $forecastTypeCode;
        return $this;
    }

    /**
     * Gets as forecastPeriod
     *
     * ASBIE
     *  Forecast Line. Forecast_ Period. Period
     *  The period to which the forecast applies.
     *  0..1
     *  Forecast Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @return \App\UBL\Common\CAC\ForecastPeriod
     */
    public function getForecastPeriod()
    {
        return $this->forecastPeriod;
    }

    /**
     * Sets a new forecastPeriod
     *
     * ASBIE
     *  Forecast Line. Forecast_ Period. Period
     *  The period to which the forecast applies.
     *  0..1
     *  Forecast Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\ForecastPeriod $forecastPeriod
     * @return self
     */
    public function setForecastPeriod(?\App\UBL\Common\CAC\ForecastPeriod $forecastPeriod = null)
    {
        $this->forecastPeriod = $forecastPeriod;
        return $this;
    }

    /**
     * Gets as salesItem
     *
     * ASBIE
     *  Forecast Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return \App\UBL\Common\CAC\SalesItem
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * ASBIE
     *  Forecast Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param \App\UBL\Common\CAC\SalesItem $salesItem
     * @return self
     */
    public function setSalesItem(?\App\UBL\Common\CAC\SalesItem $salesItem = null)
    {
        $this->salesItem = $salesItem;
        return $this;
    }
}

