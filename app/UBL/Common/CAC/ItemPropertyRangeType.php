<?php

namespace UBL\Common\CAC;

/**
 * Class representing ItemPropertyRangeType
 *
 * ABIE
 *  Item Property Range. Details
 *  A class to describe a range of values for an item property.
 *  Item Property Range
 * XSD Type: ItemPropertyRangeType
 */
class ItemPropertyRangeType
{
    /**
     * BBIE
     *  Item Property Range. Minimum_ Value. Text
     *  The minimum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Minimum
     *  Value
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\MinimumValue $minimumValue
     */
    private $minimumValue = null;

    /**
     * BBIE
     *  Item Property Range. Maximum_ Value. Text
     *  The maximum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Maximum
     *  Value
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\MaximumValue $maximumValue
     */
    private $maximumValue = null;

    /**
     * Gets as minimumValue
     *
     * BBIE
     *  Item Property Range. Minimum_ Value. Text
     *  The minimum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Minimum
     *  Value
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\MinimumValue
     */
    public function getMinimumValue()
    {
        return $this->minimumValue;
    }

    /**
     * Sets a new minimumValue
     *
     * BBIE
     *  Item Property Range. Minimum_ Value. Text
     *  The minimum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Minimum
     *  Value
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\MinimumValue $minimumValue
     * @return self
     */
    public function setMinimumValue(?\UBL\Common\CBC\MinimumValue $minimumValue = null)
    {
        $this->minimumValue = $minimumValue;
        return $this;
    }

    /**
     * Gets as maximumValue
     *
     * BBIE
     *  Item Property Range. Maximum_ Value. Text
     *  The maximum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Maximum
     *  Value
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\MaximumValue
     */
    public function getMaximumValue()
    {
        return $this->maximumValue;
    }

    /**
     * Sets a new maximumValue
     *
     * BBIE
     *  Item Property Range. Maximum_ Value. Text
     *  The maximum value in this range of values.
     *  0..1
     *  Item Property Range
     *  Maximum
     *  Value
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\MaximumValue $maximumValue
     * @return self
     */
    public function setMaximumValue(?\UBL\Common\CBC\MaximumValue $maximumValue = null)
    {
        $this->maximumValue = $maximumValue;
        return $this;
    }
}

