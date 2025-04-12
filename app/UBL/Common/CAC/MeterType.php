<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing MeterType
 *
 * ABIE
 *  Meter. Details
 *  A class to describe a meter and its readings.
 *  Meter
 * XSD Type: MeterType
 */
class MeterType
{
    /**
     * BBIE
     *  Meter. Meter Number. Text
     *  The meter number, expressed as text.
     *  0..1
     *  Meter
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
     *
     * @var \App\UBL\Common\CBC\MeterNumber $meterNumber
     */
    private $meterNumber = null;

    /**
     * BBIE
     *  Meter. Meter Name. Text
     *  The name of this meter, which serves as an identifier to distinguish a main meter from a submeter.
     *  0..1
     *  Meter
     *  Meter Name
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\MeterName $meterName
     */
    private $meterName = null;

    /**
     * BBIE
     *  Meter. Meter Constant. Text
     *  The factor by which readings of this meter must be multiplied to calculate consumption, expressed as text.
     *  0..1
     *  Meter
     *  Meter Constant
     *  Text
     *  Text. Type
     *  1.000
     *
     * @var \App\UBL\Common\CBC\MeterConstant $meterConstant
     */
    private $meterConstant = null;

    /**
     * BBIE
     *  Meter. Meter Constant Code. Code
     *  A code signifying the formula to be used in applying the meter constant.
     *  0..1
     *  Meter
     *  Meter Constant Code
     *  Code
     *  Code. Type
     *  Factor
     *
     * @var \App\UBL\Common\CBC\MeterConstantCode $meterConstantCode
     */
    private $meterConstantCode = null;

    /**
     * BBIE
     *  Meter. Total_ Delivered Quantity. Quantity
     *  The quantity delivered; the total quantity consumed as calculated from the meter readings.
     *  0..1
     *  Meter
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @var \App\UBL\Common\CBC\TotalDeliveredQuantity $totalDeliveredQuantity
     */
    private $totalDeliveredQuantity = null;

    /**
     * ASBIE
     *  Meter. Meter Reading
     *  A reading of this meter.
     *  0..n
     *  Meter
     *  Meter Reading
     *  Meter Reading
     *  Meter Reading
     *
     * @var \App\UBL\Common\CAC\MeterReading[] $meterReading
     */
    private $meterReading = [
        
    ];

    /**
     * ASBIE
     *  Meter. Meter Property
     *  A property of this meter.
     *  0..n
     *  Meter
     *  Meter Property
     *  Meter Property
     *  Meter Property
     *
     * @var \App\UBL\Common\CAC\MeterProperty[] $meterProperty
     */
    private $meterProperty = [
        
    ];

    /**
     * Gets as meterNumber
     *
     * BBIE
     *  Meter. Meter Number. Text
     *  The meter number, expressed as text.
     *  0..1
     *  Meter
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
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
     *  Meter. Meter Number. Text
     *  The meter number, expressed as text.
     *  0..1
     *  Meter
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
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
     * Gets as meterName
     *
     * BBIE
     *  Meter. Meter Name. Text
     *  The name of this meter, which serves as an identifier to distinguish a main meter from a submeter.
     *  0..1
     *  Meter
     *  Meter Name
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\MeterName
     */
    public function getMeterName()
    {
        return $this->meterName;
    }

    /**
     * Sets a new meterName
     *
     * BBIE
     *  Meter. Meter Name. Text
     *  The name of this meter, which serves as an identifier to distinguish a main meter from a submeter.
     *  0..1
     *  Meter
     *  Meter Name
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\MeterName $meterName
     * @return self
     */
    public function setMeterName(?\App\UBL\Common\CBC\MeterName $meterName = null)
    {
        $this->meterName = $meterName;
        return $this;
    }

    /**
     * Gets as meterConstant
     *
     * BBIE
     *  Meter. Meter Constant. Text
     *  The factor by which readings of this meter must be multiplied to calculate consumption, expressed as text.
     *  0..1
     *  Meter
     *  Meter Constant
     *  Text
     *  Text. Type
     *  1.000
     *
     * @return \App\UBL\Common\CBC\MeterConstant
     */
    public function getMeterConstant()
    {
        return $this->meterConstant;
    }

    /**
     * Sets a new meterConstant
     *
     * BBIE
     *  Meter. Meter Constant. Text
     *  The factor by which readings of this meter must be multiplied to calculate consumption, expressed as text.
     *  0..1
     *  Meter
     *  Meter Constant
     *  Text
     *  Text. Type
     *  1.000
     *
     * @param \App\UBL\Common\CBC\MeterConstant $meterConstant
     * @return self
     */
    public function setMeterConstant(?\App\UBL\Common\CBC\MeterConstant $meterConstant = null)
    {
        $this->meterConstant = $meterConstant;
        return $this;
    }

    /**
     * Gets as meterConstantCode
     *
     * BBIE
     *  Meter. Meter Constant Code. Code
     *  A code signifying the formula to be used in applying the meter constant.
     *  0..1
     *  Meter
     *  Meter Constant Code
     *  Code
     *  Code. Type
     *  Factor
     *
     * @return \App\UBL\Common\CBC\MeterConstantCode
     */
    public function getMeterConstantCode()
    {
        return $this->meterConstantCode;
    }

