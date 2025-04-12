<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TemperatureType
 *
 * ABIE
 *  Temperature. Details
 *  A class to describe a measurement of temperature.
 *  Temperature
 * XSD Type: TemperatureType
 */
class TemperatureType
{
    /**
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \UBL\Common\CBC\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @var \UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\UBL\Common\CBC\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as measure
     *
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \UBL\Common\CBC\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \UBL\Common\CBC\Measure $measure
     * @return self
     */
    public function setMeasure(\UBL\Common\CBC\Measure $measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @return self
     * @param \UBL\Common\CBC\Description $description
     */
    public function addToDescription(\UBL\Common\CBC\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
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
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
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
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @return \UBL\Common\CBC\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @param \UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}


