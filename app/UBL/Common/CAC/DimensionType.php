<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing DimensionType
 *
 * ABIE
 *  Dimension. Details
 *  A class to define a measurable dimension (length, mass, weight, volume, or area) of an item.
 *  Dimension
 * XSD Type: DimensionType
 */
class DimensionType
{
    /**
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \App\UBL\Common\CBC\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \App\UBL\Common\CBC\MinimumMeasure $minimumMeasure
     */
    private $minimumMeasure = null;

    /**
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \App\UBL\Common\CBC\MaximumMeasure $maximumMeasure
     */
    private $maximumMeasure = null;

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\App\UBL\Common\CBC\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as measure
     *
     * BBIE
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \App\UBL\Common\CBC\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * BBIE
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \App\UBL\Common\CBC\Measure $measure
     * @return self
     */
    public function setMeasure(?\App\UBL\Common\CBC\Measure $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as minimumMeasure
     *
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \App\UBL\Common\CBC\MinimumMeasure
     */
    public function getMinimumMeasure()
    {
        return $this->minimumMeasure;
    }

    /**
     * Sets a new minimumMeasure
     *
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \App\UBL\Common\CBC\MinimumMeasure $minimumMeasure
     * @return self
     */
    public function setMinimumMeasure(?\App\UBL\Common\CBC\MinimumMeasure $minimumMeasure = null)
    {
        $this->minimumMeasure = $minimumMeasure;
        return $this;
    }

    /**
     * Gets as maximumMeasure
     *
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \App\UBL\Common\CBC\MaximumMeasure
     */
    public function getMaximumMeasure()
    {
        return $this->maximumMeasure;
    }

    /**
     * Sets a new maximumMeasure
     *
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \App\UBL\Common\CBC\MaximumMeasure $maximumMeasure
     * @return self
     */
    public function setMaximumMeasure(?\App\UBL\Common\CBC\MaximumMeasure $maximumMeasure = null)
    {
        $this->maximumMeasure = $maximumMeasure;
        return $this;
    }
}