    /**
     * Sets a new meterConstantCode
     *
     * BBIE
     *  Meter. Meter Constant Code. Code
     *  A code signifying the formula to be used in applying the meter constant.
     *  0..1
     *  Meter
     *  Meter Constant Code
     *  Code
     *  Code. Type
     *  Factor
     *
     * @param \App\UBL\Common\CBC\MeterConstantCode $meterConstantCode
     * @return self
     */
    public function setMeterConstantCode(?\App\UBL\Common\CBC\MeterConstantCode $meterConstantCode = null)
    {
        $this->meterConstantCode = $meterConstantCode;
        return $this;
    }

    /**
     * Gets as totalDeliveredQuantity
     *
     * BBIE
     *  Meter. Total_ Delivered Quantity. Quantity
     *  The quantity delivered; the total quantity consumed as calculated from the meter readings.
     *  0..1
     *  Meter
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @return \App\UBL\Common\CBC\TotalDeliveredQuantity
     */
    public function getTotalDeliveredQuantity()
    {
        return $this->totalDeliveredQuantity;
    }

    /**
     * Sets a new totalDeliveredQuantity
     *
     * BBIE
     *  Meter. Total_ Delivered Quantity. Quantity
     *  The quantity delivered; the total quantity consumed as calculated from the meter readings.
     *  0..1
     *  Meter
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @param \App\UBL\Common\CBC\TotalDeliveredQuantity $totalDeliveredQuantity
     * @return self
     */
    public function setTotalDeliveredQuantity(?\App\UBL\Common\CBC\TotalDeliveredQuantity $totalDeliveredQuantity = null)
    {
        $this->totalDeliveredQuantity = $totalDeliveredQuantity;
        return $this;
    }

    /**
     * Adds as meterReading
     *
     * ASBIE
     *  Meter. Meter Reading
     *  A reading of this meter.
     *  0..n
     *  Meter
     *  Meter Reading
     *  Meter Reading
     *  Meter Reading
     *
     * @return self
     * @param \App\UBL\Common\CAC\MeterReading $meterReading
     */
    public function addToMeterReading(\App\UBL\Common\CAC\MeterReading $meterReading)
    {
        $this->meterReading[] = $meterReading;
        return $this;
    }

    /**
     * isset meterReading
     *
     * ASBIE
     *  Meter. Meter Reading
     *  A reading of this meter.
     *  0..n
     *  Meter
     *  Meter Reading
     *  Meter Reading
     *  Meter Reading
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeterReading($index)
    {
        return isset($this->meterReading[$index]);
    }

    /**
     * unset meterReading
     *
     * ASBIE
     *  Meter. Meter Reading
     *  A reading of this meter.
     *  0..n
     *  Meter
     *  Meter Reading
     *  Meter Reading
     *  Meter Reading
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeterReading($index)
    {
        unset($this->meterReading[$index]);
    }

    /**
     * Gets as meterReading
     *
     * ASBIE
     *  Meter. Meter Reading
     *  A reading of this meter.
     *  0..n
     *  Meter
     *  Meter Reading
     *  Meter Reading
     *  Meter Reading
     *
     * @return \App\UBL\Common\CAC\MeterReading[]
     */
    public function getMeterReading()
    {
        return $this->meterReading;
    }

    /**
     * Sets a new meterReading
     *
     * ASBIE
     *  Meter. Meter Reading
     *  A reading of this meter.
     *  0..n
     *  Meter
     *  Meter Reading
     *  Meter Reading
     *  Meter Reading
     *
     * @param \App\UBL\Common\CAC\MeterReading[] $meterReading
     * @return self
     */
    public function setMeterReading(?array $meterReading = null)
    {
        $this->meterReading = $meterReading;
        return $this;
    }

    /**
     * Adds as meterProperty
     *
     * ASBIE
     *  Meter. Meter Property
     *  A property of this meter.
     *  0..n
     *  Meter
     *  Meter Property
     *  Meter Property
     *  Meter Property
     *
     * @return self
     * @param \App\UBL\Common\CAC\MeterProperty $meterProperty
     */
    public function addToMeterProperty(\App\UBL\Common\CAC\MeterProperty $meterProperty)
    {
        $this->meterProperty[] = $meterProperty;
        return $this;
    }

    /**
     * isset meterProperty
     *
     * ASBIE
     *  Meter. Meter Property
     *  A property of this meter.
     *  0..n
     *  Meter
     *  Meter Property
     *  Meter Property
     *  Meter Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeterProperty($index)
    {
        return isset($this->meterProperty[$index]);
    }

    /**
     * unset meterProperty
     *
     * ASBIE
     *  Meter. Meter Property
     *  A property of this meter.
     *  0..n
     *  Meter
     *  Meter Property
     *  Meter Property
     *  Meter Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeterProperty($index)
    {
        unset($this->meterProperty[$index]);
    }

    /**
     * Gets as meterProperty
     *
     * ASBIE
     *  Meter. Meter Property
     *  A property of this meter.
     *  0..n
     *  Meter
     *  Meter Property
     *  Meter Property
     *  Meter Property
     *
     * @return \App\UBL\Common\CAC\MeterProperty[]
     */
    public function getMeterProperty()
    {
        return $this->meterProperty;
    }

    /**
     * Sets a new meterProperty
     *
     * ASBIE
     *  Meter. Meter Property
     *  A property of this meter.
     *  0..n
     *  Meter
     *  Meter Property
     *  Meter Property
     *  Meter Property
     *
     * @param \App\UBL\Common\CAC\MeterProperty[] $meterProperty
     * @return self
     */
    public function setMeterProperty(?array $meterProperty = null)
    {
        $this->meterProperty = $meterProperty;
        return $this;
    }
}

